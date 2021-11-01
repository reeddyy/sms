<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEnrolmentsQualificationRequest;
use App\Http\Requests\UpdateEnrolmentsQualificationRequest;
use App\Http\Resources\Admin\EnrolmentsQualificationResource;
use App\Models\EnrolmentsQualification;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnrolmentsQualificationsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('enrolments_qualification_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EnrolmentsQualificationResource(EnrolmentsQualification::with(['enrolment_status', 'course_title', 'classes', 'student_name', 'officer_name'])->get());
    }

    public function store(StoreEnrolmentsQualificationRequest $request)
    {
        $enrolmentsQualification = EnrolmentsQualification::create($request->all());
        $enrolmentsQualification->classes()->sync($request->input('classes', []));

        return (new EnrolmentsQualificationResource($enrolmentsQualification))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(EnrolmentsQualification $enrolmentsQualification)
    {
        abort_if(Gate::denies('enrolments_qualification_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EnrolmentsQualificationResource($enrolmentsQualification->load(['enrolment_status', 'course_title', 'classes', 'student_name', 'officer_name']));
    }

    public function update(UpdateEnrolmentsQualificationRequest $request, EnrolmentsQualification $enrolmentsQualification)
    {
        $enrolmentsQualification->update($request->all());
        $enrolmentsQualification->classes()->sync($request->input('classes', []));

        return (new EnrolmentsQualificationResource($enrolmentsQualification))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(EnrolmentsQualification $enrolmentsQualification)
    {
        abort_if(Gate::denies('enrolments_qualification_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $enrolmentsQualification->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
