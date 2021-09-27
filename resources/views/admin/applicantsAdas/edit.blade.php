@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.applicantsAda.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.applicants-adas.update", [$applicantsAda->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="ada_status_id">{{ trans('cruds.applicantsAda.fields.ada_status') }}</label>
                <select class="form-control select2 {{ $errors->has('ada_status') ? 'is-invalid' : '' }}" name="ada_status_id" id="ada_status_id" required>
                    @foreach($ada_statuses as $id => $entry)
                        <option value="{{ $id }}" {{ (old('ada_status_id') ? old('ada_status_id') : $applicantsAda->ada_status->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('ada_status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ada_status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.applicantsAda.fields.ada_status_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="award_name_id">{{ trans('cruds.applicantsAda.fields.award_name') }}</label>
                <select class="form-control select2 {{ $errors->has('award_name') ? 'is-invalid' : '' }}" name="award_name_id" id="award_name_id" required>
                    @foreach($award_names as $id => $entry)
                        <option value="{{ $id }}" {{ (old('award_name_id') ? old('award_name_id') : $applicantsAda->award_name->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('award_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('award_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.applicantsAda.fields.award_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="validity_start">{{ trans('cruds.applicantsAda.fields.validity_start') }}</label>
                <input class="form-control date {{ $errors->has('validity_start') ? 'is-invalid' : '' }}" type="text" name="validity_start" id="validity_start" value="{{ old('validity_start', $applicantsAda->validity_start) }}">
                @if($errors->has('validity_start'))
                    <div class="invalid-feedback">
                        {{ $errors->first('validity_start') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.applicantsAda.fields.validity_start_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="validity_end">{{ trans('cruds.applicantsAda.fields.validity_end') }}</label>
                <input class="form-control date {{ $errors->has('validity_end') ? 'is-invalid' : '' }}" type="text" name="validity_end" id="validity_end" value="{{ old('validity_end', $applicantsAda->validity_end) }}">
                @if($errors->has('validity_end'))
                    <div class="invalid-feedback">
                        {{ $errors->first('validity_end') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.applicantsAda.fields.validity_end_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="ada_no">{{ trans('cruds.applicantsAda.fields.ada_no') }}</label>
                <input class="form-control {{ $errors->has('ada_no') ? 'is-invalid' : '' }}" type="text" name="ada_no" id="ada_no" value="{{ old('ada_no', $applicantsAda->ada_no) }}" required>
                @if($errors->has('ada_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ada_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.applicantsAda.fields.ada_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="applicant_name_id">{{ trans('cruds.applicantsAda.fields.applicant_name') }}</label>
                <select class="form-control select2 {{ $errors->has('applicant_name') ? 'is-invalid' : '' }}" name="applicant_name_id" id="applicant_name_id" required>
                    @foreach($applicant_names as $id => $entry)
                        <option value="{{ $id }}" {{ (old('applicant_name_id') ? old('applicant_name_id') : $applicantsAda->applicant_name->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('applicant_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('applicant_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.applicantsAda.fields.applicant_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="amount_paid">{{ trans('cruds.applicantsAda.fields.amount_paid') }}</label>
                <input class="form-control {{ $errors->has('amount_paid') ? 'is-invalid' : '' }}" type="number" name="amount_paid" id="amount_paid" value="{{ old('amount_paid', $applicantsAda->amount_paid) }}" step="0.01">
                @if($errors->has('amount_paid'))
                    <div class="invalid-feedback">
                        {{ $errors->first('amount_paid') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.applicantsAda.fields.amount_paid_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="payment_date">{{ trans('cruds.applicantsAda.fields.payment_date') }}</label>
                <input class="form-control date {{ $errors->has('payment_date') ? 'is-invalid' : '' }}" type="text" name="payment_date" id="payment_date" value="{{ old('payment_date', $applicantsAda->payment_date) }}">
                @if($errors->has('payment_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('payment_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.applicantsAda.fields.payment_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="invoice_no">{{ trans('cruds.applicantsAda.fields.invoice_no') }}</label>
                <input class="form-control {{ $errors->has('invoice_no') ? 'is-invalid' : '' }}" type="text" name="invoice_no" id="invoice_no" value="{{ old('invoice_no', $applicantsAda->invoice_no) }}">
                @if($errors->has('invoice_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('invoice_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.applicantsAda.fields.invoice_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.applicantsAda.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note', $applicantsAda->note) }}</textarea>
                @if($errors->has('note'))
                    <div class="invalid-feedback">
                        {{ $errors->first('note') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.applicantsAda.fields.note_helper') }}</span>
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