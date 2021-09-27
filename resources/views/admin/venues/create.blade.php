@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.venue.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.venues.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="venue_name">{{ trans('cruds.venue.fields.venue_name') }}</label>
                <input class="form-control {{ $errors->has('venue_name') ? 'is-invalid' : '' }}" type="text" name="venue_name" id="venue_name" value="{{ old('venue_name', '') }}" required>
                @if($errors->has('venue_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('venue_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.venue.fields.venue_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.venue.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note') }}</textarea>
                @if($errors->has('note'))
                    <div class="invalid-feedback">
                        {{ $errors->first('note') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.venue.fields.note_helper') }}</span>
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