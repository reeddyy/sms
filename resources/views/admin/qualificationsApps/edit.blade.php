@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.qualificationsApp.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.qualifications-apps.update", [$qualificationsApp->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="statuses">{{ trans('cruds.qualificationsApp.fields.status') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('statuses') ? 'is-invalid' : '' }}" name="statuses[]" id="statuses" multiple>
                    @foreach($statuses as $id => $status)
                        <option value="{{ $id }}" {{ (in_array($id, old('statuses', [])) || $qualificationsApp->statuses->contains($id)) ? 'selected' : '' }}>{{ $status }}</option>
                    @endforeach
                </select>
                @if($errors->has('statuses'))
                    <div class="invalid-feedback">
                        {{ $errors->first('statuses') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="application_no">{{ trans('cruds.qualificationsApp.fields.application_no') }}</label>
                <input readonly class="form-control {{ $errors->has('application_no') ? 'is-invalid' : '' }}" type="text" name="application_no" id="application_no" value="{{ old('application_no', $qualificationsApp->application_no) }}" required>
                @if($errors->has('application_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('application_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.application_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="sponsorship">{{ trans('cruds.qualificationsApp.fields.sponsorship') }}</label>
                <input class="form-control {{ $errors->has('sponsorship') ? 'is-invalid' : '' }}" type="text" name="sponsorship" id="sponsorship" value="{{ old('sponsorship', $qualificationsApp->sponsorship) }}">
                @if($errors->has('sponsorship'))
                    <div class="invalid-feedback">
                        {{ $errors->first('sponsorship') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.sponsorship_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="level">{{ trans('cruds.qualificationsApp.fields.level') }}</label>
                <input class="form-control {{ $errors->has('level') ? 'is-invalid' : '' }}" type="text" name="level" id="level" value="{{ old('level', $qualificationsApp->level) }}">
                @if($errors->has('level'))
                    <div class="invalid-feedback">
                        {{ $errors->first('level') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.level_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="course">{{ trans('cruds.qualificationsApp.fields.course') }}</label>
                <input class="form-control {{ $errors->has('course') ? 'is-invalid' : '' }}" type="text" name="course" id="course" value="{{ old('course', $qualificationsApp->course) }}">
                @if($errors->has('course'))
                    <div class="invalid-feedback">
                        {{ $errors->first('course') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.course_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="commencement">{{ trans('cruds.qualificationsApp.fields.commencement') }}</label>
                <input class="form-control {{ $errors->has('commencement') ? 'is-invalid' : '' }}" type="text" name="commencement" id="commencement" value="{{ old('commencement', $qualificationsApp->commencement) }}">
                @if($errors->has('commencement'))
                    <div class="invalid-feedback">
                        {{ $errors->first('commencement') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.commencement_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="hear_about_us">{{ trans('cruds.qualificationsApp.fields.hear_about_us') }}</label>
                <input class="form-control {{ $errors->has('hear_about_us') ? 'is-invalid' : '' }}" type="text" name="hear_about_us" id="hear_about_us" value="{{ old('hear_about_us', $qualificationsApp->hear_about_us) }}">
                @if($errors->has('hear_about_us'))
                    <div class="invalid-feedback">
                        {{ $errors->first('hear_about_us') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.hear_about_us_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_name">{{ trans('cruds.qualificationsApp.fields.company_name') }}</label>
                <input class="form-control {{ $errors->has('company_name') ? 'is-invalid' : '' }}" type="text" name="company_name" id="company_name" value="{{ old('company_name', $qualificationsApp->company_name) }}">
                @if($errors->has('company_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.company_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_address">{{ trans('cruds.qualificationsApp.fields.company_address') }}</label>
                <input class="form-control {{ $errors->has('company_address') ? 'is-invalid' : '' }}" type="text" name="company_address" id="company_address" value="{{ old('company_address', $qualificationsApp->company_address) }}">
                @if($errors->has('company_address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.company_address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_country">{{ trans('cruds.qualificationsApp.fields.company_country') }}</label>
                <input class="form-control {{ $errors->has('company_country') ? 'is-invalid' : '' }}" type="text" name="company_country" id="company_country" value="{{ old('company_country', $qualificationsApp->company_country) }}">
                @if($errors->has('company_country'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_country') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.company_country_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_postal_code">{{ trans('cruds.qualificationsApp.fields.company_postal_code') }}</label>
                <input class="form-control {{ $errors->has('company_postal_code') ? 'is-invalid' : '' }}" type="number" name="company_postal_code" id="company_postal_code" value="{{ old('company_postal_code', $qualificationsApp->company_postal_code) }}" step="1">
                @if($errors->has('company_postal_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_postal_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.company_postal_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="officer_name">{{ trans('cruds.qualificationsApp.fields.officer_name') }}</label>
                <input class="form-control {{ $errors->has('officer_name') ? 'is-invalid' : '' }}" type="text" name="officer_name" id="officer_name" value="{{ old('officer_name', $qualificationsApp->officer_name) }}">
                @if($errors->has('officer_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('officer_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.officer_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="officer_designation">{{ trans('cruds.qualificationsApp.fields.officer_designation') }}</label>
                <input class="form-control {{ $errors->has('officer_designation') ? 'is-invalid' : '' }}" type="text" name="officer_designation" id="officer_designation" value="{{ old('officer_designation', $qualificationsApp->officer_designation) }}">
                @if($errors->has('officer_designation'))
                    <div class="invalid-feedback">
                        {{ $errors->first('officer_designation') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.officer_designation_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="officer_contact">{{ trans('cruds.qualificationsApp.fields.officer_contact') }}</label>
                <input class="form-control {{ $errors->has('officer_contact') ? 'is-invalid' : '' }}" type="text" name="officer_contact" id="officer_contact" value="{{ old('officer_contact', $qualificationsApp->officer_contact) }}">
                @if($errors->has('officer_contact'))
                    <div class="invalid-feedback">
                        {{ $errors->first('officer_contact') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.officer_contact_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="officer_email">{{ trans('cruds.qualificationsApp.fields.officer_email') }}</label>
                <input class="form-control {{ $errors->has('officer_email') ? 'is-invalid' : '' }}" type="text" name="officer_email" id="officer_email" value="{{ old('officer_email', $qualificationsApp->officer_email) }}">
                @if($errors->has('officer_email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('officer_email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.officer_email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="applicant_name">{{ trans('cruds.qualificationsApp.fields.applicant_name') }}</label>
                <input class="form-control {{ $errors->has('applicant_name') ? 'is-invalid' : '' }}" type="text" name="applicant_name" id="applicant_name" value="{{ old('applicant_name', $qualificationsApp->applicant_name) }}">
                @if($errors->has('applicant_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('applicant_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.applicant_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="gender">{{ trans('cruds.qualificationsApp.fields.gender') }}</label>
                <input class="form-control {{ $errors->has('gender') ? 'is-invalid' : '' }}" type="text" name="gender" id="gender" value="{{ old('gender', $qualificationsApp->gender) }}">
                @if($errors->has('gender'))
                    <div class="invalid-feedback">
                        {{ $errors->first('gender') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.gender_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="id_type">{{ trans('cruds.qualificationsApp.fields.id_type') }}</label>
                <input class="form-control {{ $errors->has('id_type') ? 'is-invalid' : '' }}" type="text" name="id_type" id="id_type" value="{{ old('id_type', $qualificationsApp->id_type) }}">
                @if($errors->has('id_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('id_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.id_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="id_no">{{ trans('cruds.qualificationsApp.fields.id_no') }}</label>
                <input class="form-control {{ $errors->has('id_no') ? 'is-invalid' : '' }}" type="text" name="id_no" id="id_no" value="{{ old('id_no', $qualificationsApp->id_no) }}">
                @if($errors->has('id_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('id_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.id_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="dob">{{ trans('cruds.qualificationsApp.fields.dob') }}</label>
                <input class="form-control date {{ $errors->has('dob') ? 'is-invalid' : '' }}" type="text" name="dob" id="dob" value="{{ old('dob', $qualificationsApp->dob) }}">
                @if($errors->has('dob'))
                    <div class="invalid-feedback">
                        {{ $errors->first('dob') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.dob_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="nationality">{{ trans('cruds.qualificationsApp.fields.nationality') }}</label>
                <input class="form-control {{ $errors->has('nationality') ? 'is-invalid' : '' }}" type="text" name="nationality" id="nationality" value="{{ old('nationality', $qualificationsApp->nationality) }}">
                @if($errors->has('nationality'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nationality') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.nationality_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="address">{{ trans('cruds.qualificationsApp.fields.address') }}</label>
                <input class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" type="text" name="address" id="address" value="{{ old('address', $qualificationsApp->address) }}">
                @if($errors->has('address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="country">{{ trans('cruds.qualificationsApp.fields.country') }}</label>
                <input class="form-control {{ $errors->has('country') ? 'is-invalid' : '' }}" type="text" name="country" id="country" value="{{ old('country', $qualificationsApp->country) }}">
                @if($errors->has('country'))
                    <div class="invalid-feedback">
                        {{ $errors->first('country') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.country_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="postal_code">{{ trans('cruds.qualificationsApp.fields.postal_code') }}</label>
                <input class="form-control {{ $errors->has('postal_code') ? 'is-invalid' : '' }}" type="number" name="postal_code" id="postal_code" value="{{ old('postal_code', $qualificationsApp->postal_code) }}" step="1">
                @if($errors->has('postal_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('postal_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.postal_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contact_no">{{ trans('cruds.qualificationsApp.fields.contact_no') }}</label>
                <input class="form-control {{ $errors->has('contact_no') ? 'is-invalid' : '' }}" type="text" name="contact_no" id="contact_no" value="{{ old('contact_no', $qualificationsApp->contact_no) }}">
                @if($errors->has('contact_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.contact_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.qualificationsApp.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', $qualificationsApp->email) }}">
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_name_1">{{ trans('cruds.qualificationsApp.fields.company_name_1') }}</label>
                <input class="form-control {{ $errors->has('company_name_1') ? 'is-invalid' : '' }}" type="text" name="company_name_1" id="company_name_1" value="{{ old('company_name_1', $qualificationsApp->company_name_1) }}">
                @if($errors->has('company_name_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_name_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.company_name_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="designation_1">{{ trans('cruds.qualificationsApp.fields.designation_1') }}</label>
                <input class="form-control {{ $errors->has('designation_1') ? 'is-invalid' : '' }}" type="text" name="designation_1" id="designation_1" value="{{ old('designation_1', $qualificationsApp->designation_1) }}">
                @if($errors->has('designation_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('designation_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.designation_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="duration_1">{{ trans('cruds.qualificationsApp.fields.duration_1') }}</label>
                <input class="form-control {{ $errors->has('duration_1') ? 'is-invalid' : '' }}" type="number" name="duration_1" id="duration_1" value="{{ old('duration_1', $qualificationsApp->duration_1) }}" step="0.1">
                @if($errors->has('duration_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('duration_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.duration_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_name_2">{{ trans('cruds.qualificationsApp.fields.company_name_2') }}</label>
                <input class="form-control {{ $errors->has('company_name_2') ? 'is-invalid' : '' }}" type="text" name="company_name_2" id="company_name_2" value="{{ old('company_name_2', $qualificationsApp->company_name_2) }}">
                @if($errors->has('company_name_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_name_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.company_name_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="designation_2">{{ trans('cruds.qualificationsApp.fields.designation_2') }}</label>
                <input class="form-control {{ $errors->has('designation_2') ? 'is-invalid' : '' }}" type="text" name="designation_2" id="designation_2" value="{{ old('designation_2', $qualificationsApp->designation_2) }}">
                @if($errors->has('designation_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('designation_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.designation_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="duration_2">{{ trans('cruds.qualificationsApp.fields.duration_2') }}</label>
                <input class="form-control {{ $errors->has('duration_2') ? 'is-invalid' : '' }}" type="number" name="duration_2" id="duration_2" value="{{ old('duration_2', $qualificationsApp->duration_2) }}" step="0.1">
                @if($errors->has('duration_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('duration_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.duration_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_name_3">{{ trans('cruds.qualificationsApp.fields.company_name_3') }}</label>
                <input class="form-control {{ $errors->has('company_name_3') ? 'is-invalid' : '' }}" type="text" name="company_name_3" id="company_name_3" value="{{ old('company_name_3', $qualificationsApp->company_name_3) }}">
                @if($errors->has('company_name_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_name_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.company_name_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="designation_3">{{ trans('cruds.qualificationsApp.fields.designation_3') }}</label>
                <input class="form-control {{ $errors->has('designation_3') ? 'is-invalid' : '' }}" type="text" name="designation_3" id="designation_3" value="{{ old('designation_3', $qualificationsApp->designation_3) }}">
                @if($errors->has('designation_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('designation_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.designation_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="duration_3">{{ trans('cruds.qualificationsApp.fields.duration_3') }}</label>
                <input class="form-control {{ $errors->has('duration_3') ? 'is-invalid' : '' }}" type="number" name="duration_3" id="duration_3" value="{{ old('duration_3', $qualificationsApp->duration_3) }}" step="0.1">
                @if($errors->has('duration_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('duration_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.duration_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="qualification_1">{{ trans('cruds.qualificationsApp.fields.qualification_1') }}</label>
                <input class="form-control {{ $errors->has('qualification_1') ? 'is-invalid' : '' }}" type="text" name="qualification_1" id="qualification_1" value="{{ old('qualification_1', $qualificationsApp->qualification_1) }}">
                @if($errors->has('qualification_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('qualification_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.qualification_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="level_1">{{ trans('cruds.qualificationsApp.fields.level_1') }}</label>
                <input class="form-control {{ $errors->has('level_1') ? 'is-invalid' : '' }}" type="text" name="level_1" id="level_1" value="{{ old('level_1', $qualificationsApp->level_1) }}">
                @if($errors->has('level_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('level_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.level_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="institute_1">{{ trans('cruds.qualificationsApp.fields.institute_1') }}</label>
                <input class="form-control {{ $errors->has('institute_1') ? 'is-invalid' : '' }}" type="text" name="institute_1" id="institute_1" value="{{ old('institute_1', $qualificationsApp->institute_1) }}">
                @if($errors->has('institute_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('institute_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.institute_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="year_attained_1">{{ trans('cruds.qualificationsApp.fields.year_attained_1') }}</label>
                <input class="form-control {{ $errors->has('year_attained_1') ? 'is-invalid' : '' }}" type="number" name="year_attained_1" id="year_attained_1" value="{{ old('year_attained_1', $qualificationsApp->year_attained_1) }}" step="1">
                @if($errors->has('year_attained_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('year_attained_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.year_attained_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="qualification_2">{{ trans('cruds.qualificationsApp.fields.qualification_2') }}</label>
                <input class="form-control {{ $errors->has('qualification_2') ? 'is-invalid' : '' }}" type="text" name="qualification_2" id="qualification_2" value="{{ old('qualification_2', $qualificationsApp->qualification_2) }}">
                @if($errors->has('qualification_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('qualification_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.qualification_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="level_2">{{ trans('cruds.qualificationsApp.fields.level_2') }}</label>
                <input class="form-control {{ $errors->has('level_2') ? 'is-invalid' : '' }}" type="text" name="level_2" id="level_2" value="{{ old('level_2', $qualificationsApp->level_2) }}">
                @if($errors->has('level_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('level_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.level_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="institute_2">{{ trans('cruds.qualificationsApp.fields.institute_2') }}</label>
                <input class="form-control {{ $errors->has('institute_2') ? 'is-invalid' : '' }}" type="text" name="institute_2" id="institute_2" value="{{ old('institute_2', $qualificationsApp->institute_2) }}">
                @if($errors->has('institute_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('institute_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.institute_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="year_attained_2">{{ trans('cruds.qualificationsApp.fields.year_attained_2') }}</label>
                <input class="form-control {{ $errors->has('year_attained_2') ? 'is-invalid' : '' }}" type="number" name="year_attained_2" id="year_attained_2" value="{{ old('year_attained_2', $qualificationsApp->year_attained_2) }}" step="1">
                @if($errors->has('year_attained_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('year_attained_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.year_attained_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="qualification_3">{{ trans('cruds.qualificationsApp.fields.qualification_3') }}</label>
                <input class="form-control {{ $errors->has('qualification_3') ? 'is-invalid' : '' }}" type="text" name="qualification_3" id="qualification_3" value="{{ old('qualification_3', $qualificationsApp->qualification_3) }}">
                @if($errors->has('qualification_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('qualification_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.qualification_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="level_3">{{ trans('cruds.qualificationsApp.fields.level_3') }}</label>
                <input class="form-control {{ $errors->has('level_3') ? 'is-invalid' : '' }}" type="text" name="level_3" id="level_3" value="{{ old('level_3', $qualificationsApp->level_3) }}">
                @if($errors->has('level_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('level_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.level_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="institute_3">{{ trans('cruds.qualificationsApp.fields.institute_3') }}</label>
                <input class="form-control {{ $errors->has('institute_3') ? 'is-invalid' : '' }}" type="text" name="institute_3" id="institute_3" value="{{ old('institute_3', $qualificationsApp->institute_3) }}">
                @if($errors->has('institute_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('institute_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.institute_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="year_attained_3">{{ trans('cruds.qualificationsApp.fields.year_attained_3') }}</label>
                <input class="form-control {{ $errors->has('year_attained_3') ? 'is-invalid' : '' }}" type="number" name="year_attained_3" id="year_attained_3" value="{{ old('year_attained_3', $qualificationsApp->year_attained_3) }}" step="1">
                @if($errors->has('year_attained_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('year_attained_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.year_attained_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="id_front">{{ trans('cruds.qualificationsApp.fields.id_front') }}</label>
                <input class="form-control {{ $errors->has('id_front') ? 'is-invalid' : '' }}" type="text" name="id_front" id="id_front" value="{{ old('id_front', $qualificationsApp->id_front) }}">
                @if($errors->has('id_front'))
                    <div class="invalid-feedback">
                        {{ $errors->first('id_front') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.id_front_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="id_back">{{ trans('cruds.qualificationsApp.fields.id_back') }}</label>
                <input class="form-control {{ $errors->has('id_back') ? 'is-invalid' : '' }}" type="text" name="id_back" id="id_back" value="{{ old('id_back', $qualificationsApp->id_back) }}">
                @if($errors->has('id_back'))
                    <div class="invalid-feedback">
                        {{ $errors->first('id_back') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.id_back_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="certificate">{{ trans('cruds.qualificationsApp.fields.certificate') }}</label>
                <input class="form-control {{ $errors->has('certificate') ? 'is-invalid' : '' }}" type="text" name="certificate" id="certificate" value="{{ old('certificate', $qualificationsApp->certificate) }}">
                @if($errors->has('certificate'))
                    <div class="invalid-feedback">
                        {{ $errors->first('certificate') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.certificate_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.qualificationsApp.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note', $qualificationsApp->note) }}</textarea>
                @if($errors->has('note'))
                    <div class="invalid-feedback">
                        {{ $errors->first('note') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsApp.fields.note_helper') }}</span>
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
