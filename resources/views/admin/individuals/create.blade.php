@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.individual.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.individuals.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>{{ trans('cruds.individual.fields.title') }}</label>
                <select class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" name="title" id="title">
                    <option value disabled {{ old('title', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Individual::TITLE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('title', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individual.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.individual.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individual.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="nric_fin">{{ trans('cruds.individual.fields.nric_fin') }}</label>
                <input class="form-control {{ $errors->has('nric_fin') ? 'is-invalid' : '' }}" type="text" name="nric_fin" id="nric_fin" value="{{ old('nric_fin', '') }}">
                @if($errors->has('nric_fin'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nric_fin') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individual.fields.nric_fin_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="residential_address">{{ trans('cruds.individual.fields.residential_address') }}</label>
                <input class="form-control {{ $errors->has('residential_address') ? 'is-invalid' : '' }}" type="text" name="residential_address" id="residential_address" value="{{ old('residential_address', '') }}">
                @if($errors->has('residential_address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('residential_address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individual.fields.residential_address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="unit_no">{{ trans('cruds.individual.fields.unit_no') }}</label>
                <input class="form-control {{ $errors->has('unit_no') ? 'is-invalid' : '' }}" type="text" name="unit_no" id="unit_no" value="{{ old('unit_no', '') }}">
                @if($errors->has('unit_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('unit_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individual.fields.unit_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="country">{{ trans('cruds.individual.fields.country') }}</label>
                <input class="form-control {{ $errors->has('country') ? 'is-invalid' : '' }}" type="text" name="country" id="country" value="{{ old('country', '') }}">
                @if($errors->has('country'))
                    <div class="invalid-feedback">
                        {{ $errors->first('country') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individual.fields.country_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="postal_code">{{ trans('cruds.individual.fields.postal_code') }}</label>
                <input class="form-control {{ $errors->has('postal_code') ? 'is-invalid' : '' }}" type="number" name="postal_code" id="postal_code" value="{{ old('postal_code', '') }}" step="1">
                @if($errors->has('postal_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('postal_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individual.fields.postal_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contact_no">{{ trans('cruds.individual.fields.contact_no') }}</label>
                <input class="form-control {{ $errors->has('contact_no') ? 'is-invalid' : '' }}" type="text" name="contact_no" id="contact_no" value="{{ old('contact_no', '') }}">
                @if($errors->has('contact_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individual.fields.contact_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email_address">{{ trans('cruds.individual.fields.email_address') }}</label>
                <input class="form-control {{ $errors->has('email_address') ? 'is-invalid' : '' }}" type="email" name="email_address" id="email_address" value="{{ old('email_address') }}" required>
                @if($errors->has('email_address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email_address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individual.fields.email_address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_name_1">{{ trans('cruds.individual.fields.company_name_1') }}</label>
                <input class="form-control {{ $errors->has('company_name_1') ? 'is-invalid' : '' }}" type="text" name="company_name_1" id="company_name_1" value="{{ old('company_name_1', '') }}">
                @if($errors->has('company_name_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_name_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individual.fields.company_name_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="job_designation_1">{{ trans('cruds.individual.fields.job_designation_1') }}</label>
                <input class="form-control {{ $errors->has('job_designation_1') ? 'is-invalid' : '' }}" type="text" name="job_designation_1" id="job_designation_1" value="{{ old('job_designation_1', '') }}">
                @if($errors->has('job_designation_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('job_designation_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individual.fields.job_designation_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="duration_of_year_s_1">{{ trans('cruds.individual.fields.duration_of_year_s_1') }}</label>
                <input class="form-control {{ $errors->has('duration_of_year_s_1') ? 'is-invalid' : '' }}" type="number" name="duration_of_year_s_1" id="duration_of_year_s_1" value="{{ old('duration_of_year_s_1', '') }}" step="1">
                @if($errors->has('duration_of_year_s_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('duration_of_year_s_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individual.fields.duration_of_year_s_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_name_2">{{ trans('cruds.individual.fields.company_name_2') }}</label>
                <input class="form-control {{ $errors->has('company_name_2') ? 'is-invalid' : '' }}" type="text" name="company_name_2" id="company_name_2" value="{{ old('company_name_2', '') }}">
                @if($errors->has('company_name_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_name_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individual.fields.company_name_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="job_designation_2">{{ trans('cruds.individual.fields.job_designation_2') }}</label>
                <input class="form-control {{ $errors->has('job_designation_2') ? 'is-invalid' : '' }}" type="text" name="job_designation_2" id="job_designation_2" value="{{ old('job_designation_2', '') }}">
                @if($errors->has('job_designation_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('job_designation_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individual.fields.job_designation_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="duration_of_year_s_2">{{ trans('cruds.individual.fields.duration_of_year_s_2') }}</label>
                <input class="form-control {{ $errors->has('duration_of_year_s_2') ? 'is-invalid' : '' }}" type="number" name="duration_of_year_s_2" id="duration_of_year_s_2" value="{{ old('duration_of_year_s_2', '') }}" step="1">
                @if($errors->has('duration_of_year_s_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('duration_of_year_s_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individual.fields.duration_of_year_s_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_name_3">{{ trans('cruds.individual.fields.company_name_3') }}</label>
                <input class="form-control {{ $errors->has('company_name_3') ? 'is-invalid' : '' }}" type="text" name="company_name_3" id="company_name_3" value="{{ old('company_name_3', '') }}">
                @if($errors->has('company_name_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_name_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individual.fields.company_name_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="job_designation_3">{{ trans('cruds.individual.fields.job_designation_3') }}</label>
                <input class="form-control {{ $errors->has('job_designation_3') ? 'is-invalid' : '' }}" type="text" name="job_designation_3" id="job_designation_3" value="{{ old('job_designation_3', '') }}">
                @if($errors->has('job_designation_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('job_designation_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individual.fields.job_designation_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="duration_of_year_s_3">{{ trans('cruds.individual.fields.duration_of_year_s_3') }}</label>
                <input class="form-control {{ $errors->has('duration_of_year_s_3') ? 'is-invalid' : '' }}" type="number" name="duration_of_year_s_3" id="duration_of_year_s_3" value="{{ old('duration_of_year_s_3', '') }}" step="1">
                @if($errors->has('duration_of_year_s_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('duration_of_year_s_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individual.fields.duration_of_year_s_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="total_year_s_related_work_exp">{{ trans('cruds.individual.fields.total_year_s_related_work_exp') }}</label>
                <input class="form-control {{ $errors->has('total_year_s_related_work_exp') ? 'is-invalid' : '' }}" type="number" name="total_year_s_related_work_exp" id="total_year_s_related_work_exp" value="{{ old('total_year_s_related_work_exp', '') }}" step="1">
                @if($errors->has('total_year_s_related_work_exp'))
                    <div class="invalid-feedback">
                        {{ $errors->first('total_year_s_related_work_exp') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individual.fields.total_year_s_related_work_exp_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="qual_title_1">{{ trans('cruds.individual.fields.qual_title_1') }}</label>
                <input class="form-control {{ $errors->has('qual_title_1') ? 'is-invalid' : '' }}" type="text" name="qual_title_1" id="qual_title_1" value="{{ old('qual_title_1', '') }}">
                @if($errors->has('qual_title_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('qual_title_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individual.fields.qual_title_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="qual_level_1">{{ trans('cruds.individual.fields.qual_level_1') }}</label>
                <input class="form-control {{ $errors->has('qual_level_1') ? 'is-invalid' : '' }}" type="text" name="qual_level_1" id="qual_level_1" value="{{ old('qual_level_1', '') }}">
                @if($errors->has('qual_level_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('qual_level_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individual.fields.qual_level_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="institute_name_1">{{ trans('cruds.individual.fields.institute_name_1') }}</label>
                <input class="form-control {{ $errors->has('institute_name_1') ? 'is-invalid' : '' }}" type="text" name="institute_name_1" id="institute_name_1" value="{{ old('institute_name_1', '') }}">
                @if($errors->has('institute_name_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('institute_name_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individual.fields.institute_name_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="year_attained_1">{{ trans('cruds.individual.fields.year_attained_1') }}</label>
                <input class="form-control {{ $errors->has('year_attained_1') ? 'is-invalid' : '' }}" type="number" name="year_attained_1" id="year_attained_1" value="{{ old('year_attained_1', '') }}" step="1">
                @if($errors->has('year_attained_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('year_attained_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individual.fields.year_attained_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="qual_title_2">{{ trans('cruds.individual.fields.qual_title_2') }}</label>
                <input class="form-control {{ $errors->has('qual_title_2') ? 'is-invalid' : '' }}" type="text" name="qual_title_2" id="qual_title_2" value="{{ old('qual_title_2', '') }}">
                @if($errors->has('qual_title_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('qual_title_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individual.fields.qual_title_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="qual_level_2">{{ trans('cruds.individual.fields.qual_level_2') }}</label>
                <input class="form-control {{ $errors->has('qual_level_2') ? 'is-invalid' : '' }}" type="text" name="qual_level_2" id="qual_level_2" value="{{ old('qual_level_2', '') }}">
                @if($errors->has('qual_level_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('qual_level_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individual.fields.qual_level_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="institute_name_2">{{ trans('cruds.individual.fields.institute_name_2') }}</label>
                <input class="form-control {{ $errors->has('institute_name_2') ? 'is-invalid' : '' }}" type="text" name="institute_name_2" id="institute_name_2" value="{{ old('institute_name_2', '') }}">
                @if($errors->has('institute_name_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('institute_name_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individual.fields.institute_name_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="year_attained_2">{{ trans('cruds.individual.fields.year_attained_2') }}</label>
                <input class="form-control {{ $errors->has('year_attained_2') ? 'is-invalid' : '' }}" type="number" name="year_attained_2" id="year_attained_2" value="{{ old('year_attained_2', '') }}" step="1">
                @if($errors->has('year_attained_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('year_attained_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individual.fields.year_attained_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="qual_title_3">{{ trans('cruds.individual.fields.qual_title_3') }}</label>
                <input class="form-control {{ $errors->has('qual_title_3') ? 'is-invalid' : '' }}" type="text" name="qual_title_3" id="qual_title_3" value="{{ old('qual_title_3', '') }}">
                @if($errors->has('qual_title_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('qual_title_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individual.fields.qual_title_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="qual_level_3">{{ trans('cruds.individual.fields.qual_level_3') }}</label>
                <input class="form-control {{ $errors->has('qual_level_3') ? 'is-invalid' : '' }}" type="text" name="qual_level_3" id="qual_level_3" value="{{ old('qual_level_3', '') }}">
                @if($errors->has('qual_level_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('qual_level_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individual.fields.qual_level_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="institute_name_3">{{ trans('cruds.individual.fields.institute_name_3') }}</label>
                <input class="form-control {{ $errors->has('institute_name_3') ? 'is-invalid' : '' }}" type="text" name="institute_name_3" id="institute_name_3" value="{{ old('institute_name_3', '') }}">
                @if($errors->has('institute_name_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('institute_name_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individual.fields.institute_name_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="year_attained_3">{{ trans('cruds.individual.fields.year_attained_3') }}</label>
                <input class="form-control {{ $errors->has('year_attained_3') ? 'is-invalid' : '' }}" type="text" name="year_attained_3" id="year_attained_3" value="{{ old('year_attained_3', '') }}">
                @if($errors->has('year_attained_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('year_attained_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individual.fields.year_attained_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.individual.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note') }}</textarea>
                @if($errors->has('note'))
                    <div class="invalid-feedback">
                        {{ $errors->first('note') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individual.fields.note_helper') }}</span>
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