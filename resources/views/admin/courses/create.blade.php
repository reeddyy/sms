@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.course.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.courses.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="course_name">{{ trans('cruds.course.fields.course_name') }}</label>
                <input class="form-control {{ $errors->has('course_name') ? 'is-invalid' : '' }}" type="text" name="course_name" id="course_name" value="{{ old('course_name', '') }}" required>
                @if($errors->has('course_name'))
                    <span class="text-danger">{{ $errors->first('course_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.course_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="course_abbr">{{ trans('cruds.course.fields.course_abbr') }}</label>
                <input class="form-control {{ $errors->has('course_abbr') ? 'is-invalid' : '' }}" type="text" name="course_abbr" id="course_abbr" value="{{ old('course_abbr', '') }}" required>
                @if($errors->has('course_abbr'))
                    <span class="text-danger">{{ $errors->first('course_abbr') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.course_abbr_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.course.fields.course_level') }}</label>
                @foreach(App\Models\Course::COURSE_LEVEL_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('course_level') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="course_level_{{ $key }}" name="course_level" value="{{ $key }}" {{ old('course_level', '') === (string) $key ? 'checked' : '' }} required>
                        <label class="form-check-label" for="course_level_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('course_level'))
                    <span class="text-danger">{{ $errors->first('course_level') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.course_level_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="course_modules">{{ trans('cruds.course.fields.course_modules') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('course_modules') ? 'is-invalid' : '' }}" name="course_modules[]" id="course_modules" multiple required>
                    @foreach($course_modules as $id => $course_module)
                        <option value="{{ $id }}" {{ in_array($id, old('course_modules', [])) ? 'selected' : '' }}>{{ $course_module }}</option>
                    @endforeach
                </select>
                @if($errors->has('course_modules'))
                    <span class="text-danger">{{ $errors->first('course_modules') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.course_modules_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="course_duration">{{ trans('cruds.course.fields.course_duration') }}</label>
                <input class="form-control {{ $errors->has('course_duration') ? 'is-invalid' : '' }}" type="text" name="course_duration" id="course_duration" value="{{ old('course_duration', '') }}">
                @if($errors->has('course_duration'))
                    <span class="text-danger">{{ $errors->first('course_duration') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.course_duration_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="course_total_fee">{{ trans('cruds.course.fields.course_total_fee') }}</label>
                <input class="form-control {{ $errors->has('course_total_fee') ? 'is-invalid' : '' }}" type="number" name="course_total_fee" id="course_total_fee" value="{{ old('course_total_fee', '0') }}" step="0.01">
                @if($errors->has('course_total_fee'))
                    <span class="text-danger">{{ $errors->first('course_total_fee') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.course_total_fee_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="course_fee">{{ trans('cruds.course.fields.course_fee') }}</label>
                <input class="form-control {{ $errors->has('course_fee') ? 'is-invalid' : '' }}" type="number" name="course_fee" id="course_fee" value="{{ old('course_fee', '0') }}" step="0.01">
                @if($errors->has('course_fee'))
                    <span class="text-danger">{{ $errors->first('course_fee') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.course_fee_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="m_el_fee">{{ trans('cruds.course.fields.m_el_fee') }}</label>
                <input class="form-control {{ $errors->has('m_el_fee') ? 'is-invalid' : '' }}" type="number" name="m_el_fee" id="m_el_fee" value="{{ old('m_el_fee', '0') }}" step="0.01">
                @if($errors->has('m_el_fee'))
                    <span class="text-danger">{{ $errors->first('m_el_fee') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.m_el_fee_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="examination_fee">{{ trans('cruds.course.fields.examination_fee') }}</label>
                <input class="form-control {{ $errors->has('examination_fee') ? 'is-invalid' : '' }}" type="number" name="examination_fee" id="examination_fee" value="{{ old('examination_fee', '0') }}" step="0.01">
                @if($errors->has('examination_fee'))
                    <span class="text-danger">{{ $errors->first('examination_fee') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.examination_fee_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="registration_fee">{{ trans('cruds.course.fields.registration_fee') }}</label>
                <input class="form-control {{ $errors->has('registration_fee') ? 'is-invalid' : '' }}" type="number" name="registration_fee" id="registration_fee" value="{{ old('registration_fee', '0') }}" step="0.01">
                @if($errors->has('registration_fee'))
                    <span class="text-danger">{{ $errors->first('registration_fee') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.registration_fee_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="no_of_instalment">{{ trans('cruds.course.fields.no_of_instalment') }}</label>
                <input class="form-control {{ $errors->has('no_of_instalment') ? 'is-invalid' : '' }}" type="number" name="no_of_instalment" id="no_of_instalment" value="{{ old('no_of_instalment', '1') }}" step="1">
                @if($errors->has('no_of_instalment'))
                    <span class="text-danger">{{ $errors->first('no_of_instalment') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.no_of_instalment_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="instalment_fee_1st">{{ trans('cruds.course.fields.instalment_fee_1st') }}</label>
                <input class="form-control {{ $errors->has('instalment_fee_1st') ? 'is-invalid' : '' }}" type="number" name="instalment_fee_1st" id="instalment_fee_1st" value="{{ old('instalment_fee_1st', '0') }}" step="0.01">
                @if($errors->has('instalment_fee_1st'))
                    <span class="text-danger">{{ $errors->first('instalment_fee_1st') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.instalment_fee_1st_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="instalment_fee_2nd">{{ trans('cruds.course.fields.instalment_fee_2nd') }}</label>
                <input class="form-control {{ $errors->has('instalment_fee_2nd') ? 'is-invalid' : '' }}" type="number" name="instalment_fee_2nd" id="instalment_fee_2nd" value="{{ old('instalment_fee_2nd', '0') }}" step="0.01">
                @if($errors->has('instalment_fee_2nd'))
                    <span class="text-danger">{{ $errors->first('instalment_fee_2nd') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.instalment_fee_2nd_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="instalment_fee_3rd">{{ trans('cruds.course.fields.instalment_fee_3rd') }}</label>
                <input class="form-control {{ $errors->has('instalment_fee_3rd') ? 'is-invalid' : '' }}" type="number" name="instalment_fee_3rd" id="instalment_fee_3rd" value="{{ old('instalment_fee_3rd', '0') }}" step="0.01">
                @if($errors->has('instalment_fee_3rd'))
                    <span class="text-danger">{{ $errors->first('instalment_fee_3rd') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.instalment_fee_3rd_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.course.fields.course_status') }}</label>
                @foreach(App\Models\Course::COURSE_STATUS_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('course_status') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="course_status_{{ $key }}" name="course_status" value="{{ $key }}" {{ old('course_status', 'Active') === (string) $key ? 'checked' : '' }} required>
                        <label class="form-check-label" for="course_status_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('course_status'))
                    <span class="text-danger">{{ $errors->first('course_status') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.course_status_helper') }}</span>
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