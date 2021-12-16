<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdaAppRequest;
use App\Http\Requests\UpdateAdaAppRequest;
use App\Http\Resources\Admin\AdaAppResource;
use App\Models\AdaApp;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdaAppApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('ada_app_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AdaAppResource(AdaApp::with(['statuses'])->get());
    }

    public function store(StoreAdaAppRequest $request)
    {
        $adaApp = AdaApp::create(array_merge($request->except('application_no'), ['application_no' => ApplicationNoHelper::getAppNo('AdaApp')]));
        $adaApp->statuses()->sync($request->input('statuses', []));

        return (new AdaAppResource($adaApp))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(AdaApp $adaApp)
    {
        abort_if(Gate::denies('ada_app_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AdaAppResource($adaApp->load(['statuses']));
    }

    public function update(UpdateAdaAppRequest $request, AdaApp $adaApp)
    {
        $adaApp->update($request->all());
        $adaApp->statuses()->sync($request->input('statuses', []));

        return (new AdaAppResource($adaApp))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(AdaApp $adaApp)
    {
        abort_if(Gate::denies('ada_app_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $adaApp->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
