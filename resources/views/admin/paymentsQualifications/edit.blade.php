@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.paymentsQualification.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.payments-qualifications.update", [$paymentsQualification->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="enrolment_no_id">{{ trans('cruds.paymentsQualification.fields.enrolment_no') }}</label>
                <select class="form-control select2 {{ $errors->has('enrolment_no') ? 'is-invalid' : '' }}" name="enrolment_no_id" id="enrolment_no_id" required>
                    <option value="">Please select</option>
                    @foreach($enrolment_nos as $enrolment_no)
                        <option value="{{ $enrolment_no->id }}" {{ (old('enrolment_no_id') ? old('enrolment_no_id') : $paymentsQualification->enrolment_no->id ?? '') == $enrolment_no->id ? 'selected' : '' }}>{{ $enrolment_no->enrolment_no }} | {{ $enrolment_no->student_name->name }}</option>
                    @endforeach
                </select>
                @if($errors->has('enrolment_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('enrolment_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.paymentsQualification.fields.enrolment_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="payment_source_id">{{ trans('cruds.paymentsQualification.fields.payment_source') }}</label>
                <select class="form-control select2 {{ $errors->has('payment_source') ? 'is-invalid' : '' }}" name="payment_source_id" id="payment_source_id" required>
                    @foreach($payment_sources as $id => $entry)
                        <option value="{{ $id }}" {{ (old('payment_source_id') ? old('payment_source_id') : $paymentsQualification->payment_source->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('payment_source'))
                    <div class="invalid-feedback">
                        {{ $errors->first('payment_source') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.paymentsQualification.fields.payment_source_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="payment_amount">{{ trans('cruds.paymentsQualification.fields.payment_amount') }}</label>
                <input class="form-control {{ $errors->has('payment_amount') ? 'is-invalid' : '' }}" type="number" name="payment_amount" id="payment_amount" value="{{ old('payment_amount', $paymentsQualification->payment_amount) }}" step="0.01">
                @if($errors->has('payment_amount'))
                    <div class="invalid-feedback">
                        {{ $errors->first('payment_amount') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.paymentsQualification.fields.payment_amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="payment_date">{{ trans('cruds.paymentsQualification.fields.payment_date') }}</label>
                <input class="form-control date {{ $errors->has('payment_date') ? 'is-invalid' : '' }}" type="text" name="payment_date" id="payment_date" value="{{ old('payment_date', $paymentsQualification->payment_date) }}">
                @if($errors->has('payment_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('payment_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.paymentsQualification.fields.payment_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="invoice_no">{{ trans('cruds.paymentsQualification.fields.invoice_no') }}</label>
                <input class="form-control {{ $errors->has('invoice_no') ? 'is-invalid' : '' }}" type="text" name="invoice_no" id="invoice_no" value="{{ old('invoice_no', $paymentsQualification->invoice_no) }}">
                @if($errors->has('invoice_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('invoice_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.paymentsQualification.fields.invoice_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="instalment_no">{{ trans('cruds.paymentsQualification.fields.instalment_no') }}</label>
                <input class="form-control {{ $errors->has('instalment_no') ? 'is-invalid' : '' }}" type="number" name="instalment_no" id="instalment_no" value="{{ old('instalment_no', $paymentsQualification->instalment_no) }}" step="1">
                @if($errors->has('instalment_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('instalment_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.paymentsQualification.fields.instalment_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.paymentsQualification.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note', $paymentsQualification->note) }}</textarea>
                @if($errors->has('note'))
                    <div class="invalid-feedback">
                        {{ $errors->first('note') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.paymentsQualification.fields.note_helper') }}</span>
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