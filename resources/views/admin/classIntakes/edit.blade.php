@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.classIntake.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.class-intakes.update", [$classIntake->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="class_name">{{ trans('cruds.classIntake.fields.class_name') }}</label>
                <input class="form-control {{ $errors->has('class_name') ? 'is-invalid' : '' }}" type="text" name="class_name" id="class_name" value="{{ old('class_name', $classIntake->class_name) }}" required>
                @if($errors->has('class_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('class_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.classIntake.fields.class_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.classIntake.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note', $classIntake->note) }}</textarea>
                @if($errors->has('note'))
                    <div class="invalid-feedback">
                        {{ $errors->first('note') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.classIntake.fields.note_helper') }}</span>
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