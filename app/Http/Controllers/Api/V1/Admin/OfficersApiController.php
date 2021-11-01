<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOfficerRequest;
use App\Http\Requests\UpdateOfficerRequest;
use App\Http\Resources\Admin\OfficerResource;
use App\Models\Officer;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Log;

class OfficersApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('officer_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new OfficerResource(Officer::all());
    }

    public function store(StoreOfficerRequest $request)
    {
        try{
            Log::info("Officer addition started.");

            $officer_email_address = $request->officer_email_address;

            $request_params = clone $request;
            unset($request_params->officer_email_address);

            $officer = Officer::updateOrCreate([
                'officer_email_address'   => $officer_email_address,
            ],$request_params->toArray()
            
            );
            
            Log::info("Officer added successsfully.");
            return (new OfficerResource($officer))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function show(Officer $officer)
    {
        abort_if(Gate::denies('officer_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new OfficerResource($officer);
    }

    public function update(UpdateOfficerRequest $request, Officer $officer)
    {
        $officer->update($request->all());

        return (new OfficerResource($officer))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Officer $officer)
    {
        abort_if(Gate::denies('officer_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $officer->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
