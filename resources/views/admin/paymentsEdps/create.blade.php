@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.paymentsEdp.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.payments-edps.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="admission_no_id">{{ trans('cruds.paymentsEdp.fields.admission_no') }}</label>
                <select class="form-control select2 {{ $errors->has('admission_no') ? 'is-invalid' : '' }}" name="admission_no_id" id="admission_no_id" required>
                    @foreach($admission_nos as $admission_no)
                        <option value="{{ $admission_no->id }}" {{ old('admission_no_id') == $admission_no->id ? 'selected' : '' }}>{{ $admission_no->admission_no }} | {{ $admission_no->participant_name->name }}</option>
                    @endforeach
                </select>
                @if($errors->has('admission_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('admission_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.paymentsEdp.fields.admission_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="payment_source_id">{{ trans('cruds.paymentsEdp.fields.payment_source') }}</label>
                <select class="form-control select2 {{ $errors->has('payment_source') ? 'is-invalid' : '' }}" name="payment_source_id" id="payment_source_id" required>
                    @foreach($payment_sources as $id => $entry)
                        <option value="{{ $id }}" {{ old('payment_source_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('payment_source'))
                    <div class="invalid-feedback">
                        {{ $errors->first('payment_source') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.paymentsEdp.fields.payment_source_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="payment_amount">{{ trans('cruds.paymentsEdp.fields.payment_amount') }}</label>
                <input class="form-control {{ $errors->has('payment_amount') ? 'is-invalid' : '' }}" type="number" name="payment_amount" id="payment_amount" value="{{ old('payment_amount', '0') }}" step="0.01">
                @if($errors->has('payment_amount'))
                    <div class="invalid-feedback">
                        {{ $errors->first('payment_amount') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.paymentsEdp.fields.payment_amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="payment_date">{{ trans('cruds.paymentsEdp.fields.payment_date') }}</label>
                <input class="form-control date {{ $errors->has('payment_date') ? 'is-invalid' : '' }}" type="text" name="payment_date" id="payment_date" value="{{ old('payment_date') }}">
                @if($errors->has('payment_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('payment_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.paymentsEdp.fields.payment_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="invoice_no">{{ trans('cruds.paymentsEdp.fields.invoice_no') }}</label>
                <input class="form-control {{ $errors->has('invoice_no') ? 'is-invalid' : '' }}" type="text" name="invoice_no" id="invoice_no" value="{{ old('invoice_no', '') }}">
                @if($errors->has('invoice_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('invoice_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.paymentsEdp.fields.invoice_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.paymentsEdp.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note') }}</textarea>
                @if($errors->has('note'))
                    <div class="invalid-feedback">
                        {{ $errors->first('note') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.paymentsEdp.fields.note_helper') }}</span>
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