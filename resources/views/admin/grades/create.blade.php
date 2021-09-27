@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.grade.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.grades.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="grade_letter">{{ trans('cruds.grade.fields.grade_letter') }}</label>
                <input class="form-control {{ $errors->has('grade_letter') ? 'is-invalid' : '' }}" type="text" name="grade_letter" id="grade_letter" value="{{ old('grade_letter', '') }}" required>
                @if($errors->has('grade_letter'))
                    <div class="invalid-feedback">
                        {{ $errors->first('grade_letter') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.grade.fields.grade_letter_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="grade_description">{{ trans('cruds.grade.fields.grade_description') }}</label>
                <input class="form-control {{ $errors->has('grade_description') ? 'is-invalid' : '' }}" type="text" name="grade_description" id="grade_description" value="{{ old('grade_description', '') }}">
                @if($errors->has('grade_description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('grade_description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.grade.fields.grade_description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="grade_point_s">{{ trans('cruds.grade.fields.grade_point_s') }}</label>
                <input class="form-control {{ $errors->has('grade_point_s') ? 'is-invalid' : '' }}" type="number" name="grade_point_s" id="grade_point_s" value="{{ old('grade_point_s', '') }}" step="1">
                @if($errors->has('grade_point_s'))
                    <div class="invalid-feedback">
                        {{ $errors->first('grade_point_s') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.grade.fields.grade_point_s_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="grade_marks">{{ trans('cruds.grade.fields.grade_marks') }}</label>
                <input class="form-control {{ $errors->has('grade_marks') ? 'is-invalid' : '' }}" type="text" name="grade_marks" id="grade_marks" value="{{ old('grade_marks', '') }}">
                @if($errors->has('grade_marks'))
                    <div class="invalid-feedback">
                        {{ $errors->first('grade_marks') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.grade.fields.grade_marks_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.grade.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note') }}</textarea>
                @if($errors->has('note'))
                    <div class="invalid-feedback">
                        {{ $errors->first('note') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.grade.fields.note_helper') }}</span>
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