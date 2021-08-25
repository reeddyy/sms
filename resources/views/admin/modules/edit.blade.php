@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.module.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.modules.update", [$module->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="module_name">{{ trans('cruds.module.fields.module_name') }}</label>
                <input class="form-control {{ $errors->has('module_name') ? 'is-invalid' : '' }}" type="text" name="module_name" id="module_name" value="{{ old('module_name', $module->module_name) }}" required>
                @if($errors->has('module_name'))
                    <span class="text-danger">{{ $errors->first('module_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.module.fields.module_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="module_abbr">{{ trans('cruds.module.fields.module_abbr') }}</label>
                <input class="form-control {{ $errors->has('module_abbr') ? 'is-invalid' : '' }}" type="text" name="module_abbr" id="module_abbr" value="{{ old('module_abbr', $module->module_abbr) }}" required>
                @if($errors->has('module_abbr'))
                    <span class="text-danger">{{ $errors->first('module_abbr') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.module.fields.module_abbr_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="module_code">{{ trans('cruds.module.fields.module_code') }}</label>
                <input class="form-control {{ $errors->has('module_code') ? 'is-invalid' : '' }}" type="text" name="module_code" id="module_code" value="{{ old('module_code', $module->module_code) }}" required>
                @if($errors->has('module_code'))
                    <span class="text-danger">{{ $errors->first('module_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.module.fields.module_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.module.fields.module_status') }}</label>
                @foreach(App\Models\Module::MODULE_STATUS_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('module_status') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="module_status_{{ $key }}" name="module_status" value="{{ $key }}" {{ old('module_status', $module->module_status) === (string) $key ? 'checked' : '' }} required>
                        <label class="form-check-label" for="module_status_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('module_status'))
                    <span class="text-danger">{{ $errors->first('module_status') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.module.fields.module_status_helper') }}</span>
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