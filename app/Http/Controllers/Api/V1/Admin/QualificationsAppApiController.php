<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreQualificationsAppRequest;
use App\Http\Requests\UpdateQualificationsAppRequest;
use App\Http\Resources\Admin\QualificationsAppResource;
use App\Models\QualificationsApp;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class QualificationsAppApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('qualifications_app_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new QualificationsAppResource(QualificationsApp::with(['statuses'])->get());
    }

    public function store(StoreQualificationsAppRequest $request)
    {
        $qualificationsApp = QualificationsApp::create($request->all());
        $qualificationsApp->statuses()->sync($request->input('statuses', []));

        return (new QualificationsAppResource($qualificationsApp))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(QualificationsApp $qualificationsApp)
    {
        abort_if(Gate::denies('qualifications_app_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new QualificationsAppResource($qualificationsApp->load(['statuses']));
    }

    public function update(UpdateQualificationsAppRequest $request, QualificationsApp $qualificationsApp)
    {
        $qualificationsApp->update($request->all());
        $qualificationsApp->statuses()->sync($request->input('statuses', []));

        return (new QualificationsAppResource($qualificationsApp))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(QualificationsApp $qualificationsApp)
    {
        abort_if(Gate::denies('qualifications_app_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $qualificationsApp->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}