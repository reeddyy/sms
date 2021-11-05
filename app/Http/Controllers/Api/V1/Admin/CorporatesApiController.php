<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Api\V1\Admin\BaseController;
use App\Http\Requests\StoreCorporateRequest;
use App\Http\Requests\UpdateCorporateRequest;
use App\Http\Resources\Admin\CorporateResource;
use App\Models\Corporate;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Log;

class CorporatesApiController extends BaseController
{
    public function index()
    {
        abort_if(Gate::denies('corporate_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CorporateResource(Corporate::all());
    }

    public function store(StoreCorporateRequest $request)
    {
        try{
            Log::info("Corporate Membership Started");

            $business_reg_no = $request->business_reg_no;

            $request_params = clone $request;
            unset($request_params->business_reg_no);

            $corporate = Corporate::updateOrCreate([
                'business_reg_no'   => $business_reg_no,
            ],$request_params->toArray()

            );

            Log::info("Corporate Membership Completed");
            return (new CorporateResource($corporate))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
        }catch(\Exception $e){
            return $e->getMessage();
        }
        
    }

    public function show(Corporate $corporate)
    {
        abort_if(Gate::denies('corporate_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CorporateResource($corporate);
    }

    public function update(UpdateCorporateRequest $request, Corporate $corporate)
    {
        $corporate->update($request->all());

        return (new CorporateResource($corporate))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Corporate $corporate)
    {
        abort_if(Gate::denies('corporate_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $corporate->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
