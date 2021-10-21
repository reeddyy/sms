@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.paymentsCorporate.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.payments-corporates.update", [$paymentsCorporate->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="member_no_id">{{ trans('cruds.paymentsCorporate.fields.member_no') }}</label>
                <select class="form-control select2 {{ $errors->has('member_no') ? 'is-invalid' : '' }}" name="member_no_id" id="member_no_id" required>
                    @foreach($member_nos as $id => $entry)
                        <option value="{{ $id }}" {{ (old('member_no_id') ? old('member_no_id') : $paymentsCorporate->member_no->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('member_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('member_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.paymentsCorporate.fields.member_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="payment_amount">{{ trans('cruds.paymentsCorporate.fields.payment_amount') }}</label>
                <input class="form-control {{ $errors->has('payment_amount') ? 'is-invalid' : '' }}" type="number" name="payment_amount" id="payment_amount" value="{{ old('payment_amount', $paymentsCorporate->payment_amount) }}" step="0.01">
                @if($errors->has('payment_amount'))
                    <div class="invalid-feedback">
                        {{ $errors->first('payment_amount') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.paymentsCorporate.fields.payment_amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="payment_date">{{ trans('cruds.paymentsCorporate.fields.payment_date') }}</label>
                <input class="form-control date {{ $errors->has('payment_date') ? 'is-invalid' : '' }}" type="text" name="payment_date" id="payment_date" value="{{ old('payment_date', $paymentsCorporate->payment_date) }}">
                @if($errors->has('payment_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('payment_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.paymentsCorporate.fields.payment_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="invoice_no">{{ trans('cruds.paymentsCorporate.fields.invoice_no') }}</label>
                <input class="form-control {{ $errors->has('invoice_no') ? 'is-invalid' : '' }}" type="text" name="invoice_no" id="invoice_no" value="{{ old('invoice_no', $paymentsCorporate->invoice_no) }}">
                @if($errors->has('invoice_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('invoice_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.paymentsCorporate.fields.invoice_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.paymentsCorporate.fields.membership') }}</label>
                @foreach(App\Models\PaymentsCorporate::MEMBERSHIP_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('membership') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="membership_{{ $key }}" name="membership" value="{{ $key }}" {{ old('membership', $paymentsCorporate->membership) === (string) $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="membership_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('membership'))
                    <div class="invalid-feedback">
                        {{ $errors->first('membership') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.paymentsCorporate.fields.membership_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="member_valid_till">{{ trans('cruds.paymentsCorporate.fields.member_valid_till') }}</label>
                <input class="form-control date {{ $errors->has('member_valid_till') ? 'is-invalid' : '' }}" type="text" name="member_valid_till" id="member_valid_till" value="{{ old('member_valid_till', $paymentsCorporate->member_valid_till) }}">
                @if($errors->has('member_valid_till'))
                    <div class="invalid-feedback">
                        {{ $errors->first('member_valid_till') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.paymentsCorporate.fields.member_valid_till_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.paymentsCorporate.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note', $paymentsCorporate->note) }}</textarea>
                @if($errors->has('note'))
                    <div class="invalid-feedback">
                        {{ $errors->first('note') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.paymentsCorporate.fields.note_helper') }}</span>
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