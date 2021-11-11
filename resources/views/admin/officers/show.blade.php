@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.officer.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.officers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.officer.fields.id') }}
                        </th>
                        <td>
                            {{ $officer->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.officer.fields.officer_title') }}
                        </th>
                        <td>
                            {{ App\Models\Officer::OFFICER_TITLE_SELECT[$officer->officer_title] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.officer.fields.officer_name') }}
                        </th>
                        <td>
                            {{ $officer->officer_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.officer.fields.officer_designation') }}
                        </th>
                        <td>
                            {{ $officer->officer_designation }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.officer.fields.officer_email_address') }}
                        </th>
                        <td>
                            {{ $officer->officer_email_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.officer.fields.officer_contact_no') }}
                        </th>
                        <td>
                            {{ $officer->officer_contact_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.officer.fields.company_name') }}
                        </th>
                        <td>
                            {{ $officer->company_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.officer.fields.company_address') }}
                        </th>
                        <td>
                            {{ $officer->company_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.officer.fields.unit_no') }}
                        </th>
                        <td>
                            {{ $officer->unit_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.officer.fields.country') }}
                        </th>
                        <td>
                            {{ $officer->country }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.officer.fields.postal_code') }}
                        </th>
                        <td>
                            {{ $officer->postal_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.officer.fields.hear_about_us') }}
                        </th>
                        <td>
                            {{ $officer->hear_about_us }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.officer.fields.note') }}
                        </th>
                        <td>
                            {{ $officer->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.officers.index') }}">
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
            <a class="nav-link" href="#officer_name_enrolments_qualifications" role="tab" data-toggle="tab">
                {{ trans('cruds.enrolmentsQualification.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#officer_name_admissions_edps" role="tab" data-toggle="tab">
                {{ trans('cruds.admissionsEdp.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="officer_name_enrolments_qualifications">
            @includeIf('admin.officers.relationships.officerNameEnrolmentsQualifications', ['enrolmentsQualifications' => $officer->officerNameEnrolmentsQualifications])
        </div>
        <div class="tab-pane" role="tabpanel" id="officer_name_admissions_edps">
            @includeIf('admin.officers.relationships.officerNameAdmissionsEdps', ['admissionsEdps' => $officer->officerNameAdmissionsEdps])
        </div>
    </div>
</div>

@endsection