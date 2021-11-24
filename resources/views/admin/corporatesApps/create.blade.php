@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.corporatesApp.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.corporates-apps.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="statuses">{{ trans('cruds.corporatesApp.fields.status') }}</label>
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
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="application_no">{{ trans('cruds.corporatesApp.fields.application_no') }}</label>
                <input class="form-control {{ $errors->has('application_no') ? 'is-invalid' : '' }}" type="text" name="application_no" id="application_no" value="{{ old('application_no', '') }}" required>
                @if($errors->has('application_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('application_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.application_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="member_class">{{ trans('cruds.corporatesApp.fields.member_class') }}</label>
                <input class="form-control {{ $errors->has('member_class') ? 'is-invalid' : '' }}" type="text" name="member_class" id="member_class" value="{{ old('member_class', '') }}">
                @if($errors->has('member_class'))
                    <div class="invalid-feedback">
                        {{ $errors->first('member_class') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.member_class_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_name">{{ trans('cruds.corporatesApp.fields.company_name') }}</label>
                <input class="form-control {{ $errors->has('company_name') ? 'is-invalid' : '' }}" type="text" name="company_name" id="company_name" value="{{ old('company_name', '') }}">
                @if($errors->has('company_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.company_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="business_reg_no">{{ trans('cruds.corporatesApp.fields.business_reg_no') }}</label>
                <input class="form-control {{ $errors->has('business_reg_no') ? 'is-invalid' : '' }}" type="text" name="business_reg_no" id="business_reg_no" value="{{ old('business_reg_no', '') }}">
                @if($errors->has('business_reg_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('business_reg_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.business_reg_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_address">{{ trans('cruds.corporatesApp.fields.company_address') }}</label>
                <input class="form-control {{ $errors->has('company_address') ? 'is-invalid' : '' }}" type="text" name="company_address" id="company_address" value="{{ old('company_address', '') }}">
                @if($errors->has('company_address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.company_address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="country">{{ trans('cruds.corporatesApp.fields.country') }}</label>
                <input class="form-control {{ $errors->has('country') ? 'is-invalid' : '' }}" type="text" name="country" id="country" value="{{ old('country', '') }}">
                @if($errors->has('country'))
                    <div class="invalid-feedback">
                        {{ $errors->first('country') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.country_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="postal_code">{{ trans('cruds.corporatesApp.fields.postal_code') }}</label>
                <input class="form-control {{ $errors->has('postal_code') ? 'is-invalid' : '' }}" type="number" name="postal_code" id="postal_code" value="{{ old('postal_code', '') }}" step="1">
                @if($errors->has('postal_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('postal_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.postal_code_helper') }}</span>
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