@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.programme.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.programmes.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="edp_title">{{ trans('cruds.programme.fields.edp_title') }}</label>
                <input class="form-control {{ $errors->has('edp_title') ? 'is-invalid' : '' }}" type="text" name="edp_title" id="edp_title" value="{{ old('edp_title', '') }}" required>
                @if($errors->has('edp_title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('edp_title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.programme.fields.edp_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="edp_abbr">{{ trans('cruds.programme.fields.edp_abbr') }}</label>
                <input class="form-control {{ $errors->has('edp_abbr') ? 'is-invalid' : '' }}" type="text" name="edp_abbr" id="edp_abbr" value="{{ old('edp_abbr', '') }}">
                @if($errors->has('edp_abbr'))
                    <div class="invalid-feedback">
                        {{ $errors->first('edp_abbr') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.programme.fields.edp_abbr_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="duration_day">{{ trans('cruds.programme.fields.duration_day') }}</label>
                <input class="form-control {{ $errors->has('duration_day') ? 'is-invalid' : '' }}" type="text" name="duration_day" id="duration_day" value="{{ old('duration_day', '') }}">
                @if($errors->has('duration_day'))
                    <div class="invalid-feedback">
                        {{ $errors->first('duration_day') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.programme.fields.duration_day_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="level_id">{{ trans('cruds.programme.fields.level') }}</label>
                <select class="form-control select2 {{ $errors->has('level') ? 'is-invalid' : '' }}" name="level_id" id="level_id">
                    @foreach($levels as $id => $entry)
                        <option value="{{ $id }}" {{ old('level_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('level'))
                    <div class="invalid-feedback">
                        {{ $errors->first('level') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.programme.fields.level_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="member_rate">{{ trans('cruds.programme.fields.member_rate') }}</label>
                <input class="form-control {{ $errors->has('member_rate') ? 'is-invalid' : '' }}" type="number" name="member_rate" id="member_rate" value="{{ old('member_rate', '0') }}" step="0.01">
                @if($errors->has('member_rate'))
                    <div class="invalid-feedback">
                        {{ $errors->first('member_rate') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.programme.fields.member_rate_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="public_rate">{{ trans('cruds.programme.fields.public_rate') }}</label>
                <input class="form-control {{ $errors->has('public_rate') ? 'is-invalid' : '' }}" type="number" name="public_rate" id="public_rate" value="{{ old('public_rate', '0') }}" step="0.01">
                @if($errors->has('public_rate'))
                    <div class="invalid-feedback">
                        {{ $errors->first('public_rate') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.programme.fields.public_rate_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.programme.fields.edp_status') }}</label>
                @foreach(App\Models\Programme::EDP_STATUS_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('edp_status') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="edp_status_{{ $key }}" name="edp_status" value="{{ $key }}" {{ old('edp_status', 'Active') === (string) $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="edp_status_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('edp_status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('edp_status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.programme.fields.edp_status_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.programme.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note') }}</textarea>
                @if($errors->has('note'))
                    <div class="invalid-feedback">
                        {{ $errors->first('note') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.programme.fields.note_helper') }}</span>
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