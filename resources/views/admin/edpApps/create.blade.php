@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.edpApp.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.edp-apps.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="statuses">{{ trans('cruds.edpApp.fields.status') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('statuses') ? 'is-invalid' : '' }}" name="statuses[]" id="statuses" multiple>
                    @foreach($statuses as $id => $status)
                        <option value="{{ $id }}" {{ in_array($id, old('statuses', [])) ? 'selected' : '' }}>{{ $status }}</option>
                    @endforeach
                </select>
                @if($errors->has('statuses'))
                    <div class="invalid-feedback">
                        {{ $errors->first('statuses') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="application_no">{{ trans('cruds.edpApp.fields.application_no') }}</label>
                <input class="form-control {{ $errors->has('application_no') ? 'is-invalid' : '' }}" type="text" name="application_no" id="application_no" value="{{ old('application_no', '') }}" required>
                @if($errors->has('application_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('application_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.application_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="sponsorship">{{ trans('cruds.edpApp.fields.sponsorship') }}</label>
                <input class="form-control {{ $errors->has('sponsorship') ? 'is-invalid' : '' }}" type="text" name="sponsorship" id="sponsorship" value="{{ old('sponsorship', '') }}">
                @if($errors->has('sponsorship'))
                    <div class="invalid-feedback">
                        {{ $errors->first('sponsorship') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.sponsorship_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="no_participants">{{ trans('cruds.edpApp.fields.no_participants') }}</label>
                <input class="form-control {{ $errors->has('no_participants') ? 'is-invalid' : '' }}" type="number" name="no_participants" id="no_participants" value="{{ old('no_participants', '') }}" step="1">
                @if($errors->has('no_participants'))
                    <div class="invalid-feedback">
                        {{ $errors->first('no_participants') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.no_participants_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="level">{{ trans('cruds.edpApp.fields.level') }}</label>
                <input class="form-control {{ $errors->has('level') ? 'is-invalid' : '' }}" type="text" name="level" id="level" value="{{ old('level', '') }}">
                @if($errors->has('level'))
                    <div class="invalid-feedback">
                        {{ $errors->first('level') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.level_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="programme">{{ trans('cruds.edpApp.fields.programme') }}</label>
                <input class="form-control {{ $errors->has('programme') ? 'is-invalid' : '' }}" type="text" name="programme" id="programme" value="{{ old('programme', '') }}">
                @if($errors->has('programme'))
                    <div class="invalid-feedback">
                        {{ $errors->first('programme') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.programme_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="commencement">{{ trans('cruds.edpApp.fields.commencement') }}</label>
                <input class="form-control {{ $errors->has('commencement') ? 'is-invalid' : '' }}" type="text" name="commencement" id="commencement" value="{{ old('commencement', '') }}">
                @if($errors->has('commencement'))
                    <div class="invalid-feedback">
                        {{ $errors->first('commencement') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.commencement_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="hear_about_us">{{ trans('cruds.edpApp.fields.hear_about_us') }}</label>
                <input class="form-control {{ $errors->has('hear_about_us') ? 'is-invalid' : '' }}" type="text" name="hear_about_us" id="hear_about_us" value="{{ old('hear_about_us', '') }}">
                @if($errors->has('hear_about_us'))
                    <div class="invalid-feedback">
                        {{ $errors->first('hear_about_us') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.hear_about_us_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_name">{{ trans('cruds.edpApp.fields.company_name') }}</label>
                <input class="form-control {{ $errors->has('company_name') ? 'is-invalid' : '' }}" type="text" name="company_name" id="company_name" value="{{ old('company_name', '') }}">
                @if($errors->has('company_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.company_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_address">{{ trans('cruds.edpApp.fields.company_address') }}</label>
                <input class="form-control {{ $errors->has('company_address') ? 'is-invalid' : '' }}" type="text" name="company_address" id="company_address" value="{{ old('company_address', '') }}">
                @if($errors->has('company_address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.company_address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="country">{{ trans('cruds.edpApp.fields.country') }}</label>
                <input class="form-control {{ $errors->has('country') ? 'is-invalid' : '' }}" type="text" name="country" id="country" value="{{ old('country', '') }}">
                @if($errors->has('country'))
                    <div class="invalid-feedback">
                        {{ $errors->first('country') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.country_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="postal_code">{{ trans('cruds.edpApp.fields.postal_code') }}</label>
                <input class="form-control {{ $errors->has('postal_code') ? 'is-invalid' : '' }}" type="number" name="postal_code" id="postal_code" value="{{ old('postal_code', '') }}" step="1">
                @if($errors->has('postal_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('postal_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.postal_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="officer_name">{{ trans('cruds.edpApp.fields.officer_name') }}</label>
                <input class="form-control {{ $errors->has('officer_name') ? 'is-invalid' : '' }}" type="text" name="officer_name" id="officer_name" value="{{ old('officer_name', '') }}">
                @if($errors->has('officer_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('officer_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.officer_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="officer_designation">{{ trans('cruds.edpApp.fields.officer_designation') }}</label>
                <input class="form-control {{ $errors->has('officer_designation') ? 'is-invalid' : '' }}" type="text" name="officer_designation" id="officer_designation" value="{{ old('officer_designation', '') }}">
                @if($errors->has('officer_designation'))
                    <div class="invalid-feedback">
                        {{ $errors->first('officer_designation') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.officer_designation_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="officer_contact">{{ trans('cruds.edpApp.fields.officer_contact') }}</label>
                <input class="form-control {{ $errors->has('officer_contact') ? 'is-invalid' : '' }}" type="text" name="officer_contact" id="officer_contact" value="{{ old('officer_contact', '') }}">
                @if($errors->has('officer_contact'))
                    <div class="invalid-feedback">
                        {{ $errors->first('officer_contact') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.officer_contact_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="officer_email">{{ trans('cruds.edpApp.fields.officer_email') }}</label>
                <input class="form-control {{ $errors->has('officer_email') ? 'is-invalid' : '' }}" type="email" name="officer_email" id="officer_email" value="{{ old('officer_email') }}">
                @if($errors->has('officer_email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('officer_email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.officer_email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="participant_name_1">{{ trans('cruds.edpApp.fields.participant_name_1') }}</label>
                <input class="form-control {{ $errors->has('participant_name_1') ? 'is-invalid' : '' }}" type="text" name="participant_name_1" id="participant_name_1" value="{{ old('participant_name_1', '') }}">
                @if($errors->has('participant_name_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('participant_name_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.participant_name_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="gender_1">{{ trans('cruds.edpApp.fields.gender_1') }}</label>
                <input class="form-control {{ $errors->has('gender_1') ? 'is-invalid' : '' }}" type="text" name="gender_1" id="gender_1" value="{{ old('gender_1', '') }}">
                @if($errors->has('gender_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('gender_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.gender_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="id_no_1">{{ trans('cruds.edpApp.fields.id_no_1') }}</label>
                <input class="form-control {{ $errors->has('id_no_1') ? 'is-invalid' : '' }}" type="text" name="id_no_1" id="id_no_1" value="{{ old('id_no_1', '') }}">
                @if($errors->has('id_no_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('id_no_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.id_no_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="designation_1">{{ trans('cruds.edpApp.fields.designation_1') }}</label>
                <input class="form-control {{ $errors->has('designation_1') ? 'is-invalid' : '' }}" type="text" name="designation_1" id="designation_1" value="{{ old('designation_1', '') }}">
                @if($errors->has('designation_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('designation_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.designation_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="duration_1">{{ trans('cruds.edpApp.fields.duration_1') }}</label>
                <input class="form-control {{ $errors->has('duration_1') ? 'is-invalid' : '' }}" type="number" name="duration_1" id="duration_1" value="{{ old('duration_1', '') }}" step="1">
                @if($errors->has('duration_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('duration_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.duration_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contact_no_1">{{ trans('cruds.edpApp.fields.contact_no_1') }}</label>
                <input class="form-control {{ $errors->has('contact_no_1') ? 'is-invalid' : '' }}" type="text" name="contact_no_1" id="contact_no_1" value="{{ old('contact_no_1', '') }}">
                @if($errors->has('contact_no_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact_no_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.contact_no_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email_1">{{ trans('cruds.edpApp.fields.email_1') }}</label>
                <input class="form-control {{ $errors->has('email_1') ? 'is-invalid' : '' }}" type="email" name="email_1" id="email_1" value="{{ old('email_1') }}">
                @if($errors->has('email_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.email_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="special_dietary_1">{{ trans('cruds.edpApp.fields.special_dietary_1') }}</label>
                <input class="form-control {{ $errors->has('special_dietary_1') ? 'is-invalid' : '' }}" type="text" name="special_dietary_1" id="special_dietary_1" value="{{ old('special_dietary_1', '') }}">
                @if($errors->has('special_dietary_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('special_dietary_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.special_dietary_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="participant_name_2">{{ trans('cruds.edpApp.fields.participant_name_2') }}</label>
                <input class="form-control {{ $errors->has('participant_name_2') ? 'is-invalid' : '' }}" type="text" name="participant_name_2" id="participant_name_2" value="{{ old('participant_name_2', '') }}">
                @if($errors->has('participant_name_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('participant_name_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.participant_name_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="gender_2">{{ trans('cruds.edpApp.fields.gender_2') }}</label>
                <input class="form-control {{ $errors->has('gender_2') ? 'is-invalid' : '' }}" type="text" name="gender_2" id="gender_2" value="{{ old('gender_2', '') }}">
                @if($errors->has('gender_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('gender_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.gender_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="id_no_2">{{ trans('cruds.edpApp.fields.id_no_2') }}</label>
                <input class="form-control {{ $errors->has('id_no_2') ? 'is-invalid' : '' }}" type="text" name="id_no_2" id="id_no_2" value="{{ old('id_no_2', '') }}">
                @if($errors->has('id_no_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('id_no_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.id_no_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="designation_2">{{ trans('cruds.edpApp.fields.designation_2') }}</label>
                <input class="form-control {{ $errors->has('designation_2') ? 'is-invalid' : '' }}" type="text" name="designation_2" id="designation_2" value="{{ old('designation_2', '') }}">
                @if($errors->has('designation_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('designation_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.designation_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="duration_2">{{ trans('cruds.edpApp.fields.duration_2') }}</label>
                <input class="form-control {{ $errors->has('duration_2') ? 'is-invalid' : '' }}" type="number" name="duration_2" id="duration_2" value="{{ old('duration_2', '') }}" step="1">
                @if($errors->has('duration_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('duration_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.duration_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contact_no_2">{{ trans('cruds.edpApp.fields.contact_no_2') }}</label>
                <input class="form-control {{ $errors->has('contact_no_2') ? 'is-invalid' : '' }}" type="text" name="contact_no_2" id="contact_no_2" value="{{ old('contact_no_2', '') }}">
                @if($errors->has('contact_no_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact_no_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.contact_no_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email_2">{{ trans('cruds.edpApp.fields.email_2') }}</label>
                <input class="form-control {{ $errors->has('email_2') ? 'is-invalid' : '' }}" type="email" name="email_2" id="email_2" value="{{ old('email_2') }}">
                @if($errors->has('email_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.email_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="special_dietary_2">{{ trans('cruds.edpApp.fields.special_dietary_2') }}</label>
                <input class="form-control {{ $errors->has('special_dietary_2') ? 'is-invalid' : '' }}" type="text" name="special_dietary_2" id="special_dietary_2" value="{{ old('special_dietary_2', '') }}">
                @if($errors->has('special_dietary_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('special_dietary_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.special_dietary_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="participant_name_3">{{ trans('cruds.edpApp.fields.participant_name_3') }}</label>
                <input class="form-control {{ $errors->has('participant_name_3') ? 'is-invalid' : '' }}" type="text" name="participant_name_3" id="participant_name_3" value="{{ old('participant_name_3', '') }}">
                @if($errors->has('participant_name_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('participant_name_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.participant_name_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="gender_3">{{ trans('cruds.edpApp.fields.gender_3') }}</label>
                <input class="form-control {{ $errors->has('gender_3') ? 'is-invalid' : '' }}" type="text" name="gender_3" id="gender_3" value="{{ old('gender_3', '') }}">
                @if($errors->has('gender_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('gender_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.gender_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="id_no_3">{{ trans('cruds.edpApp.fields.id_no_3') }}</label>
                <input class="form-control {{ $errors->has('id_no_3') ? 'is-invalid' : '' }}" type="text" name="id_no_3" id="id_no_3" value="{{ old('id_no_3', '') }}">
                @if($errors->has('id_no_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('id_no_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.id_no_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="designation_3">{{ trans('cruds.edpApp.fields.designation_3') }}</label>
                <input class="form-control {{ $errors->has('designation_3') ? 'is-invalid' : '' }}" type="text" name="designation_3" id="designation_3" value="{{ old('designation_3', '') }}">
                @if($errors->has('designation_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('designation_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.designation_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="duration_3">{{ trans('cruds.edpApp.fields.duration_3') }}</label>
                <input class="form-control {{ $errors->has('duration_3') ? 'is-invalid' : '' }}" type="number" name="duration_3" id="duration_3" value="{{ old('duration_3', '') }}" step="1">
                @if($errors->has('duration_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('duration_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.duration_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contact_no_3">{{ trans('cruds.edpApp.fields.contact_no_3') }}</label>
                <input class="form-control {{ $errors->has('contact_no_3') ? 'is-invalid' : '' }}" type="text" name="contact_no_3" id="contact_no_3" value="{{ old('contact_no_3', '') }}">
                @if($errors->has('contact_no_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact_no_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.contact_no_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email_3">{{ trans('cruds.edpApp.fields.email_3') }}</label>
                <input class="form-control {{ $errors->has('email_3') ? 'is-invalid' : '' }}" type="email" name="email_3" id="email_3" value="{{ old('email_3') }}">
                @if($errors->has('email_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.email_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="special_dietary_3">{{ trans('cruds.edpApp.fields.special_dietary_3') }}</label>
                <input class="form-control {{ $errors->has('special_dietary_3') ? 'is-invalid' : '' }}" type="text" name="special_dietary_3" id="special_dietary_3" value="{{ old('special_dietary_3', '') }}">
                @if($errors->has('special_dietary_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('special_dietary_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.special_dietary_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="participant_name_4">{{ trans('cruds.edpApp.fields.participant_name_4') }}</label>
                <input class="form-control {{ $errors->has('participant_name_4') ? 'is-invalid' : '' }}" type="text" name="participant_name_4" id="participant_name_4" value="{{ old('participant_name_4', '') }}">
                @if($errors->has('participant_name_4'))
                    <div class="invalid-feedback">
                        {{ $errors->first('participant_name_4') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.participant_name_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="gender_4">{{ trans('cruds.edpApp.fields.gender_4') }}</label>
                <input class="form-control {{ $errors->has('gender_4') ? 'is-invalid' : '' }}" type="text" name="gender_4" id="gender_4" value="{{ old('gender_4', '') }}">
                @if($errors->has('gender_4'))
                    <div class="invalid-feedback">
                        {{ $errors->first('gender_4') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.gender_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="id_no_4">{{ trans('cruds.edpApp.fields.id_no_4') }}</label>
                <input class="form-control {{ $errors->has('id_no_4') ? 'is-invalid' : '' }}" type="text" name="id_no_4" id="id_no_4" value="{{ old('id_no_4', '') }}">
                @if($errors->has('id_no_4'))
                    <div class="invalid-feedback">
                        {{ $errors->first('id_no_4') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.id_no_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="designation_4">{{ trans('cruds.edpApp.fields.designation_4') }}</label>
                <input class="form-control {{ $errors->has('designation_4') ? 'is-invalid' : '' }}" type="text" name="designation_4" id="designation_4" value="{{ old('designation_4', '') }}">
                @if($errors->has('designation_4'))
                    <div class="invalid-feedback">
                        {{ $errors->first('designation_4') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.designation_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="duration_4">{{ trans('cruds.edpApp.fields.duration_4') }}</label>
                <input class="form-control {{ $errors->has('duration_4') ? 'is-invalid' : '' }}" type="number" name="duration_4" id="duration_4" value="{{ old('duration_4', '') }}" step="1">
                @if($errors->has('duration_4'))
                    <div class="invalid-feedback">
                        {{ $errors->first('duration_4') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.duration_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contact_no_4">{{ trans('cruds.edpApp.fields.contact_no_4') }}</label>
                <input class="form-control {{ $errors->has('contact_no_4') ? 'is-invalid' : '' }}" type="text" name="contact_no_4" id="contact_no_4" value="{{ old('contact_no_4', '') }}">
                @if($errors->has('contact_no_4'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact_no_4') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.contact_no_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email_4">{{ trans('cruds.edpApp.fields.email_4') }}</label>
                <input class="form-control {{ $errors->has('email_4') ? 'is-invalid' : '' }}" type="email" name="email_4" id="email_4" value="{{ old('email_4') }}">
                @if($errors->has('email_4'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email_4') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.email_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="special_dietary_4">{{ trans('cruds.edpApp.fields.special_dietary_4') }}</label>
                <input class="form-control {{ $errors->has('special_dietary_4') ? 'is-invalid' : '' }}" type="text" name="special_dietary_4" id="special_dietary_4" value="{{ old('special_dietary_4', '') }}">
                @if($errors->has('special_dietary_4'))
                    <div class="invalid-feedback">
                        {{ $errors->first('special_dietary_4') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.special_dietary_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="participant_name_5">{{ trans('cruds.edpApp.fields.participant_name_5') }}</label>
                <input class="form-control {{ $errors->has('participant_name_5') ? 'is-invalid' : '' }}" type="text" name="participant_name_5" id="participant_name_5" value="{{ old('participant_name_5', '') }}">
                @if($errors->has('participant_name_5'))
                    <div class="invalid-feedback">
                        {{ $errors->first('participant_name_5') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.participant_name_5_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="gender_5">{{ trans('cruds.edpApp.fields.gender_5') }}</label>
                <input class="form-control {{ $errors->has('gender_5') ? 'is-invalid' : '' }}" type="text" name="gender_5" id="gender_5" value="{{ old('gender_5', '') }}">
                @if($errors->has('gender_5'))
                    <div class="invalid-feedback">
                        {{ $errors->first('gender_5') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.gender_5_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="id_no_5">{{ trans('cruds.edpApp.fields.id_no_5') }}</label>
                <input class="form-control {{ $errors->has('id_no_5') ? 'is-invalid' : '' }}" type="text" name="id_no_5" id="id_no_5" value="{{ old('id_no_5', '') }}">
                @if($errors->has('id_no_5'))
                    <div class="invalid-feedback">
                        {{ $errors->first('id_no_5') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.id_no_5_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="designation_5">{{ trans('cruds.edpApp.fields.designation_5') }}</label>
                <input class="form-control {{ $errors->has('designation_5') ? 'is-invalid' : '' }}" type="text" name="designation_5" id="designation_5" value="{{ old('designation_5', '') }}">
                @if($errors->has('designation_5'))
                    <div class="invalid-feedback">
                        {{ $errors->first('designation_5') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.designation_5_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="duration_5">{{ trans('cruds.edpApp.fields.duration_5') }}</label>
                <input class="form-control {{ $errors->has('duration_5') ? 'is-invalid' : '' }}" type="number" name="duration_5" id="duration_5" value="{{ old('duration_5', '') }}" step="1">
                @if($errors->has('duration_5'))
                    <div class="invalid-feedback">
                        {{ $errors->first('duration_5') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.duration_5_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contact_no_5">{{ trans('cruds.edpApp.fields.contact_no_5') }}</label>
                <input class="form-control {{ $errors->has('contact_no_5') ? 'is-invalid' : '' }}" type="text" name="contact_no_5" id="contact_no_5" value="{{ old('contact_no_5', '') }}">
                @if($errors->has('contact_no_5'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact_no_5') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.contact_no_5_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email_5">{{ trans('cruds.edpApp.fields.email_5') }}</label>
                <input class="form-control {{ $errors->has('email_5') ? 'is-invalid' : '' }}" type="email" name="email_5" id="email_5" value="{{ old('email_5') }}">
                @if($errors->has('email_5'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email_5') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.email_5_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="special_dietary_5">{{ trans('cruds.edpApp.fields.special_dietary_5') }}</label>
                <input class="form-control {{ $errors->has('special_dietary_5') ? 'is-invalid' : '' }}" type="text" name="special_dietary_5" id="special_dietary_5" value="{{ old('special_dietary_5', '') }}">
                @if($errors->has('special_dietary_5'))
                    <div class="invalid-feedback">
                        {{ $errors->first('special_dietary_5') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.special_dietary_5_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.edpApp.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note') }}</textarea>
                @if($errors->has('note'))
                    <div class="invalid-feedback">
                        {{ $errors->first('note') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.edpApp.fields.note_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection