<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFacilitatorRequest;
use App\Http\Requests\UpdateFacilitatorRequest;
use App\Http\Resources\Admin\FacilitatorResource;
use App\Models\Facilitator;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FacilitatorsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('facilitator_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FacilitatorResource(Facilitator::all());
    }

    public function store(StoreFacilitatorRequest $request)
    {
        $facilitator = Facilitator::create($request->all());

        return (new FacilitatorResource($facilitator))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Facilitator $facilitator)
    {
        abort_if(Gate::denies('facilitator_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FacilitatorResource($facilitator);
    }

    public function update(UpdateFacilitatorRequest $request, Facilitator $facilitator)
    {
        $facilitator->update($request->all());

        return (new FacilitatorResource($facilitator))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Facilitator $facilitator)
    {
        abort_if(Gate::denies('facilitator_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $facilitator->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
