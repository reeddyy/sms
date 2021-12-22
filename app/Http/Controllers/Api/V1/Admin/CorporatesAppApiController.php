<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCorporatesAppRequest;
use App\Http\Requests\UpdateCorporatesAppRequest;
use App\Http\Resources\Admin\CorporatesAppResource;
use App\Models\CorporatesApp;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Helpers\ApplicationNoHelper;

class CorporatesAppApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('corporates_app_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CorporatesAppResource(CorporatesApp::with(['statuses'])->get());
    }

    public function store(StoreCorporatesAppRequest $request)
    {
        $corporatesApp = CorporatesApp::create(array_merge($request->except('application_no'), ['application_no' => ApplicationNoHelper::getAppNo('CorporatesApp')]));
        $corporatesApp->statuses()->sync($request->input('statuses', []));

        return (new CorporatesAppResource($corporatesApp))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(CorporatesApp $corporatesApp)
    {
        abort_if(Gate::denies('corporates_app_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CorporatesAppResource($corporatesApp->load(['statuses']));
    }

    public function update(UpdateCorporatesAppRequest $request, CorporatesApp $corporatesApp)
    {
        $corporatesApp->update($request->all());
        $corporatesApp->statuses()->sync($request->input('statuses', []));

        return (new CorporatesAppResource($corporatesApp))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(CorporatesApp $corporatesApp)
    {
        abort_if(Gate::denies('corporates_app_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $corporatesApp->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
