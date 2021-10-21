@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.corporate.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.corporates.update", [$corporate->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="company_name">{{ trans('cruds.corporate.fields.company_name') }}</label>
                <input class="form-control {{ $errors->has('company_name') ? 'is-invalid' : '' }}" type="text" name="company_name" id="company_name" value="{{ old('company_name', $corporate->company_name) }}" required>
                @if($errors->has('company_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporate.fields.company_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="business_reg_no">{{ trans('cruds.corporate.fields.business_reg_no') }}</label>
                <input class="form-control {{ $errors->has('business_reg_no') ? 'is-invalid' : '' }}" type="text" name="business_reg_no" id="business_reg_no" value="{{ old('business_reg_no', $corporate->business_reg_no) }}" required>
                @if($errors->has('business_reg_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('business_reg_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporate.fields.business_reg_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_address">{{ trans('cruds.corporate.fields.company_address') }}</label>
                <input class="form-control {{ $errors->has('company_address') ? 'is-invalid' : '' }}" type="text" name="company_address" id="company_address" value="{{ old('company_address', $corporate->company_address) }}">
                @if($errors->has('company_address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporate.fields.company_address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="unit_no">{{ trans('cruds.corporate.fields.unit_no') }}</label>
                <input class="form-control {{ $errors->has('unit_no') ? 'is-invalid' : '' }}" type="text" name="unit_no" id="unit_no" value="{{ old('unit_no', $corporate->unit_no) }}">
                @if($errors->has('unit_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('unit_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporate.fields.unit_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="country">{{ trans('cruds.corporate.fields.country') }}</label>
                <input class="form-control {{ $errors->has('country') ? 'is-invalid' : '' }}" type="text" name="country" id="country" value="{{ old('country', $corporate->country) }}">
                @if($errors->has('country'))
                    <div class="invalid-feedback">
                        {{ $errors->first('country') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporate.fields.country_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="postal_code">{{ trans('cruds.corporate.fields.postal_code') }}</label>
                <input class="form-control {{ $errors->has('postal_code') ? 'is-invalid' : '' }}" type="number" name="postal_code" id="postal_code" value="{{ old('postal_code', $corporate->postal_code) }}" step="1">
                @if($errors->has('postal_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('postal_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporate.fields.postal_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone_no">{{ trans('cruds.corporate.fields.phone_no') }}</label>
                <input class="form-control {{ $errors->has('phone_no') ? 'is-invalid' : '' }}" type="text" name="phone_no" id="phone_no" value="{{ old('phone_no', $corporate->phone_no) }}">
                @if($errors->has('phone_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporate.fields.phone_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="website">{{ trans('cruds.corporate.fields.website') }}</label>
                <input class="form-control {{ $errors->has('website') ? 'is-invalid' : '' }}" type="text" name="website" id="website" value="{{ old('website', $corporate->website) }}">
                @if($errors->has('website'))
                    <div class="invalid-feedback">
                        {{ $errors->first('website') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporate.fields.website_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_type">{{ trans('cruds.corporate.fields.company_type') }}</label>
                <input class="form-control {{ $errors->has('company_type') ? 'is-invalid' : '' }}" type="text" name="company_type" id="company_type" value="{{ old('company_type', $corporate->company_type) }}">
                @if($errors->has('company_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporate.fields.company_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="industry_type">{{ trans('cruds.corporate.fields.industry_type') }}</label>
                <input class="form-control {{ $errors->has('industry_type') ? 'is-invalid' : '' }}" type="text" name="industry_type" id="industry_type" value="{{ old('industry_type', $corporate->industry_type) }}">
                @if($errors->has('industry_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('industry_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporate.fields.industry_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="employees_no">{{ trans('cruds.corporate.fields.employees_no') }}</label>
                <input class="form-control {{ $errors->has('employees_no') ? 'is-invalid' : '' }}" type="text" name="employees_no" id="employees_no" value="{{ old('employees_no', $corporate->employees_no) }}">
                @if($errors->has('employees_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('employees_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporate.fields.employees_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="annual_turnover">{{ trans('cruds.corporate.fields.annual_turnover') }}</label>
                <input class="form-control {{ $errors->has('annual_turnover') ? 'is-invalid' : '' }}" type="text" name="annual_turnover" id="annual_turnover" value="{{ old('annual_turnover', $corporate->annual_turnover) }}">
                @if($errors->has('annual_turnover'))
                    <div class="invalid-feedback">
                        {{ $errors->first('annual_turnover') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporate.fields.annual_turnover_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.corporate.fields.title_1') }}</label>
                <select class="form-control {{ $errors->has('title_1') ? 'is-invalid' : '' }}" name="title_1" id="title_1">
                    <option value disabled {{ old('title_1', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Corporate::TITLE_1_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('title_1', $corporate->title_1) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('title_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporate.fields.title_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name_1">{{ trans('cruds.corporate.fields.name_1') }}</label>
                <input class="form-control {{ $errors->has('name_1') ? 'is-invalid' : '' }}" type="text" name="name_1" id="name_1" value="{{ old('name_1', $corporate->name_1) }}">
                @if($errors->has('name_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporate.fields.name_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="designation_1">{{ trans('cruds.corporate.fields.designation_1') }}</label>
                <input class="form-control {{ $errors->has('designation_1') ? 'is-invalid' : '' }}" type="text" name="designation_1" id="designation_1" value="{{ old('designation_1', $corporate->designation_1) }}">
                @if($errors->has('designation_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('designation_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporate.fields.designation_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email_address_1">{{ trans('cruds.corporate.fields.email_address_1') }}</label>
                <input class="form-control {{ $errors->has('email_address_1') ? 'is-invalid' : '' }}" type="email" name="email_address_1" id="email_address_1" value="{{ old('email_address_1', $corporate->email_address_1) }}">
                @if($errors->has('email_address_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email_address_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporate.fields.email_address_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="office_no_1">{{ trans('cruds.corporate.fields.office_no_1') }}</label>
                <input class="form-control {{ $errors->has('office_no_1') ? 'is-invalid' : '' }}" type="text" name="office_no_1" id="office_no_1" value="{{ old('office_no_1', $corporate->office_no_1) }}">
                @if($errors->has('office_no_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('office_no_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporate.fields.office_no_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="mobile_no_1">{{ trans('cruds.corporate.fields.mobile_no_1') }}</label>
                <input class="form-control {{ $errors->has('mobile_no_1') ? 'is-invalid' : '' }}" type="text" name="mobile_no_1" id="mobile_no_1" value="{{ old('mobile_no_1', $corporate->mobile_no_1) }}">
                @if($errors->has('mobile_no_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('mobile_no_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporate.fields.mobile_no_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.corporate.fields.title_2') }}</label>
                <select class="form-control {{ $errors->has('title_2') ? 'is-invalid' : '' }}" name="title_2" id="title_2">
                    <option value disabled {{ old('title_2', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Corporate::TITLE_2_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('title_2', $corporate->title_2) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('title_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporate.fields.title_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name_2">{{ trans('cruds.corporate.fields.name_2') }}</label>
                <input class="form-control {{ $errors->has('name_2') ? 'is-invalid' : '' }}" type="text" name="name_2" id="name_2" value="{{ old('name_2', $corporate->name_2) }}">
                @if($errors->has('name_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporate.fields.name_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="designation_2">{{ trans('cruds.corporate.fields.designation_2') }}</label>
                <input class="form-control {{ $errors->has('designation_2') ? 'is-invalid' : '' }}" type="text" name="designation_2" id="designation_2" value="{{ old('designation_2', $corporate->designation_2) }}">
                @if($errors->has('designation_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('designation_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporate.fields.designation_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email_address_2">{{ trans('cruds.corporate.fields.email_address_2') }}</label>
                <input class="form-control {{ $errors->has('email_address_2') ? 'is-invalid' : '' }}" type="email" name="email_address_2" id="email_address_2" value="{{ old('email_address_2', $corporate->email_address_2) }}">
                @if($errors->has('email_address_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email_address_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporate.fields.email_address_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="office_no_2">{{ trans('cruds.corporate.fields.office_no_2') }}</label>
                <input class="form-control {{ $errors->has('office_no_2') ? 'is-invalid' : '' }}" type="text" name="office_no_2" id="office_no_2" value="{{ old('office_no_2', $corporate->office_no_2) }}">
                @if($errors->has('office_no_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('office_no_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporate.fields.office_no_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="mobile_no_2">{{ trans('cruds.corporate.fields.mobile_no_2') }}</label>
                <input class="form-control {{ $errors->has('mobile_no_2') ? 'is-invalid' : '' }}" type="text" name="mobile_no_2" id="mobile_no_2" value="{{ old('mobile_no_2', $corporate->mobile_no_2) }}">
                @if($errors->has('mobile_no_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('mobile_no_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporate.fields.mobile_no_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name_3">{{ trans('cruds.corporate.fields.name_3') }}</label>
                <input class="form-control {{ $errors->has('name_3') ? 'is-invalid' : '' }}" type="text" name="name_3" id="name_3" value="{{ old('name_3', $corporate->name_3) }}">
                @if($errors->has('name_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporate.fields.name_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email_address_3">{{ trans('cruds.corporate.fields.email_address_3') }}</label>
                <input class="form-control {{ $errors->has('email_address_3') ? 'is-invalid' : '' }}" type="email" name="email_address_3" id="email_address_3" value="{{ old('email_address_3', $corporate->email_address_3) }}">
                @if($errors->has('email_address_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email_address_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporate.fields.email_address_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name_4">{{ trans('cruds.corporate.fields.name_4') }}</label>
                <input class="form-control {{ $errors->has('name_4') ? 'is-invalid' : '' }}" type="text" name="name_4" id="name_4" value="{{ old('name_4', $corporate->name_4) }}">
                @if($errors->has('name_4'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name_4') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporate.fields.name_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email_address_4">{{ trans('cruds.corporate.fields.email_address_4') }}</label>
                <input class="form-control {{ $errors->has('email_address_4') ? 'is-invalid' : '' }}" type="email" name="email_address_4" id="email_address_4" value="{{ old('email_address_4', $corporate->email_address_4) }}">
                @if($errors->has('email_address_4'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email_address_4') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporate.fields.email_address_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name_5">{{ trans('cruds.corporate.fields.name_5') }}</label>
                <input class="form-control {{ $errors->has('name_5') ? 'is-invalid' : '' }}" type="text" name="name_5" id="name_5" value="{{ old('name_5', $corporate->name_5) }}">
                @if($errors->has('name_5'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name_5') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporate.fields.name_5_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email_address_5">{{ trans('cruds.corporate.fields.email_address_5') }}</label>
                <input class="form-control {{ $errors->has('email_address_5') ? 'is-invalid' : '' }}" type="email" name="email_address_5" id="email_address_5" value="{{ old('email_address_5', $corporate->email_address_5) }}">
                @if($errors->has('email_address_5'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email_address_5') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporate.fields.email_address_5_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.corporate.fields.title') }}</label>
                <select class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" name="title" id="title">
                    <option value disabled {{ old('title', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Corporate::TITLE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('title', $corporate->title) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporate.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="applicant_name">{{ trans('cruds.corporate.fields.applicant_name') }}</label>
                <input class="form-control {{ $errors->has('applicant_name') ? 'is-invalid' : '' }}" type="text" name="applicant_name" id="applicant_name" value="{{ old('applicant_name', $corporate->applicant_name) }}">
                @if($errors->has('applicant_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('applicant_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporate.fields.applicant_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="designation">{{ trans('cruds.corporate.fields.designation') }}</label>
                <input class="form-control {{ $errors->has('designation') ? 'is-invalid' : '' }}" type="text" name="designation" id="designation" value="{{ old('designation', $corporate->designation) }}">
                @if($errors->has('designation'))
                    <div class="invalid-feedback">
                        {{ $errors->first('designation') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporate.fields.designation_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email_address">{{ trans('cruds.corporate.fields.email_address') }}</label>
                <input class="form-control {{ $errors->has('email_address') ? 'is-invalid' : '' }}" type="email" name="email_address" id="email_address" value="{{ old('email_address', $corporate->email_address) }}">
                @if($errors->has('email_address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email_address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporate.fields.email_address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="office_no">{{ trans('cruds.corporate.fields.office_no') }}</label>
                <input class="form-control {{ $errors->has('office_no') ? 'is-invalid' : '' }}" type="text" name="office_no" id="office_no" value="{{ old('office_no', $corporate->office_no) }}">
                @if($errors->has('office_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('office_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporate.fields.office_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="mobile_no">{{ trans('cruds.corporate.fields.mobile_no') }}</label>
                <input class="form-control {{ $errors->has('mobile_no') ? 'is-invalid' : '' }}" type="text" name="mobile_no" id="mobile_no" value="{{ old('mobile_no', $corporate->mobile_no) }}">
                @if($errors->has('mobile_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('mobile_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporate.fields.mobile_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.corporate.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note', $corporate->note) }}</textarea>
                @if($errors->has('note'))
                    <div class="invalid-feedback">
                        {{ $errors->first('note') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporate.fields.note_helper') }}</span>
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