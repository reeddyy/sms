<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyEnrolmentsQualificationRequest;
use App\Http\Requests\StoreEnrolmentsQualificationRequest;
use App\Http\Requests\UpdateEnrolmentsQualificationRequest;
use App\Models\ClassIntake;
use App\Models\Course;
use App\Models\EnrolmentsQualification;
use App\Models\Individual;
use App\Models\Officer;
use App\Models\QualificationsApp;
use App\Models\StatusQualification;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnrolmentsQualificationsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('enrolments_qualification_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $enrolmentsQualifications = EnrolmentsQualification::with(['statuses', 'app_no', 'course_title', 'classes', 'student_name', 'officer_name'])->get();

        $status_qualifications = StatusQualification::get();

        $qualifications_apps = QualificationsApp::get();

        $courses = Course::get();

        $class_intakes = ClassIntake::get();

        $individuals = Individual::get();

        $officers = Officer::get();

        return view('admin.enrolmentsQualifications.index', compact('enrolmentsQualifications', 'status_qualifications', 'qualifications_apps', 'courses', 'class_intakes', 'individuals', 'officers'));
    }

    public function create()
    {
        abort_if(Gate::denies('enrolments_qualification_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statuses = StatusQualification::pluck('status_name', 'id');

        $app_nos = QualificationsApp::pluck('application_no', 'id')->prepend(trans('global.pleaseSelect'), '');

        $course_titles = Course::pluck('course_title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $classes = ClassIntake::pluck('class_name', 'id');

        $student_names = Individual::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $officer_names = Officer::pluck('officer_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.enrolmentsQualifications.create', compact('statuses', 'app_nos', 'course_titles', 'classes', 'student_names', 'officer_names'));
    }

    public function store(StoreEnrolmentsQualificationRequest $request)
    {
        $enrolmentsQualification = EnrolmentsQualification::create($request->all());
        $enrolmentsQualification->statuses()->sync($request->input('statuses', []));
        $enrolmentsQualification->classes()->sync($request->input('classes', []));

        return redirect()->route('admin.enrolments-qualifications.index');
    }

    public function edit(EnrolmentsQualification $enrolmentsQualification)
    {
        abort_if(Gate::denies('enrolments_qualification_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statuses = StatusQualification::pluck('status_name', 'id');

        $app_nos = QualificationsApp::pluck('application_no', 'id')->prepend(trans('global.pleaseSelect'), '');

        $course_titles = Course::pluck('course_title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $classes = ClassIntake::pluck('class_name', 'id');

        $student_names = Individual::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $officer_names = Officer::pluck('officer_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $enrolmentsQualification->load('statuses', 'app_no', 'course_title', 'classes', 'student_name', 'officer_name');

        return view('admin.enrolmentsQualifications.edit', compact('statuses', 'app_nos', 'course_titles', 'classes', 'student_names', 'officer_names', 'enrolmentsQualification'));
    }

    public function update(UpdateEnrolmentsQualificationRequest $request, EnrolmentsQualification $enrolmentsQualification)
    {
        $enrolmentsQualification->update($request->all());
        $enrolmentsQualification->statuses()->sync($request->input('statuses', []));
        $enrolmentsQualification->classes()->sync($request->input('classes', []));

        return redirect()->route('admin.enrolments-qualifications.index');
    }

    public function show(EnrolmentsQualification $enrolmentsQualification)
    {
        abort_if(Gate::denies('enrolments_qualification_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $enrolmentsQualification->load('statuses', 'app_no', 'course_title', 'classes', 'student_name', 'officer_name', 'enrolmentNoPaymentsQualifications', 'enrolmentNoResultsModules');

        return view('admin.enrolmentsQualifications.show', compact('enrolmentsQualification'));
    }

    public function destroy(EnrolmentsQualification $enrolmentsQualification)
    {
        abort_if(Gate::denies('enrolments_qualification_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $enrolmentsQualification->delete();

        return back();
    }

    public function massDestroy(MassDestroyEnrolmentsQualificationRequest $request)
    {
        EnrolmentsQualification::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
