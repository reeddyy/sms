@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.statusApp.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.status-apps.update", [$statusApp->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="status_name">{{ trans('cruds.statusApp.fields.status_name') }}</label>
                <input class="form-control {{ $errors->has('status_name') ? 'is-invalid' : '' }}" type="text" name="status_name" id="status_name" value="{{ old('status_name', $statusApp->status_name) }}" required>
                @if($errors->has('status_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.statusApp.fields.status_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.statusApp.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note', $statusApp->note) }}</textarea>
                @if($errors->has('note'))
                    <div class="invalid-feedback">
                        {{ $errors->first('note') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.statusApp.fields.note_helper') }}</span>
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