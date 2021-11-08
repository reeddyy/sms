@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.individual.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.individuals.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.individual.fields.id') }}
                        </th>
                        <td>
                            {{ $individual->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individual.fields.title') }}
                        </th>
                        <td>
                            {{ App\Models\Individual::TITLE_SELECT[$individual->title] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individual.fields.name') }}
                        </th>
                        <td>
                            {{ $individual->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individual.fields.nric_fin') }}
                        </th>
                        <td>
                            {{ $individual->nric_fin }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individual.fields.residential_address') }}
                        </th>
                        <td>
                            {{ $individual->residential_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individual.fields.unit_no') }}
                        </th>
                        <td>
                            {{ $individual->unit_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individual.fields.country') }}
                        </th>
                        <td>
                            {{ $individual->country }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individual.fields.postal_code') }}
                        </th>
                        <td>
                            {{ $individual->postal_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individual.fields.contact_no') }}
                        </th>
                        <td>
                            {{ $individual->contact_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individual.fields.email_address') }}
                        </th>
                        <td>
                            {{ $individual->email_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individual.fields.company_name_1') }}
                        </th>
                        <td>
                            {{ $individual->company_name_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individual.fields.job_designation_1') }}
                        </th>
                        <td>
                            {{ $individual->job_designation_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individual.fields.duration_of_year_s_1') }}
                        </th>
                        <td>
                            {{ $individual->duration_of_year_s_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individual.fields.company_name_2') }}
                        </th>
                        <td>
                            {{ $individual->company_name_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individual.fields.job_designation_2') }}
                        </th>
                        <td>
                            {{ $individual->job_designation_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individual.fields.duration_of_year_s_2') }}
                        </th>
                        <td>
                            {{ $individual->duration_of_year_s_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individual.fields.company_name_3') }}
                        </th>
                        <td>
                            {{ $individual->company_name_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individual.fields.job_designation_3') }}
                        </th>
                        <td>
                            {{ $individual->job_designation_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individual.fields.duration_of_year_s_3') }}
                        </th>
                        <td>
                            {{ $individual->duration_of_year_s_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individual.fields.total_year_s_related_work_exp') }}
                        </th>
                        <td>
                            {{ $individual->total_year_s_related_work_exp }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individual.fields.qual_title_1') }}
                        </th>
                        <td>
                            {{ $individual->qual_title_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individual.fields.qual_level_1') }}
                        </th>
                        <td>
                            {{ $individual->qual_level_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individual.fields.institute_name_1') }}
                        </th>
                        <td>
                            {{ $individual->institute_name_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individual.fields.year_attained_1') }}
                        </th>
                        <td>
                            {{ $individual->year_attained_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individual.fields.qual_title_2') }}
                        </th>
                        <td>
                            {{ $individual->qual_title_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individual.fields.qual_level_2') }}
                        </th>
                        <td>
                            {{ $individual->qual_level_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individual.fields.institute_name_2') }}
                        </th>
                        <td>
                            {{ $individual->institute_name_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individual.fields.year_attained_2') }}
                        </th>
                        <td>
                            {{ $individual->year_attained_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individual.fields.qual_title_3') }}
                        </th>
                        <td>
                            {{ $individual->qual_title_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individual.fields.qual_level_3') }}
                        </th>
                        <td>
                            {{ $individual->qual_level_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individual.fields.institute_name_3') }}
                        </th>
                        <td>
                            {{ $individual->institute_name_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individual.fields.year_attained_3') }}
                        </th>
                        <td>
                            {{ $individual->year_attained_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individual.fields.special_dietary') }}
                        </th>
                        <td>
                            {{ $individual->special_dietary }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individual.fields.hear_about_us') }}
                        </th>
                        <td>
                            {{ $individual->hear_about_us }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individual.fields.note') }}
                        </th>
                        <td>
                            {{ $individual->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.individuals.index') }}">
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
            <a class="nav-link" href="#member_name_memberships_individuals" role="tab" data-toggle="tab">
                {{ trans('cruds.membershipsIndividual.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#student_name_enrolments_qualifications" role="tab" data-toggle="tab">
                {{ trans('cruds.enrolmentsQualification.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#participant_name_admissions_edps" role="tab" data-toggle="tab">
                {{ trans('cruds.admissionsEdp.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#applicant_name_applicants_adas" role="tab" data-toggle="tab">
                {{ trans('cruds.applicantsAda.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#recipient_name_certificates" role="tab" data-toggle="tab">
                {{ trans('cruds.certificate.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="member_name_memberships_individuals">
            @includeIf('admin.individuals.relationships.memberNameMembershipsIndividuals', ['membershipsIndividuals' => $individual->memberNameMembershipsIndividuals])
        </div>
        <div class="tab-pane" role="tabpanel" id="student_name_enrolments_qualifications">
            @includeIf('admin.individuals.relationships.studentNameEnrolmentsQualifications', ['enrolmentsQualifications' => $individual->studentNameEnrolmentsQualifications])
        </div>
        <div class="tab-pane" role="tabpanel" id="participant_name_admissions_edps">
            @includeIf('admin.individuals.relationships.participantNameAdmissionsEdps', ['admissionsEdps' => $individual->participantNameAdmissionsEdps])
        </div>
        <div class="tab-pane" role="tabpanel" id="applicant_name_applicants_adas">
            @includeIf('admin.individuals.relationships.applicantNameApplicantsAdas', ['applicantsAdas' => $individual->applicantNameApplicantsAdas])
        </div>
        <div class="tab-pane" role="tabpanel" id="recipient_name_certificates">
            @includeIf('admin.individuals.relationships.recipientNameCertificates', ['certificates' => $individual->recipientNameCertificates])
        </div>
    </div>
</div>

@endsection
