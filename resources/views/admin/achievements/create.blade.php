@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.achievement.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.achievements.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="achievement_title">{{ trans('cruds.achievement.fields.achievement_title') }}</label>
                <input class="form-control {{ $errors->has('achievement_title') ? 'is-invalid' : '' }}" type="text" name="achievement_title" id="achievement_title" value="{{ old('achievement_title', '') }}">
                @if($errors->has('achievement_title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('achievement_title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.achievement.fields.achievement_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.achievement.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note') }}</textarea>
                @if($errors->has('note'))
                    <div class="invalid-feedback">
                        {{ $errors->first('note') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.achievement.fields.note_helper') }}</span>
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