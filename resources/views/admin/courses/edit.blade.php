@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.course.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.courses.update", [$course->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="course_title">{{ trans('cruds.course.fields.course_title') }}</label>
                <input class="form-control {{ $errors->has('course_title') ? 'is-invalid' : '' }}" type="text" name="course_title" id="course_title" value="{{ old('course_title', $course->course_title) }}" required>
                @if($errors->has('course_title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('course_title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.course_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="course_abbr">{{ trans('cruds.course.fields.course_abbr') }}</label>
                <input class="form-control {{ $errors->has('course_abbr') ? 'is-invalid' : '' }}" type="text" name="course_abbr" id="course_abbr" value="{{ old('course_abbr', $course->course_abbr) }}" required>
                @if($errors->has('course_abbr'))
                    <div class="invalid-feedback">
                        {{ $errors->first('course_abbr') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.course_abbr_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="duration_month">{{ trans('cruds.course.fields.duration_month') }}</label>
                <input class="form-control {{ $errors->has('duration_month') ? 'is-invalid' : '' }}" type="text" name="duration_month" id="duration_month" value="{{ old('duration_month', $course->duration_month) }}">
                @if($errors->has('duration_month'))
                    <div class="invalid-feedback">
                        {{ $errors->first('duration_month') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.duration_month_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="level_id">{{ trans('cruds.course.fields.level') }}</label>
                <select class="form-control select2 {{ $errors->has('level') ? 'is-invalid' : '' }}" name="level_id" id="level_id">
                    @foreach($levels as $id => $entry)
                        <option value="{{ $id }}" {{ (old('level_id') ? old('level_id') : $course->level->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('level'))
                    <div class="invalid-feedback">
                        {{ $errors->first('level') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.level_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="module_s">{{ trans('cruds.course.fields.module_s') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('module_s') ? 'is-invalid' : '' }}" name="module_s[]" id="module_s" multiple>
                    @foreach($module_s as $id => $module_)
                        <option value="{{ $id }}" {{ (in_array($id, old('module_s', [])) || $course->module_s->contains($id)) ? 'selected' : '' }}>{{ $module_ }}</option>
                    @endforeach
                </select>
                @if($errors->has('module_s'))
                    <div class="invalid-feedback">
                        {{ $errors->first('module_s') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.module_s_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="classes">{{ trans('cruds.course.fields.classes') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('classes') ? 'is-invalid' : '' }}" name="classes[]" id="classes" multiple>
                    @foreach($classes as $id => $class)
                        <option value="{{ $id }}" {{ (in_array($id, old('classes', [])) || $course->classes->contains($id)) ? 'selected' : '' }}>{{ $class }}</option>
                    @endforeach
                </select>
                @if($errors->has('classes'))
                    <div class="invalid-feedback">
                        {{ $errors->first('classes') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.classes_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="member_rate">{{ trans('cruds.course.fields.member_rate') }}</label>
                <input class="form-control {{ $errors->has('member_rate') ? 'is-invalid' : '' }}" type="number" name="member_rate" id="member_rate" value="{{ old('member_rate', $course->member_rate) }}" step="0.01">
                @if($errors->has('member_rate'))
                    <div class="invalid-feedback">
                        {{ $errors->first('member_rate') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.member_rate_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="public_rate">{{ trans('cruds.course.fields.public_rate') }}</label>
                <input class="form-control {{ $errors->has('public_rate') ? 'is-invalid' : '' }}" type="number" name="public_rate" id="public_rate" value="{{ old('public_rate', $course->public_rate) }}" step="0.01">
                @if($errors->has('public_rate'))
                    <div class="invalid-feedback">
                        {{ $errors->first('public_rate') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.public_rate_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="course_fee">{{ trans('cruds.course.fields.course_fee') }}</label>
                <input class="form-control {{ $errors->has('course_fee') ? 'is-invalid' : '' }}" type="number" name="course_fee" id="course_fee" value="{{ old('course_fee', $course->course_fee) }}" step="0.01">
                @if($errors->has('course_fee'))
                    <div class="invalid-feedback">
                        {{ $errors->first('course_fee') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.course_fee_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="m_el_fee">{{ trans('cruds.course.fields.m_el_fee') }}</label>
                <input class="form-control {{ $errors->has('m_el_fee') ? 'is-invalid' : '' }}" type="number" name="m_el_fee" id="m_el_fee" value="{{ old('m_el_fee', $course->m_el_fee) }}" step="0.01">
                @if($errors->has('m_el_fee'))
                    <div class="invalid-feedback">
                        {{ $errors->first('m_el_fee') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.m_el_fee_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="examination_fee">{{ trans('cruds.course.fields.examination_fee') }}</label>
                <input class="form-control {{ $errors->has('examination_fee') ? 'is-invalid' : '' }}" type="number" name="examination_fee" id="examination_fee" value="{{ old('examination_fee', $course->examination_fee) }}" step="0.01">
                @if($errors->has('examination_fee'))
                    <div class="invalid-feedback">
                        {{ $errors->first('examination_fee') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.examination_fee_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="registration_fee">{{ trans('cruds.course.fields.registration_fee') }}</label>
                <input class="form-control {{ $errors->has('registration_fee') ? 'is-invalid' : '' }}" type="number" name="registration_fee" id="registration_fee" value="{{ old('registration_fee', $course->registration_fee) }}" step="0.01">
                @if($errors->has('registration_fee'))
                    <div class="invalid-feedback">
                        {{ $errors->first('registration_fee') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.registration_fee_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="no_of_instalment">{{ trans('cruds.course.fields.no_of_instalment') }}</label>
                <input class="form-control {{ $errors->has('no_of_instalment') ? 'is-invalid' : '' }}" type="number" name="no_of_instalment" id="no_of_instalment" value="{{ old('no_of_instalment', $course->no_of_instalment) }}" step="1">
                @if($errors->has('no_of_instalment'))
                    <div class="invalid-feedback">
                        {{ $errors->first('no_of_instalment') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.no_of_instalment_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="instalment_fee_1st">{{ trans('cruds.course.fields.instalment_fee_1st') }}</label>
                <input class="form-control {{ $errors->has('instalment_fee_1st') ? 'is-invalid' : '' }}" type="number" name="instalment_fee_1st" id="instalment_fee_1st" value="{{ old('instalment_fee_1st', $course->instalment_fee_1st) }}" step="0.01">
                @if($errors->has('instalment_fee_1st'))
                    <div class="invalid-feedback">
                        {{ $errors->first('instalment_fee_1st') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.instalment_fee_1st_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="due_day_s_1st">{{ trans('cruds.course.fields.due_day_s_1st') }}</label>
                <input class="form-control {{ $errors->has('due_day_s_1st') ? 'is-invalid' : '' }}" type="number" name="due_day_s_1st" id="due_day_s_1st" value="{{ old('due_day_s_1st', $course->due_day_s_1st) }}" step="1">
                @if($errors->has('due_day_s_1st'))
                    <div class="invalid-feedback">
                        {{ $errors->first('due_day_s_1st') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.due_day_s_1st_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="instalment_fee_2nd">{{ trans('cruds.course.fields.instalment_fee_2nd') }}</label>
                <input class="form-control {{ $errors->has('instalment_fee_2nd') ? 'is-invalid' : '' }}" type="number" name="instalment_fee_2nd" id="instalment_fee_2nd" value="{{ old('instalment_fee_2nd', $course->instalment_fee_2nd) }}" step="0.01">
                @if($errors->has('instalment_fee_2nd'))
                    <div class="invalid-feedback">
                        {{ $errors->first('instalment_fee_2nd') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.instalment_fee_2nd_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="due_day_s_2nd">{{ trans('cruds.course.fields.due_day_s_2nd') }}</label>
                <input class="form-control {{ $errors->has('due_day_s_2nd') ? 'is-invalid' : '' }}" type="number" name="due_day_s_2nd" id="due_day_s_2nd" value="{{ old('due_day_s_2nd', $course->due_day_s_2nd) }}" step="1">
                @if($errors->has('due_day_s_2nd'))
                    <div class="invalid-feedback">
                        {{ $errors->first('due_day_s_2nd') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.due_day_s_2nd_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="instalment_fee_3rd">{{ trans('cruds.course.fields.instalment_fee_3rd') }}</label>
                <input class="form-control {{ $errors->has('instalment_fee_3rd') ? 'is-invalid' : '' }}" type="number" name="instalment_fee_3rd" id="instalment_fee_3rd" value="{{ old('instalment_fee_3rd', $course->instalment_fee_3rd) }}" step="0.01">
                @if($errors->has('instalment_fee_3rd'))
                    <div class="invalid-feedback">
                        {{ $errors->first('instalment_fee_3rd') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.instalment_fee_3rd_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="due_day_s_3rd">{{ trans('cruds.course.fields.due_day_s_3rd') }}</label>
                <input class="form-control {{ $errors->has('due_day_s_3rd') ? 'is-invalid' : '' }}" type="number" name="due_day_s_3rd" id="due_day_s_3rd" value="{{ old('due_day_s_3rd', $course->due_day_s_3rd) }}" step="1">
                @if($errors->has('due_day_s_3rd'))
                    <div class="invalid-feedback">
                        {{ $errors->first('due_day_s_3rd') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.due_day_s_3rd_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.course.fields.course_status') }}</label>
                @foreach(App\Models\Course::COURSE_STATUS_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('course_status') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="course_status_{{ $key }}" name="course_status" value="{{ $key }}" {{ old('course_status', $course->course_status) === (string) $key ? 'checked' : '' }} required>
                        <label class="form-check-label" for="course_status_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('course_status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('course_status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.course_status_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.course.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note', $course->note) }}</textarea>
                @if($errors->has('note'))
                    <div class="invalid-feedback">
                        {{ $errors->first('note') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.note_helper') }}</span>
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