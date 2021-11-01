<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMembershipsIndividualRequest;
use App\Http\Requests\UpdateMembershipsIndividualRequest;
use App\Http\Resources\Admin\MembershipsIndividualResource;
use App\Models\MembershipsIndividual;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MembershipsIndividualsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('memberships_individual_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MembershipsIndividualResource(MembershipsIndividual::with(['member_status', 'member_class', 'member_name'])->get());
    }

    public function store(StoreMembershipsIndividualRequest $request)
    {
        $membershipsIndividual = MembershipsIndividual::create($request->all());

        return (new MembershipsIndividualResource($membershipsIndividual))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(MembershipsIndividual $membershipsIndividual)
    {
        abort_if(Gate::denies('memberships_individual_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MembershipsIndividualResource($membershipsIndividual->load(['member_status', 'member_class', 'member_name']));
    }

    public function update(UpdateMembershipsIndividualRequest $request, MembershipsIndividual $membershipsIndividual)
    {
        $membershipsIndividual->update($request->all());

        return (new MembershipsIndividualResource($membershipsIndividual))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(MembershipsIndividual $membershipsIndividual)
    {
        abort_if(Gate::denies('memberships_individual_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $membershipsIndividual->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
