@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.qualificationsReq.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.qualifications-reqs.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="statuses">{{ trans('cruds.qualificationsReq.fields.status') }}</label>
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
                <span class="help-block">{{ trans('cruds.qualificationsReq.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="course">{{ trans('cruds.qualificationsReq.fields.course') }}</label>
                <input class="form-control {{ $errors->has('course') ? 'is-invalid' : '' }}" type="text" name="course" id="course" value="{{ old('course', '') }}">
                @if($errors->has('course'))
                    <div class="invalid-feedback">
                        {{ $errors->first('course') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsReq.fields.course_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="level">{{ trans('cruds.qualificationsReq.fields.level') }}</label>
                <input class="form-control {{ $errors->has('level') ? 'is-invalid' : '' }}" type="text" name="level" id="level" value="{{ old('level', '') }}">
                @if($errors->has('level'))
                    <div class="invalid-feedback">
                        {{ $errors->first('level') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsReq.fields.level_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="hear_about_us">{{ trans('cruds.qualificationsReq.fields.hear_about_us') }}</label>
                <input class="form-control {{ $errors->has('hear_about_us') ? 'is-invalid' : '' }}" type="text" name="hear_about_us" id="hear_about_us" value="{{ old('hear_about_us', '') }}">
                @if($errors->has('hear_about_us'))
                    <div class="invalid-feedback">
                        {{ $errors->first('hear_about_us') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsReq.fields.hear_about_us_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name">{{ trans('cruds.qualificationsReq.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}">
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsReq.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="designation">{{ trans('cruds.qualificationsReq.fields.designation') }}</label>
                <input class="form-control {{ $errors->has('designation') ? 'is-invalid' : '' }}" type="text" name="designation" id="designation" value="{{ old('designation', '') }}">
                @if($errors->has('designation'))
                    <div class="invalid-feedback">
                        {{ $errors->first('designation') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsReq.fields.designation_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="job_function">{{ trans('cruds.qualificationsReq.fields.job_function') }}</label>
                <input class="form-control {{ $errors->has('job_function') ? 'is-invalid' : '' }}" type="text" name="job_function" id="job_function" value="{{ old('job_function', '') }}">
                @if($errors->has('job_function'))
                    <div class="invalid-feedback">
                        {{ $errors->first('job_function') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsReq.fields.job_function_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_name">{{ trans('cruds.qualificationsReq.fields.company_name') }}</label>
                <input class="form-control {{ $errors->has('company_name') ? 'is-invalid' : '' }}" type="text" name="company_name" id="company_name" value="{{ old('company_name', '') }}">
                @if($errors->has('company_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsReq.fields.company_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="industry">{{ trans('cruds.qualificationsReq.fields.industry') }}</label>
                <input class="form-control {{ $errors->has('industry') ? 'is-invalid' : '' }}" type="text" name="industry" id="industry" value="{{ old('industry', '') }}">
                @if($errors->has('industry'))
                    <div class="invalid-feedback">
                        {{ $errors->first('industry') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsReq.fields.industry_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contact_no">{{ trans('cruds.qualificationsReq.fields.contact_no') }}</label>
                <input class="form-control {{ $errors->has('contact_no') ? 'is-invalid' : '' }}" type="text" name="contact_no" id="contact_no" value="{{ old('contact_no', '') }}">
                @if($errors->has('contact_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsReq.fields.contact_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.qualificationsReq.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email') }}">
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsReq.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.qualificationsReq.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note') }}</textarea>
                @if($errors->has('note'))
                    <div class="invalid-feedback">
                        {{ $errors->first('note') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.qualificationsReq.fields.note_helper') }}</span>
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