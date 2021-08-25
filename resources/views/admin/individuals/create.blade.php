@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.individual.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.individuals.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>{{ trans('cruds.individual.fields.title') }}</label>
                <select class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" name="title" id="title">
                    <option value disabled {{ old('title', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Individual::TITLE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('title', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.individual.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.individual.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.individual.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="nric_fin">{{ trans('cruds.individual.fields.nric_fin') }}</label>
                <input class="form-control {{ $errors->has('nric_fin') ? 'is-invalid' : '' }}" type="text" name="nric_fin" id="nric_fin" value="{{ old('nric_fin', '') }}" required>
                @if($errors->has('nric_fin'))
                    <span class="text-danger">{{ $errors->first('nric_fin') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.individual.fields.nric_fin_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email_address">{{ trans('cruds.individual.fields.email_address') }}</label>
                <input class="form-control {{ $errors->has('email_address') ? 'is-invalid' : '' }}" type="email" name="email_address" id="email_address" value="{{ old('email_address') }}" required>
                @if($errors->has('email_address'))
                    <span class="text-danger">{{ $errors->first('email_address') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.individual.fields.email_address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.individual.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note') }}</textarea>
                @if($errors->has('note'))
                    <span class="text-danger">{{ $errors->first('note') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.individual.fields.note_helper') }}</span>
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