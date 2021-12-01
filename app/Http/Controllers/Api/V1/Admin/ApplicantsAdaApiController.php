<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreApplicantsAdaRequest;
use App\Http\Requests\UpdateApplicantsAdaRequest;
use App\Http\Resources\Admin\ApplicantsAdaResource;
use App\Models\ApplicantsAda;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApplicantsAdaApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('applicants_ada_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ApplicantsAdaResource(ApplicantsAda::with(['statuses', 'application_no', 'award_name', 'applicant_name'])->get());
    }

    public function store(StoreApplicantsAdaRequest $request)
    {
        $applicantsAda = ApplicantsAda::create($request->all());
        $applicantsAda->statuses()->sync($request->input('statuses', []));

        return (new ApplicantsAdaResource($applicantsAda))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(ApplicantsAda $applicantsAda)
    {
        abort_if(Gate::denies('applicants_ada_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ApplicantsAdaResource($applicantsAda->load(['statuses', 'application_no', 'award_name', 'applicant_name']));
    }

    public function update(UpdateApplicantsAdaRequest $request, ApplicantsAda $applicantsAda)
    {
        $applicantsAda->update($request->all());
        $applicantsAda->statuses()->sync($request->input('statuses', []));

        return (new ApplicantsAdaResource($applicantsAda))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(ApplicantsAda $applicantsAda)
    {
        abort_if(Gate::denies('applicants_ada_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $applicantsAda->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
