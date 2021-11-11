@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.officer.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.officers.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>{{ trans('cruds.officer.fields.officer_title') }}</label>
                <select class="form-control {{ $errors->has('officer_title') ? 'is-invalid' : '' }}" name="officer_title" id="officer_title">
                    <option value disabled {{ old('officer_title', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Officer::OFFICER_TITLE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('officer_title', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('officer_title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('officer_title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.officer.fields.officer_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="officer_name">{{ trans('cruds.officer.fields.officer_name') }}</label>
                <input class="form-control {{ $errors->has('officer_name') ? 'is-invalid' : '' }}" type="text" name="officer_name" id="officer_name" value="{{ old('officer_name', '') }}" required>
                @if($errors->has('officer_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('officer_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.officer.fields.officer_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="officer_designation">{{ trans('cruds.officer.fields.officer_designation') }}</label>
                <input class="form-control {{ $errors->has('officer_designation') ? 'is-invalid' : '' }}" type="text" name="officer_designation" id="officer_designation" value="{{ old('officer_designation', '') }}">
                @if($errors->has('officer_designation'))
                    <div class="invalid-feedback">
                        {{ $errors->first('officer_designation') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.officer.fields.officer_designation_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="officer_email_address">{{ trans('cruds.officer.fields.officer_email_address') }}</label>
                <input class="form-control {{ $errors->has('officer_email_address') ? 'is-invalid' : '' }}" type="email" name="officer_email_address" id="officer_email_address" value="{{ old('officer_email_address') }}" required>
                @if($errors->has('officer_email_address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('officer_email_address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.officer.fields.officer_email_address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="officer_contact_no">{{ trans('cruds.officer.fields.officer_contact_no') }}</label>
                <input class="form-control {{ $errors->has('officer_contact_no') ? 'is-invalid' : '' }}" type="text" name="officer_contact_no" id="officer_contact_no" value="{{ old('officer_contact_no', '') }}">
                @if($errors->has('officer_contact_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('officer_contact_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.officer.fields.officer_contact_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_name">{{ trans('cruds.officer.fields.company_name') }}</label>
                <input class="form-control {{ $errors->has('company_name') ? 'is-invalid' : '' }}" type="text" name="company_name" id="company_name" value="{{ old('company_name', '') }}">
                @if($errors->has('company_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.officer.fields.company_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_address">{{ trans('cruds.officer.fields.company_address') }}</label>
                <input class="form-control {{ $errors->has('company_address') ? 'is-invalid' : '' }}" type="text" name="company_address" id="company_address" value="{{ old('company_address', '') }}">
                @if($errors->has('company_address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.officer.fields.company_address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="unit_no">{{ trans('cruds.officer.fields.unit_no') }}</label>
                <input class="form-control {{ $errors->has('unit_no') ? 'is-invalid' : '' }}" type="text" name="unit_no" id="unit_no" value="{{ old('unit_no', '') }}">
                @if($errors->has('unit_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('unit_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.officer.fields.unit_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="country">{{ trans('cruds.officer.fields.country') }}</label>
                <input class="form-control {{ $errors->has('country') ? 'is-invalid' : '' }}" type="text" name="country" id="country" value="{{ old('country', '') }}">
                @if($errors->has('country'))
                    <div class="invalid-feedback">
                        {{ $errors->first('country') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.officer.fields.country_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="postal_code">{{ trans('cruds.officer.fields.postal_code') }}</label>
                <input class="form-control {{ $errors->has('postal_code') ? 'is-invalid' : '' }}" type="number" name="postal_code" id="postal_code" value="{{ old('postal_code', '') }}" step="1">
                @if($errors->has('postal_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('postal_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.officer.fields.postal_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="hear_about_us">{{ trans('cruds.officer.fields.hear_about_us') }}</label>
                <input class="form-control {{ $errors->has('hear_about_us') ? 'is-invalid' : '' }}" type="text" name="hear_about_us" id="hear_about_us" value="{{ old('hear_about_us', '') }}">
                @if($errors->has('hear_about_us'))
                    <div class="invalid-feedback">
                        {{ $errors->first('hear_about_us') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.officer.fields.hear_about_us_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.officer.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note') }}</textarea>
                @if($errors->has('note'))
                    <div class="invalid-feedback">
                        {{ $errors->first('note') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.officer.fields.note_helper') }}</span>
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