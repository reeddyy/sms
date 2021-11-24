@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.qualificationsApp.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.qualifications-apps.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.id') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.status') }}
                        </th>
                        <td>
                            @foreach($qualificationsApp->statuses as $key => $status)
                                <span class="label label-info">{{ $status->status_name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.application_no') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->application_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.sponsorship') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->sponsorship }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.level') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->level }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.course') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->course }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.commencement') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->commencement }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.hear_about_us') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->hear_about_us }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.company_name') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->company_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.company_address') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->company_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.company_country') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->company_country }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.company_postal_code') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->company_postal_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.officer_name') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->officer_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.officer_designation') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->officer_designation }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.officer_contact') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->officer_contact }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.officer_email') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->officer_email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.applicant_name') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->applicant_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.gender') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->gender }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.id_type') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->id_type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.id_no') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->id_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.dob') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->dob }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.nationality') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->nationality }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.address') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.country') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->country }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.postal_code') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->postal_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.contact_no') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->contact_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.email') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.company_name_1') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->company_name_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.designation_1') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->designation_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.duration_1') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->duration_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.company_name_2') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->company_name_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.designation_2') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->designation_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.duration_2') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->duration_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.company_name_3') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->company_name_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.designation_3') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->designation_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.duration_3') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->duration_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.qualification_1') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->qualification_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.level_1') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->level_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.institute_1') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->institute_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.year_attained_1') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->year_attained_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.qualification_2') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->qualification_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.level_2') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->level_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.institute_2') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->institute_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.year_attained_2') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->year_attained_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.qualification_3') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->qualification_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.level_3') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->level_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.institute_3') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->institute_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.year_attained_3') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->year_attained_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.id_front') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->id_front }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.id_back') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->id_back }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.certificate') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->certificate }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsApp.fields.note') }}
                        </th>
                        <td>
                            {{ $qualificationsApp->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.qualifications-apps.index') }}">
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
            <a class="nav-link" href="#application_no_enrolments_qualifications" role="tab" data-toggle="tab">
                {{ trans('cruds.enrolmentsQualification.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="application_no_enrolments_qualifications">
            @includeIf('admin.qualificationsApps.relationships.applicationNoEnrolmentsQualifications', ['enrolmentsQualifications' => $qualificationsApp->applicationNoEnrolmentsQualifications])
        </div>
    </div>
</div>

@endsection