<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreQualificationsReqRequest;
use App\Http\Requests\UpdateQualificationsReqRequest;
use App\Http\Resources\Admin\QualificationsReqResource;
use App\Models\QualificationsReq;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class QualificationsReqApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('qualifications_req_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new QualificationsReqResource(QualificationsReq::with(['statuses'])->get());
    }

    public function store(StoreQualificationsReqRequest $request)
    {
        $qualificationsReq = QualificationsReq::create($request->all());
        $qualificationsReq->statuses()->sync($request->input('statuses', []));

        return (new QualificationsReqResource($qualificationsReq))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(QualificationsReq $qualificationsReq)
    {
        abort_if(Gate::denies('qualifications_req_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new QualificationsReqResource($qualificationsReq->load(['statuses']));
    }

    public function update(UpdateQualificationsReqRequest $request, QualificationsReq $qualificationsReq)
    {
        $qualificationsReq->update($request->all());
        $qualificationsReq->statuses()->sync($request->input('statuses', []));

        return (new QualificationsReqResource($qualificationsReq))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(QualificationsReq $qualificationsReq)
    {
        abort_if(Gate::denies('qualifications_req_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $qualificationsReq->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
