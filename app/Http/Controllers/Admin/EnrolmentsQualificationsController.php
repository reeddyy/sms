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

        $enrolmentsQualifications = EnrolmentsQualification::with(['statuses', 'application_no', 'course_title', 'classes', 'student_name', 'officer_name'])->get();

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

        $existing_application_no_ids = EnrolmentsQualification::select('application_no_id')->get()->toArray();

        $application_nos = QualificationsApp::whereNotIn('id', $existing_application_no_ids)->pluck('application_no', 'id')->prepend(trans('global.pleaseSelect'), '');

        $course_titles = Course::pluck('course_title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $classes = ClassIntake::pluck('class_name', 'id');

        $students = Individual::select('id', 'name', 'id_no')->get();

        $officer_names = Officer::pluck('officer_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.enrolmentsQualifications.create', compact('statuses', 'application_nos', 'course_titles', 'classes', 'students', 'officer_names'));
    }

    public function store(StoreEnrolmentsQualificationRequest $request)
    {
        $outstanding_balance = round($request->total_fees, 2) - round($request->amount_paid,2);
        $request['outstanding_balance'] = round($outstanding_balance, 2);

        $enrolmentsQualification = EnrolmentsQualification::create($request->all());
        $enrolmentsQualification->statuses()->sync($request->input('statuses', []));
        $enrolmentsQualification->classes()->sync($request->input('classes', []));

        return redirect()->route('admin.enrolments-qualifications.index');
    }

    public function edit(EnrolmentsQualification $enrolmentsQualification)
    {
        abort_if(Gate::denies('enrolments_qualification_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statuses = StatusQualification::pluck('status_name', 'id');

        $existing_application_no_ids = EnrolmentsQualification::where('application_no_id', '!=', $enrolmentsQualification->application_no_id)->select('application_no_id')->get()->toArray();

        $application_nos = QualificationsApp::whereNotIn('id', $existing_application_no_ids)->pluck('application_no', 'id')->prepend(trans('global.pleaseSelect'), '');

        $course_titles = Course::pluck('course_title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $classes = ClassIntake::pluck('class_name', 'id');

        $student_names = Individual::select('id', 'name', 'id_no')->get();

        $officer_names = Officer::pluck('officer_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $enrolmentsQualification->load('statuses', 'application_no', 'course_title', 'classes', 'student_name', 'officer_name', 'enrolmentNoPaymentsQualifications');

        $total_fees = $enrolmentsQualification->total_fees;
        $amount_paid = $enrolmentsQualification->enrolmentNoPaymentsQualifications->sum('payment_amount');


        $outstanding_balance = $total_fees - $amount_paid;

        return view('admin.enrolmentsQualifications.edit', compact('statuses', 'application_nos', 'course_titles', 'classes', 'student_names', 'officer_names', 'enrolmentsQualification', 'outstanding_balance', 'amount_paid'));
    }

    public function update(UpdateEnrolmentsQualificationRequest $request, EnrolmentsQualification $enrolmentsQualification)
    {
        $outstanding_balance = round($request->total_fees, 2) - round($request->amount_paid,2);
        $request['outstanding_balance'] = round($outstanding_balance, 2);
        $enrolmentsQualification->update($request->all());
        $enrolmentsQualification->statuses()->sync($request->input('statuses', []));
        $enrolmentsQualification->classes()->sync($request->input('classes', []));

        return redirect()->route('admin.enrolments-qualifications.index');
    }

    public function show(EnrolmentsQualification $enrolmentsQualification)
    {
        abort_if(Gate::denies('enrolments_qualification_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $enrolmentsQualification->load('statuses', 'application_no', 'course_title', 'classes', 'student_name', 'officer_name', 'enrolmentNoPaymentsQualifications', 'enrolmentNoResultsModules');

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

    public function getCourseFees($course_id)
    {
        abort_if(Gate::denies('enrolments_qualification_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $public_rate = 0;    
        $course = Course::where('id', $course_id)->firstOrFail();

        if(!empty($course)){    
            $public_rate = $course->public_rate;

            $installment_fee_1st = $course->instalment_fee_1st;
            $installment_fee_2nd = $course->instalment_fee_2nd;
            $installment_fee_3rd = $course->instalment_fee_3rd;

            $due_days_1 = $course->due_day_s_1st;
            $due_days_2 = $course->due_day_s_2nd;
            $due_days_3 = $course->due_day_s_3rd;
        }

        return json_encode(array(
            "course_fee" => $public_rate,
            "installment_fee_1" => $installment_fee_1st,
            "installment_fee_2" => $installment_fee_2nd,
            "installment_fee_3" => $installment_fee_3rd,
            "due_days_1" => $due_days_1,
            "due_days_2" => $due_days_2,
            "due_days_3" => $due_days_3,
        ));


    }
}
