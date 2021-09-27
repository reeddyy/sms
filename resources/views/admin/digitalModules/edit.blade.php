@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.digitalModule.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.digital-modules.update", [$digitalModule->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="module_name">{{ trans('cruds.digitalModule.fields.module_name') }}</label>
                <input class="form-control {{ $errors->has('module_name') ? 'is-invalid' : '' }}" type="text" name="module_name" id="module_name" value="{{ old('module_name', $digitalModule->module_name) }}" required>
                @if($errors->has('module_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('module_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.digitalModule.fields.module_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="module_abbr">{{ trans('cruds.digitalModule.fields.module_abbr') }}</label>
                <input class="form-control {{ $errors->has('module_abbr') ? 'is-invalid' : '' }}" type="text" name="module_abbr" id="module_abbr" value="{{ old('module_abbr', $digitalModule->module_abbr) }}" required>
                @if($errors->has('module_abbr'))
                    <div class="invalid-feedback">
                        {{ $errors->first('module_abbr') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.digitalModule.fields.module_abbr_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="module_code">{{ trans('cruds.digitalModule.fields.module_code') }}</label>
                <input class="form-control {{ $errors->has('module_code') ? 'is-invalid' : '' }}" type="text" name="module_code" id="module_code" value="{{ old('module_code', $digitalModule->module_code) }}" required>
                @if($errors->has('module_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('module_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.digitalModule.fields.module_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="level_id">{{ trans('cruds.digitalModule.fields.level') }}</label>
                <select class="form-control select2 {{ $errors->has('level') ? 'is-invalid' : '' }}" name="level_id" id="level_id">
                    @foreach($levels as $id => $entry)
                        <option value="{{ $id }}" {{ (old('level_id') ? old('level_id') : $digitalModule->level->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('level'))
                    <div class="invalid-feedback">
                        {{ $errors->first('level') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.digitalModule.fields.level_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.digitalModule.fields.module_status') }}</label>
                @foreach(App\Models\DigitalModule::MODULE_STATUS_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('module_status') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="module_status_{{ $key }}" name="module_status" value="{{ $key }}" {{ old('module_status', $digitalModule->module_status) === (string) $key ? 'checked' : '' }} required>
                        <label class="form-check-label" for="module_status_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('module_status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('module_status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.digitalModule.fields.module_status_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.digitalModule.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note', $digitalModule->note) }}</textarea>
                @if($errors->has('note'))
                    <div class="invalid-feedback">
                        {{ $errors->first('note') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.digitalModule.fields.note_helper') }}</span>
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