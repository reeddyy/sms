@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.supportFund.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.support-funds.update", [$supportFund->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="fund_name">{{ trans('cruds.supportFund.fields.fund_name') }}</label>
                <input class="form-control {{ $errors->has('fund_name') ? 'is-invalid' : '' }}" type="text" name="fund_name" id="fund_name" value="{{ old('fund_name', $supportFund->fund_name) }}" required>
                @if($errors->has('fund_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('fund_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.supportFund.fields.fund_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.supportFund.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note', $supportFund->note) }}</textarea>
                @if($errors->has('note'))
                    <div class="invalid-feedback">
                        {{ $errors->first('note') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.supportFund.fields.note_helper') }}</span>
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