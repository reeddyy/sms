@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.supportFundsIndividual.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.support-funds-individuals.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="member_no_id">{{ trans('cruds.supportFundsIndividual.fields.member_no') }}</label>
                <select class="form-control select2 {{ $errors->has('member_no') ? 'is-invalid' : '' }}" name="member_no_id" id="member_no_id" required>
                    <option value=""> Select Member</option>
                    @foreach($member_nos as $member_no)
                        <option value="{{ $member_no->id }}" {{ old('member_no_id') == $member_no->id ? 'selected' : '' }}>{{ $member_no->member_no }} | {{ $member_no->member_name->name }}</option>
                    @endforeach
                </select>
                @if($errors->has('member_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('member_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.supportFundsIndividual.fields.member_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="fund_name_id">{{ trans('cruds.supportFundsIndividual.fields.fund_name') }}</label>
                <select class="form-control select2 {{ $errors->has('fund_name') ? 'is-invalid' : '' }}" name="fund_name_id" id="fund_name_id" required>
                    @foreach($fund_names as $id => $entry)
                        <option value="{{ $id }}" {{ old('fund_name_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('fund_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('fund_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.supportFundsIndividual.fields.fund_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="amount">{{ trans('cruds.supportFundsIndividual.fields.amount') }}</label>
                <input class="form-control {{ $errors->has('amount') ? 'is-invalid' : '' }}" type="number" name="amount" id="amount" value="{{ old('amount', '0') }}" step="0.01">
                @if($errors->has('amount'))
                    <div class="invalid-feedback">
                        {{ $errors->first('amount') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.supportFundsIndividual.fields.amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date">{{ trans('cruds.supportFundsIndividual.fields.date') }}</label>
                <input class="form-control date {{ $errors->has('date') ? 'is-invalid' : '' }}" type="text" name="date" id="date" value="{{ old('date') }}">
                @if($errors->has('date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.supportFundsIndividual.fields.date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="invoice_no">{{ trans('cruds.supportFundsIndividual.fields.invoice_no') }}</label>
                <input class="form-control {{ $errors->has('invoice_no') ? 'is-invalid' : '' }}" type="text" name="invoice_no" id="invoice_no" value="{{ old('invoice_no', '') }}">
                @if($errors->has('invoice_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('invoice_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.supportFundsIndividual.fields.invoice_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="purpose_id">{{ trans('cruds.supportFundsIndividual.fields.purpose') }}</label>
                <select class="form-control select2 {{ $errors->has('purpose') ? 'is-invalid' : '' }}" name="purpose_id" id="purpose_id">
                    @foreach($purposes as $id => $entry)
                        <option value="{{ $id }}" {{ old('purpose_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('purpose'))
                    <div class="invalid-feedback">
                        {{ $errors->first('purpose') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.supportFundsIndividual.fields.purpose_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.supportFundsIndividual.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note') }}</textarea>
                @if($errors->has('note'))
                    <div class="invalid-feedback">
                        {{ $errors->first('note') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.supportFundsIndividual.fields.note_helper') }}</span>
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