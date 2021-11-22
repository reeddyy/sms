@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.enrolmentsQualification.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.enrolments-qualifications.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.enrolmentsQualification.fields.id') }}
                        </th>
                        <td>
                            {{ $enrolmentsQualification->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.enrolmentsQualification.fields.status') }}
                        </th>
                        <td>
                            @foreach($enrolmentsQualification->statuses as $key => $status)
                                <span class="label label-info">{{ $status->status_name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.enrolmentsQualification.fields.app_no') }}
                        </th>
                        <td>
                            {{ $enrolmentsQualification->app_no->application_no ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.enrolmentsQualification.fields.course_title') }}
                        </th>
                        <td>
                            {{ $enrolmentsQualification->course_title->course_title ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.enrolmentsQualification.fields.start_date') }}
                        </th>
                        <td>
                            {{ $enrolmentsQualification->start_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.enrolmentsQualification.fields.end_date') }}
                        </th>
                        <td>
                            {{ $enrolmentsQualification->end_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.enrolmentsQualification.fields.classes') }}
                        </th>
                        <td>
                            @foreach($enrolmentsQualification->classes as $key => $classes)
                                <span class="label label-info">{{ $classes->class_name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.enrolmentsQualification.fields.enrolment_no') }}
                        </th>
                        <td>
                            {{ $enrolmentsQualification->enrolment_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.enrolmentsQualification.fields.student_name') }}
                        </th>
                        <td>
                            {{ $enrolmentsQualification->student_name->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.enrolmentsQualification.fields.company_sponsored') }}
                        </th>
                        <td>
                            {{ App\Models\EnrolmentsQualification::COMPANY_SPONSORED_RADIO[$enrolmentsQualification->company_sponsored] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.enrolmentsQualification.fields.officer_name') }}
                        </th>
                        <td>
                            {{ $enrolmentsQualification->officer_name->officer_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.enrolmentsQualification.fields.total_fees') }}
                        </th>
                        <td>
                            {{ $enrolmentsQualification->total_fees }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.enrolmentsQualification.fields.amount_paid') }}
                        </th>
                        <td>
                            {{ $enrolmentsQualification->amount_paid }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.enrolmentsQualification.fields.outstanding_balance') }}
                        </th>
                        <td>
                            {{ $enrolmentsQualification->outstanding_balance }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.enrolmentsQualification.fields.note') }}
                        </th>
                        <td>
                            {{ $enrolmentsQualification->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.enrolments-qualifications.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#enrolment_no_payments_qualifications" role="tab" data-toggle="tab">
                {{ trans('cruds.paymentsQualification.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#enrolment_no_results_modules" role="tab" data-toggle="tab">
                {{ trans('cruds.resultsModule.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="enrolment_no_payments_qualifications">
            @includeIf('admin.enrolmentsQualifications.relationships.enrolmentNoPaymentsQualifications', ['paymentsQualifications' => $enrolmentsQualification->enrolmentNoPaymentsQualifications])
        </div>
        <div class="tab-pane" role="tabpanel" id="enrolment_no_results_modules">
            @includeIf('admin.enrolmentsQualifications.relationships.enrolmentNoResultsModules', ['resultsModules' => $enrolmentsQualification->enrolmentNoResultsModules])
        </div>
    </div>
</div>

@endsection