<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEdpReqRequest;
use App\Http\Requests\UpdateEdpReqRequest;
use App\Http\Resources\Admin\EdpReqResource;
use App\Models\EdpReq;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EdpReqApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('edp_req_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EdpReqResource(EdpReq::with(['statuses'])->get());
    }

    public function store(StoreEdpReqRequest $request)
    {
        $edpReq = EdpReq::create($request->all());
        $edpReq->statuses()->sync($request->input('statuses', []));

        return (new EdpReqResource($edpReq))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(EdpReq $edpReq)
    {
        abort_if(Gate::denies('edp_req_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EdpReqResource($edpReq->load(['statuses']));
    }

    public function update(UpdateEdpReqRequest $request, EdpReq $edpReq)
    {
        $edpReq->update($request->all());
        $edpReq->statuses()->sync($request->input('statuses', []));

        return (new EdpReqResource($edpReq))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(EdpReq $edpReq)
    {
        abort_if(Gate::denies('edp_req_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $edpReq->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
