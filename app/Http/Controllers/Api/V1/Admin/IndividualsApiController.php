<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Api\V1\Admin\BaseController;
use App\Http\Requests\StoreIndividualRequest;
use App\Http\Requests\UpdateIndividualRequest;
use App\Http\Resources\Admin\IndividualResource;
use App\Models\Individual;
use Gate;
use Log;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IndividualsApiController extends BaseController
{
    public function index()
    {
        abort_if(Gate::denies('individual_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new IndividualResource(Individual::all());
    }

    public function store(StoreIndividualRequest $request)
    {
        try{
            Log::info("Individual Membership Started");

            $nric_fin = $request->nric_fin;

            $request_params = clone $request;
            unset($request_params->nric_fin);

            $individual = Individual::updateOrCreate([
                'nric_fin'   => $nric_fin,
            ],$request_params->toArray()

            );

            Log::info("Individual Membership Completed");
            return (new IndividualResource($individual))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function show(Individual $individual)
    {
        abort_if(Gate::denies('individual_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new IndividualResource($individual);
    }

    public function update(UpdateIndividualRequest $request, Individual $individual)
    {
        $individual->update($request->all());

        return (new IndividualResource($individual))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Individual $individual)
    {
        abort_if(Gate::denies('individual_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $individual->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
