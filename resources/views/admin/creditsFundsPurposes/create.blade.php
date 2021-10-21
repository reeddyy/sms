@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.creditsFundsPurpose.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.credits-funds-purposes.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="purpose_name">{{ trans('cruds.creditsFundsPurpose.fields.purpose_name') }}</label>
                <input class="form-control {{ $errors->has('purpose_name') ? 'is-invalid' : '' }}" type="text" name="purpose_name" id="purpose_name" value="{{ old('purpose_name', '') }}" required>
                @if($errors->has('purpose_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('purpose_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.creditsFundsPurpose.fields.purpose_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.creditsFundsPurpose.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note') }}</textarea>
                @if($errors->has('note'))
                    <div class="invalid-feedback">
                        {{ $errors->first('note') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.creditsFundsPurpose.fields.note_helper') }}</span>
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