<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreIndividualsAppRequest;
use App\Http\Requests\UpdateIndividualsAppRequest;
use App\Http\Resources\Admin\IndividualsAppResource;
use App\Models\IndividualsApp;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Helpers\ApplicationNoHelper;

class IndividualsAppApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('individuals_app_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new IndividualsAppResource(IndividualsApp::with(['statuses'])->get());
    }

    public function store(StoreIndividualsAppRequest $request)
    {
        $individualsApp = IndividualsApp::create(array_merge($request->except('application_no'), ['application_no' => ApplicationNoHelper::getAppNo('IndividualsApp')]));
        $individualsApp->statuses()->sync($request->input('statuses', []));

        return (new IndividualsAppResource($individualsApp))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(IndividualsApp $individualsApp)
    {
        abort_if(Gate::denies('individuals_app_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new IndividualsAppResource($individualsApp->load(['statuses']));
    }

    public function update(UpdateIndividualsAppRequest $request, IndividualsApp $individualsApp)
    {
        $individualsApp->update($request->all());
        $individualsApp->statuses()->sync($request->input('statuses', []));

        return (new IndividualsAppResource($individualsApp))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(IndividualsApp $individualsApp)
    {
        abort_if(Gate::denies('individuals_app_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $individualsApp->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
