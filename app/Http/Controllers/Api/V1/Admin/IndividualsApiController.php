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

            $id_no = $request->id_no;

            $related_work_exp = $request->duration_of_year_s_1 + $request->duration_of_year_s_2 + $request->duration_of_year_s_3;
            $request['total_year_s_related_work_exp'] = $related_work_exp;

            $request_params = clone $request;           

            unset($request_params->id_no);

            $request_params->total_year_s_related_work_exp = $related_work_exp;

            $individual = Individual::updateOrCreate([
                'id_no'   => $id_no,
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

        $related_work_exp = $request->duration_of_year_s_1 + $request->duration_of_year_s_2 + $request->duration_of_year_s_3;
        $request['total_year_s_related_work_exp'] = $related_work_exp;

        $request_params->total_year_s_related_work_exp = $related_work_exp;

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
