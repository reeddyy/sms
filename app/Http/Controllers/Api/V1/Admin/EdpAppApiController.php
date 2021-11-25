<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEdpAppRequest;
use App\Http\Requests\UpdateEdpAppRequest;
use App\Http\Resources\Admin\EdpAppResource;
use App\Models\EdpApp;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EdpAppApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('edp_app_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EdpAppResource(EdpApp::with(['statuses'])->get());
    }

    public function store(StoreEdpAppRequest $request)
    {
        $edpApp = EdpApp::create($request->all());
        $edpApp->statuses()->sync($request->input('statuses', []));

        return (new EdpAppResource($edpApp))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(EdpApp $edpApp)
    {
        abort_if(Gate::denies('edp_app_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EdpAppResource($edpApp->load(['statuses']));
    }

    public function update(UpdateEdpAppRequest $request, EdpApp $edpApp)
    {
        $edpApp->update($request->all());
        $edpApp->statuses()->sync($request->input('statuses', []));

        return (new EdpAppResource($edpApp))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(EdpApp $edpApp)
    {
        abort_if(Gate::denies('edp_app_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $edpApp->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
