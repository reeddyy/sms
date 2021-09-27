@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.facilitator.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.facilitators.update", [$facilitator->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label>{{ trans('cruds.facilitator.fields.facilitator_title') }}</label>
                <select class="form-control {{ $errors->has('facilitator_title') ? 'is-invalid' : '' }}" name="facilitator_title" id="facilitator_title">
                    <option value disabled {{ old('facilitator_title', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Facilitator::FACILITATOR_TITLE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('facilitator_title', $facilitator->facilitator_title) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('facilitator_title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('facilitator_title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.facilitator.fields.facilitator_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="facilitator_name">{{ trans('cruds.facilitator.fields.facilitator_name') }}</label>
                <input class="form-control {{ $errors->has('facilitator_name') ? 'is-invalid' : '' }}" type="text" name="facilitator_name" id="facilitator_name" value="{{ old('facilitator_name', $facilitator->facilitator_name) }}" required>
                @if($errors->has('facilitator_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('facilitator_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.facilitator.fields.facilitator_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.facilitator.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note', $facilitator->note) }}</textarea>
                @if($errors->has('note'))
                    <div class="invalid-feedback">
                        {{ $errors->first('note') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.facilitator.fields.note_helper') }}</span>
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