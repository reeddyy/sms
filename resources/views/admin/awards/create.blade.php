@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.award.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.awards.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="award_name">{{ trans('cruds.award.fields.award_name') }}</label>
                <input class="form-control {{ $errors->has('award_name') ? 'is-invalid' : '' }}" type="text" name="award_name" id="award_name" value="{{ old('award_name', '') }}" required>
                @if($errors->has('award_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('award_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.award.fields.award_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="award_abbr">{{ trans('cruds.award.fields.award_abbr') }}</label>
                <input class="form-control {{ $errors->has('award_abbr') ? 'is-invalid' : '' }}" type="text" name="award_abbr" id="award_abbr" value="{{ old('award_abbr', '') }}">
                @if($errors->has('award_abbr'))
                    <div class="invalid-feedback">
                        {{ $errors->first('award_abbr') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.award.fields.award_abbr_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="validity_year">{{ trans('cruds.award.fields.validity_year') }}</label>
                <input class="form-control {{ $errors->has('validity_year') ? 'is-invalid' : '' }}" type="number" name="validity_year" id="validity_year" value="{{ old('validity_year', '') }}" step="1">
                @if($errors->has('validity_year'))
                    <div class="invalid-feedback">
                        {{ $errors->first('validity_year') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.award.fields.validity_year_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="award_fees">{{ trans('cruds.award.fields.award_fees') }}</label>
                <input class="form-control {{ $errors->has('award_fees') ? 'is-invalid' : '' }}" type="number" name="award_fees" id="award_fees" value="{{ old('award_fees', '') }}" step="0.01">
                @if($errors->has('award_fees'))
                    <div class="invalid-feedback">
                        {{ $errors->first('award_fees') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.award.fields.award_fees_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.award.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note') }}</textarea>
                @if($errors->has('note'))
                    <div class="invalid-feedback">
                        {{ $errors->first('note') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.award.fields.note_helper') }}</span>
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