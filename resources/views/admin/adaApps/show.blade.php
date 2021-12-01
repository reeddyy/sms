@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.adaApp.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.ada-apps.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.adaApp.fields.id') }}
                        </th>
                        <td>
                            {{ $adaApp->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adaApp.fields.status') }}
                        </th>
                        <td>
                            @foreach($adaApp->statuses as $key => $status)
                                <span class="label label-info">{{ $status->status_name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adaApp.fields.application_no') }}
                        </th>
                        <td>
                            {{ $adaApp->application_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adaApp.fields.award_name') }}
                        </th>
                        <td>
                            {{ $adaApp->award_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adaApp.fields.hear_about_us') }}
                        </th>
                        <td>
                            {{ $adaApp->hear_about_us }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adaApp.fields.title') }}
                        </th>
                        <td>
                            {{ $adaApp->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adaApp.fields.name') }}
                        </th>
                        <td>
                            {{ $adaApp->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adaApp.fields.id_no') }}
                        </th>
                        <td>
                            {{ $adaApp->id_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adaApp.fields.gender') }}
                        </th>
                        <td>
                            {{ $adaApp->gender }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adaApp.fields.dob') }}
                        </th>
                        <td>
                            {{ $adaApp->dob }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adaApp.fields.nationality') }}
                        </th>
                        <td>
                            {{ $adaApp->nationality }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adaApp.fields.address') }}
                        </th>
                        <td>
                            {{ $adaApp->address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adaApp.fields.country') }}
                        </th>
                        <td>
                            {{ $adaApp->country }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adaApp.fields.postal_code') }}
                        </th>
                        <td>
                            {{ $adaApp->postal_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adaApp.fields.contact_no') }}
                        </th>
                        <td>
                            {{ $adaApp->contact_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adaApp.fields.email') }}
                        </th>
                        <td>
                            {{ $adaApp->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adaApp.fields.company_name_1') }}
                        </th>
                        <td>
                            {{ $adaApp->company_name_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adaApp.fields.designation_1') }}
                        </th>
                        <td>
                            {{ $adaApp->designation_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adaApp.fields.duration_1') }}
                        </th>
                        <td>
                            {{ $adaApp->duration_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adaApp.fields.country_1') }}
                        </th>
                        <td>
                            {{ $adaApp->country_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adaApp.fields.company_name_2') }}
                        </th>
                        <td>
                            {{ $adaApp->company_name_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adaApp.fields.designation_2') }}
                        </th>
                        <td>
                            {{ $adaApp->designation_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adaApp.fields.duration_2') }}
                        </th>
                        <td>
                            {{ $adaApp->duration_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adaApp.fields.country_2') }}
                        </th>
                        <td>
                            {{ $adaApp->country_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adaApp.fields.company_name_3') }}
                        </th>
                        <td>
                            {{ $adaApp->company_name_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adaApp.fields.designation_3') }}
                        </th>
                        <td>
                            {{ $adaApp->designation_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adaApp.fields.duration_3') }}
                        </th>
                        <td>
                            {{ $adaApp->duration_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adaApp.fields.country_3') }}
                        </th>
                        <td>
                            {{ $adaApp->country_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adaApp.fields.programme_1') }}
                        </th>
                        <td>
                            {{ $adaApp->programme_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adaApp.fields.certificate_no_1') }}
                        </th>
                        <td>
                            {{ $adaApp->certificate_no_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adaApp.fields.date_awarded_1') }}
                        </th>
                        <td>
                            {{ $adaApp->date_awarded_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adaApp.fields.certificate_1') }}
                        </th>
                        <td>
                            {{ $adaApp->certificate_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adaApp.fields.programme_2') }}
                        </th>
                        <td>
                            {{ $adaApp->programme_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adaApp.fields.certificate_no_2') }}
                        </th>
                        <td>
                            {{ $adaApp->certificate_no_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adaApp.fields.date_awarded_2') }}
                        </th>
                        <td>
                            {{ $adaApp->date_awarded_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adaApp.fields.certificate_2') }}
                        </th>
                        <td>
                            {{ $adaApp->certificate_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adaApp.fields.programme_3') }}
                        </th>
                        <td>
                            {{ $adaApp->programme_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adaApp.fields.certificate_no_3') }}
                        </th>
                        <td>
                            {{ $adaApp->certificate_no_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adaApp.fields.date_awarded_3') }}
                        </th>
                        <td>
                            {{ $adaApp->date_awarded_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adaApp.fields.certificate_3') }}
                        </th>
                        <td>
                            {{ $adaApp->certificate_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.adaApp.fields.note') }}
                        </th>
                        <td>
                            {{ $adaApp->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.ada-apps.index') }}">
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
            <a class="nav-link" href="#application_no_applicants_adas" role="tab" data-toggle="tab">
                {{ trans('cruds.applicantsAda.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="application_no_applicants_adas">
            @includeIf('admin.adaApps.relationships.applicationNoApplicantsAdas', ['applicantsAdas' => $adaApp->applicationNoApplicantsAdas])
        </div>
    </div>
</div>

@endsection