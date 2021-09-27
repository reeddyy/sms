@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.paymentSource.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.payment-sources.update", [$paymentSource->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="payment_source_name">{{ trans('cruds.paymentSource.fields.payment_source_name') }}</label>
                <input class="form-control {{ $errors->has('payment_source_name') ? 'is-invalid' : '' }}" type="text" name="payment_source_name" id="payment_source_name" value="{{ old('payment_source_name', $paymentSource->payment_source_name) }}" required>
                @if($errors->has('payment_source_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('payment_source_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.paymentSource.fields.payment_source_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.paymentSource.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note', $paymentSource->note) }}</textarea>
                @if($errors->has('note'))
                    <div class="invalid-feedback">
                        {{ $errors->first('note') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.paymentSource.fields.note_helper') }}</span>
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