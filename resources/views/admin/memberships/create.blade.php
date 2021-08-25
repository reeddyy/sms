@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.membership.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.memberships.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="membership_no">{{ trans('cruds.membership.fields.membership_no') }}</label>
                <input class="form-control {{ $errors->has('membership_no') ? 'is-invalid' : '' }}" type="text" name="membership_no" id="membership_no" value="{{ old('membership_no', '') }}" required>
                @if($errors->has('membership_no'))
                    <span class="text-danger">{{ $errors->first('membership_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.membership.fields.membership_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="member_name_id">{{ trans('cruds.membership.fields.member_name') }}</label>
                <select class="form-control select2 {{ $errors->has('member_name') ? 'is-invalid' : '' }}" name="member_name_id" id="member_name_id" required>
                    @foreach($member_names as $id => $entry)
                        <option value="{{ $id }}" {{ old('member_name_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('member_name'))
                    <span class="text-danger">{{ $errors->first('member_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.membership.fields.member_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.membership.fields.member_class') }}</label>
                @foreach(App\Models\Membership::MEMBER_CLASS_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('member_class') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="member_class_{{ $key }}" name="member_class" value="{{ $key }}" {{ old('member_class', 'Affiliate') === (string) $key ? 'checked' : '' }} required>
                        <label class="form-check-label" for="member_class_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('member_class'))
                    <span class="text-danger">{{ $errors->first('member_class') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.membership.fields.member_class_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="membership_start_date">{{ trans('cruds.membership.fields.membership_start_date') }}</label>
                <input class="form-control date {{ $errors->has('membership_start_date') ? 'is-invalid' : '' }}" type="text" name="membership_start_date" id="membership_start_date" value="{{ old('membership_start_date') }}" required>
                @if($errors->has('membership_start_date'))
                    <span class="text-danger">{{ $errors->first('membership_start_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.membership.fields.membership_start_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="membership_expiry_date">{{ trans('cruds.membership.fields.membership_expiry_date') }}</label>
                <input class="form-control date {{ $errors->has('membership_expiry_date') ? 'is-invalid' : '' }}" type="text" name="membership_expiry_date" id="membership_expiry_date" value="{{ old('membership_expiry_date') }}" required>
                @if($errors->has('membership_expiry_date'))
                    <span class="text-danger">{{ $errors->first('membership_expiry_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.membership.fields.membership_expiry_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.membership.fields.membership_validity') }}</label>
                @foreach(App\Models\Membership::MEMBERSHIP_VALIDITY_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('membership_validity') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="membership_validity_{{ $key }}" name="membership_validity" value="{{ $key }}" {{ old('membership_validity', 'Active') === (string) $key ? 'checked' : '' }} required>
                        <label class="form-check-label" for="membership_validity_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('membership_validity'))
                    <span class="text-danger">{{ $errors->first('membership_validity') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.membership.fields.membership_validity_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="no_of_renewal">{{ trans('cruds.membership.fields.no_of_renewal') }}</label>
                <input class="form-control {{ $errors->has('no_of_renewal') ? 'is-invalid' : '' }}" type="number" name="no_of_renewal" id="no_of_renewal" value="{{ old('no_of_renewal', '0') }}" step="1" required>
                @if($errors->has('no_of_renewal'))
                    <span class="text-danger">{{ $errors->first('no_of_renewal') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.membership.fields.no_of_renewal_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="payment_amount">{{ trans('cruds.membership.fields.payment_amount') }}</label>
                <input class="form-control {{ $errors->has('payment_amount') ? 'is-invalid' : '' }}" type="number" name="payment_amount" id="payment_amount" value="{{ old('payment_amount', '0') }}" step="0.01">
                @if($errors->has('payment_amount'))
                    <span class="text-danger">{{ $errors->first('payment_amount') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.membership.fields.payment_amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="payment_date">{{ trans('cruds.membership.fields.payment_date') }}</label>
                <input class="form-control date {{ $errors->has('payment_date') ? 'is-invalid' : '' }}" type="text" name="payment_date" id="payment_date" value="{{ old('payment_date') }}">
                @if($errors->has('payment_date'))
                    <span class="text-danger">{{ $errors->first('payment_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.membership.fields.payment_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="payment_receipt_no">{{ trans('cruds.membership.fields.payment_receipt_no') }}</label>
                <input class="form-control {{ $errors->has('payment_receipt_no') ? 'is-invalid' : '' }}" type="text" name="payment_receipt_no" id="payment_receipt_no" value="{{ old('payment_receipt_no', '') }}">
                @if($errors->has('payment_receipt_no'))
                    <span class="text-danger">{{ $errors->first('payment_receipt_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.membership.fields.payment_receipt_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="payment_note">{{ trans('cruds.membership.fields.payment_note') }}</label>
                <input class="form-control {{ $errors->has('payment_note') ? 'is-invalid' : '' }}" type="text" name="payment_note" id="payment_note" value="{{ old('payment_note', '') }}">
                @if($errors->has('payment_note'))
                    <span class="text-danger">{{ $errors->first('payment_note') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.membership.fields.payment_note_helper') }}</span>
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