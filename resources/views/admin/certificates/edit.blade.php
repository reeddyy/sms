@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.certificate.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.certificates.update", [$certificate->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="award_name">{{ trans('cruds.certificate.fields.award_name') }}</label>
                <input class="form-control {{ $errors->has('award_name') ? 'is-invalid' : '' }}" type="text" name="award_name" id="award_name" value="{{ old('award_name', $certificate->award_name) }}" required>
                @if($errors->has('award_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('award_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.certificate.fields.award_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="awarded_by">{{ trans('cruds.certificate.fields.awarded_by') }}</label>
                <input class="form-control {{ $errors->has('awarded_by') ? 'is-invalid' : '' }}" type="text" name="awarded_by" id="awarded_by" value="{{ old('awarded_by', $certificate->awarded_by) }}">
                @if($errors->has('awarded_by'))
                    <div class="invalid-feedback">
                        {{ $errors->first('awarded_by') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.certificate.fields.awarded_by_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date_awarded">{{ trans('cruds.certificate.fields.date_awarded') }}</label>
                <input class="form-control date {{ $errors->has('date_awarded') ? 'is-invalid' : '' }}" type="text" name="date_awarded" id="date_awarded" value="{{ old('date_awarded', $certificate->date_awarded) }}">
                @if($errors->has('date_awarded'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_awarded') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.certificate.fields.date_awarded_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date_printed">{{ trans('cruds.certificate.fields.date_printed') }}</label>
                <input class="form-control date {{ $errors->has('date_printed') ? 'is-invalid' : '' }}" type="text" name="date_printed" id="date_printed" value="{{ old('date_printed', $certificate->date_printed) }}">
                @if($errors->has('date_printed'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_printed') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.certificate.fields.date_printed_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="recipient_name_id">{{ trans('cruds.certificate.fields.recipient_name') }}</label>
                <select class="form-control select2 {{ $errors->has('recipient_name') ? 'is-invalid' : '' }}" name="recipient_name_id" id="recipient_name_id" required>
                    @foreach($recipient_names as $id => $entry)
                        <option value="{{ $id }}" {{ (old('recipient_name_id') ? old('recipient_name_id') : $certificate->recipient_name->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('recipient_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('recipient_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.certificate.fields.recipient_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="credential_reference">{{ trans('cruds.certificate.fields.credential_reference') }}</label>
                <input class="form-control {{ $errors->has('credential_reference') ? 'is-invalid' : '' }}" type="text" name="credential_reference" id="credential_reference" value="{{ old('credential_reference', $certificate->credential_reference) }}" required>
                @if($errors->has('credential_reference'))
                    <div class="invalid-feedback">
                        {{ $errors->first('credential_reference') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.certificate.fields.credential_reference_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.certificate.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note', $certificate->note) }}</textarea>
                @if($errors->has('note'))
                    <div class="invalid-feedback">
                        {{ $errors->first('note') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.certificate.fields.note_helper') }}</span>
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