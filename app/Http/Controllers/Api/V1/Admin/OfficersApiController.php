<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOfficerRequest;
use App\Http\Requests\UpdateOfficerRequest;
use App\Http\Resources\Admin\OfficerResource;
use App\Models\Officer;
use App\Models\Individual;
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

            //Add or update the individuals
            $request_data_individuals = $request_params->toArray();
            for($i = 0; $i <=4 ; $i++){

                $name_field_name = 'name_'.$i;
                $name_field_gender = 'gender_'.$i;
                $name_field_id_no = 'id_no_'.$i;
                $name_field_company_name = 'company_name_1_'.$i;
                $name_field_job_designation = 'job_designation_1_'.$i;
                $name_field_duration_of_year_s = 'duration_of_year_s_1_'.$i;
                $name_field_contact_no = 'contact_no_'.$i;
                $name_field_email_address = 'email_address_'.$i;
                $name_field_special_dietary = 'special_dietary_'.$i;
                $name_field_hear_about_us = 'hear_about_us_'.$i;

                if(isset($request_data_individuals[$name_field_name]) && $request_data_individuals[$name_field_name]!=''){
                    $name = $request_data_individuals[$name_field_name];
                    $gender = $request_data_individuals[$name_field_gender];
                    $id_no = $request_data_individuals[$name_field_id_no];
                    $company_name = $request_data_individuals[$name_field_company_name];
                    $job_designation = $request_data_individuals[$name_field_job_designation];
                    $duration_of_year_s = $request_data_individuals[$name_field_duration_of_year_s];
                    $contact_no = $request_data_individuals[$name_field_contact_no];
                    $email_address = $request_data_individuals[$name_field_email_address];
                    $special_dietary = $request_data_individuals[$name_field_special_dietary];
                    $hear_about_us = $request_data_individuals[$name_field_hear_about_us];

                    $individual_data = array(
                        "name" => $name,
                        "gender" => $gender,
                        //"id_no" => $id_no,
                        "company_name_1" => $company_name,
                        "job_designation_1" => $job_designation,
                        "duration_of_year_s_1" => $duration_of_year_s,
                        "total_year_s_related_work_exp" => $duration_of_year_s,
                        "contact_no" => $contact_no,
                        "email_address" => $email_address,
                        "special_dietary" => $special_dietary,
                        "hear_about_us" => $hear_about_us,
                    );

                    $individual = Individual::updateOrCreate([
                        'id_no'   => $id_no,
                    ],$individual_data);

                }
            }



            Log::info("Officer added successsfully.");
            return (new OfficerResource($officer))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
        }catch(\Exception $e){
            Log::info("Officer Exception -> ".$e->getMessage());
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
