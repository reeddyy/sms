@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.grade.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.grades.update", [$grade->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required">{{ trans('cruds.grade.fields.grade') }}</label>
                <select class="form-control {{ $errors->has('grade') ? 'is-invalid' : '' }}" name="grade" id="grade" required>
                    <option value disabled {{ old('grade', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Grade::GRADE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('grade', $grade->grade) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('grade'))
                    <span class="text-danger">{{ $errors->first('grade') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.grade.fields.grade_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="grade_description">{{ trans('cruds.grade.fields.grade_description') }}</label>
                <input class="form-control {{ $errors->has('grade_description') ? 'is-invalid' : '' }}" type="text" name="grade_description" id="grade_description" value="{{ old('grade_description', $grade->grade_description) }}">
                @if($errors->has('grade_description'))
                    <span class="text-danger">{{ $errors->first('grade_description') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.grade.fields.grade_description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="grade_point">{{ trans('cruds.grade.fields.grade_point') }}</label>
                <input class="form-control {{ $errors->has('grade_point') ? 'is-invalid' : '' }}" type="number" name="grade_point" id="grade_point" value="{{ old('grade_point', $grade->grade_point) }}" step="1">
                @if($errors->has('grade_point'))
                    <span class="text-danger">{{ $errors->first('grade_point') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.grade.fields.grade_point_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="grade_marks">{{ trans('cruds.grade.fields.grade_marks') }}</label>
                <input class="form-control {{ $errors->has('grade_marks') ? 'is-invalid' : '' }}" type="text" name="grade_marks" id="grade_marks" value="{{ old('grade_marks', $grade->grade_marks) }}">
                @if($errors->has('grade_marks'))
                    <span class="text-danger">{{ $errors->first('grade_marks') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.grade.fields.grade_marks_helper') }}</span>
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