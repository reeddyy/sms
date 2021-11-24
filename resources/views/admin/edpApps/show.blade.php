@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.edpApp.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.edp-apps.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.id') }}
                        </th>
                        <td>
                            {{ $edpApp->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.status') }}
                        </th>
                        <td>
                            @foreach($edpApp->statuses as $key => $status)
                                <span class="label label-info">{{ $status->status_name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.application_no') }}
                        </th>
                        <td>
                            {{ $edpApp->application_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.sponsorship') }}
                        </th>
                        <td>
                            {{ $edpApp->sponsorship }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.no_participants') }}
                        </th>
                        <td>
                            {{ $edpApp->no_participants }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.level') }}
                        </th>
                        <td>
                            {{ $edpApp->level }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.programme') }}
                        </th>
                        <td>
                            {{ $edpApp->programme }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.commencement') }}
                        </th>
                        <td>
                            {{ $edpApp->commencement }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.hear_about_us') }}
                        </th>
                        <td>
                            {{ $edpApp->hear_about_us }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.company_name') }}
                        </th>
                        <td>
                            {{ $edpApp->company_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.company_address') }}
                        </th>
                        <td>
                            {{ $edpApp->company_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.country') }}
                        </th>
                        <td>
                            {{ $edpApp->country }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.postal_code') }}
                        </th>
                        <td>
                            {{ $edpApp->postal_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.officer_name') }}
                        </th>
                        <td>
                            {{ $edpApp->officer_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.officer_designation') }}
                        </th>
                        <td>
                            {{ $edpApp->officer_designation }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.officer_contact') }}
                        </th>
                        <td>
                            {{ $edpApp->officer_contact }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.officer_email') }}
                        </th>
                        <td>
                            {{ $edpApp->officer_email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.participant_name_1') }}
                        </th>
                        <td>
                            {{ $edpApp->participant_name_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.gender_1') }}
                        </th>
                        <td>
                            {{ $edpApp->gender_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.id_no_1') }}
                        </th>
                        <td>
                            {{ $edpApp->id_no_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.designation_1') }}
                        </th>
                        <td>
                            {{ $edpApp->designation_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.duration_1') }}
                        </th>
                        <td>
                            {{ $edpApp->duration_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.contact_no_1') }}
                        </th>
                        <td>
                            {{ $edpApp->contact_no_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.email_1') }}
                        </th>
                        <td>
                            {{ $edpApp->email_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.special_dietary_1') }}
                        </th>
                        <td>
                            {{ $edpApp->special_dietary_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.participant_name_2') }}
                        </th>
                        <td>
                            {{ $edpApp->participant_name_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.gender_2') }}
                        </th>
                        <td>
                            {{ $edpApp->gender_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.id_no_2') }}
                        </th>
                        <td>
                            {{ $edpApp->id_no_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.designation_2') }}
                        </th>
                        <td>
                            {{ $edpApp->designation_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.duration_2') }}
                        </th>
                        <td>
                            {{ $edpApp->duration_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.contact_no_2') }}
                        </th>
                        <td>
                            {{ $edpApp->contact_no_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.email_2') }}
                        </th>
                        <td>
                            {{ $edpApp->email_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.special_dietary_2') }}
                        </th>
                        <td>
                            {{ $edpApp->special_dietary_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.participant_name_3') }}
                        </th>
                        <td>
                            {{ $edpApp->participant_name_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.gender_3') }}
                        </th>
                        <td>
                            {{ $edpApp->gender_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.id_no_3') }}
                        </th>
                        <td>
                            {{ $edpApp->id_no_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.designation_3') }}
                        </th>
                        <td>
                            {{ $edpApp->designation_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.duration_3') }}
                        </th>
                        <td>
                            {{ $edpApp->duration_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.contact_no_3') }}
                        </th>
                        <td>
                            {{ $edpApp->contact_no_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.email_3') }}
                        </th>
                        <td>
                            {{ $edpApp->email_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.special_dietary_3') }}
                        </th>
                        <td>
                            {{ $edpApp->special_dietary_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.participant_name_4') }}
                        </th>
                        <td>
                            {{ $edpApp->participant_name_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.gender_4') }}
                        </th>
                        <td>
                            {{ $edpApp->gender_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.id_no_4') }}
                        </th>
                        <td>
                            {{ $edpApp->id_no_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.designation_4') }}
                        </th>
                        <td>
                            {{ $edpApp->designation_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.duration_4') }}
                        </th>
                        <td>
                            {{ $edpApp->duration_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.contact_no_4') }}
                        </th>
                        <td>
                            {{ $edpApp->contact_no_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.email_4') }}
                        </th>
                        <td>
                            {{ $edpApp->email_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.special_dietary_4') }}
                        </th>
                        <td>
                            {{ $edpApp->special_dietary_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.participant_name_5') }}
                        </th>
                        <td>
                            {{ $edpApp->participant_name_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.gender_5') }}
                        </th>
                        <td>
                            {{ $edpApp->gender_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.id_no_5') }}
                        </th>
                        <td>
                            {{ $edpApp->id_no_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.designation_5') }}
                        </th>
                        <td>
                            {{ $edpApp->designation_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.duration_5') }}
                        </th>
                        <td>
                            {{ $edpApp->duration_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.contact_no_5') }}
                        </th>
                        <td>
                            {{ $edpApp->contact_no_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.email_5') }}
                        </th>
                        <td>
                            {{ $edpApp->email_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.special_dietary_5') }}
                        </th>
                        <td>
                            {{ $edpApp->special_dietary_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpApp.fields.note') }}
                        </th>
                        <td>
                            {{ $edpApp->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.edp-apps.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection