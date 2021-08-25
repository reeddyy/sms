@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.trainingCredit.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.training-credits.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="membership_no_id">{{ trans('cruds.trainingCredit.fields.membership_no') }}</label>
                <select class="form-control select2 {{ $errors->has('membership_no') ? 'is-invalid' : '' }}" name="membership_no_id" id="membership_no_id" required>
                    @foreach($membership_nos as $id => $entry)
                        <option value="{{ $id }}" {{ old('membership_no_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('membership_no'))
                    <span class="text-danger">{{ $errors->first('membership_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.trainingCredit.fields.membership_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tc_brought_forward">{{ trans('cruds.trainingCredit.fields.tc_brought_forward') }}</label>
                <input class="form-control {{ $errors->has('tc_brought_forward') ? 'is-invalid' : '' }}" type="number" name="tc_brought_forward" id="tc_brought_forward" value="{{ old('tc_brought_forward', '0') }}" step="0.01">
                @if($errors->has('tc_brought_forward'))
                    <span class="text-danger">{{ $errors->first('tc_brought_forward') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.trainingCredit.fields.tc_brought_forward_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="training_credit">{{ trans('cruds.trainingCredit.fields.training_credit') }}</label>
                <input class="form-control {{ $errors->has('training_credit') ? 'is-invalid' : '' }}" type="number" name="training_credit" id="training_credit" value="{{ old('training_credit', '0') }}" step="0.01">
                @if($errors->has('training_credit'))
                    <span class="text-danger">{{ $errors->first('training_credit') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.trainingCredit.fields.training_credit_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="digital_resisilience_fund">{{ trans('cruds.trainingCredit.fields.digital_resisilience_fund') }}</label>
                <input class="form-control {{ $errors->has('digital_resisilience_fund') ? 'is-invalid' : '' }}" type="number" name="digital_resisilience_fund" id="digital_resisilience_fund" value="{{ old('digital_resisilience_fund', '0') }}" step="0.01">
                @if($errors->has('digital_resisilience_fund'))
                    <span class="text-danger">{{ $errors->first('digital_resisilience_fund') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.trainingCredit.fields.digital_resisilience_fund_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="digital_enabler_fund">{{ trans('cruds.trainingCredit.fields.digital_enabler_fund') }}</label>
                <input class="form-control {{ $errors->has('digital_enabler_fund') ? 'is-invalid' : '' }}" type="number" name="digital_enabler_fund" id="digital_enabler_fund" value="{{ old('digital_enabler_fund', '0') }}" step="0.01">
                @if($errors->has('digital_enabler_fund'))
                    <span class="text-danger">{{ $errors->first('digital_enabler_fund') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.trainingCredit.fields.digital_enabler_fund_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="cf_used">{{ trans('cruds.trainingCredit.fields.cf_used') }}</label>
                <input class="form-control {{ $errors->has('cf_used') ? 'is-invalid' : '' }}" type="number" name="cf_used" id="cf_used" value="{{ old('cf_used', '0') }}" step="0.01">
                @if($errors->has('cf_used'))
                    <span class="text-danger">{{ $errors->first('cf_used') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.trainingCredit.fields.cf_used_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="cf_avaliable">{{ trans('cruds.trainingCredit.fields.cf_avaliable') }}</label>
                <input class="form-control {{ $errors->has('cf_avaliable') ? 'is-invalid' : '' }}" type="number" name="cf_avaliable" id="cf_avaliable" value="{{ old('cf_avaliable', '0') }}" step="0.01">
                @if($errors->has('cf_avaliable'))
                    <span class="text-danger">{{ $errors->first('cf_avaliable') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.trainingCredit.fields.cf_avaliable_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="valid_till">{{ trans('cruds.trainingCredit.fields.valid_till') }}</label>
                <input class="form-control date {{ $errors->has('valid_till') ? 'is-invalid' : '' }}" type="text" name="valid_till" id="valid_till" value="{{ old('valid_till') }}">
                @if($errors->has('valid_till'))
                    <span class="text-danger">{{ $errors->first('valid_till') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.trainingCredit.fields.valid_till_helper') }}</span>
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