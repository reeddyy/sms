@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.resultsModule.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.results-modules.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="enrolment_no_id">{{ trans('cruds.resultsModule.fields.enrolment_no') }}</label>
                <select class="form-control select2 {{ $errors->has('enrolment_no') ? 'is-invalid' : '' }}" name="enrolment_no_id" id="enrolment_no_id" required>
                    @foreach($enrolment_nos as $id => $entry)
                        <option value="{{ $id }}" {{ old('enrolment_no_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('enrolment_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('enrolment_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.resultsModule.fields.enrolment_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="date_release">{{ trans('cruds.resultsModule.fields.date_release') }}</label>
                <input class="form-control date {{ $errors->has('date_release') ? 'is-invalid' : '' }}" type="text" name="date_release" id="date_release" value="{{ old('date_release') }}" required>
                @if($errors->has('date_release'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_release') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.resultsModule.fields.date_release_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="module_id">{{ trans('cruds.resultsModule.fields.module') }}</label>
                <select class="form-control select2 {{ $errors->has('module') ? 'is-invalid' : '' }}" name="module_id" id="module_id" required>
                    @foreach($modules as $id => $entry)
                        <option value="{{ $id }}" {{ old('module_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('module'))
                    <div class="invalid-feedback">
                        {{ $errors->first('module') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.resultsModule.fields.module_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="grade_id">{{ trans('cruds.resultsModule.fields.grade') }}</label>
                <select class="form-control select2 {{ $errors->has('grade') ? 'is-invalid' : '' }}" name="grade_id" id="grade_id">
                    @foreach($grades as $id => $entry)
                        <option value="{{ $id }}" {{ old('grade_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('grade'))
                    <div class="invalid-feedback">
                        {{ $errors->first('grade') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.resultsModule.fields.grade_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.resultsModule.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note') }}</textarea>
                @if($errors->has('note'))
                    <div class="invalid-feedback">
                        {{ $errors->first('note') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.resultsModule.fields.note_helper') }}</span>
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