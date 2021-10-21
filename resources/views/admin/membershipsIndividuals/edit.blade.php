@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.membershipsIndividual.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.memberships-individuals.update", [$membershipsIndividual->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="member_status_id">{{ trans('cruds.membershipsIndividual.fields.member_status') }}</label>
                <select class="form-control select2 {{ $errors->has('member_status') ? 'is-invalid' : '' }}" name="member_status_id" id="member_status_id" required>
                    @foreach($member_statuses as $id => $entry)
                        <option value="{{ $id }}" {{ (old('member_status_id') ? old('member_status_id') : $membershipsIndividual->member_status->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('member_status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('member_status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.membershipsIndividual.fields.member_status_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="member_class_id">{{ trans('cruds.membershipsIndividual.fields.member_class') }}</label>
                <select class="form-control select2 {{ $errors->has('member_class') ? 'is-invalid' : '' }}" name="member_class_id" id="member_class_id" required>
                    @foreach($member_classes as $id => $entry)
                        <option value="{{ $id }}" {{ (old('member_class_id') ? old('member_class_id') : $membershipsIndividual->member_class->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('member_class'))
                    <div class="invalid-feedback">
                        {{ $errors->first('member_class') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.membershipsIndividual.fields.member_class_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="valid_from">{{ trans('cruds.membershipsIndividual.fields.valid_from') }}</label>
                <input class="form-control date {{ $errors->has('valid_from') ? 'is-invalid' : '' }}" type="text" name="valid_from" id="valid_from" value="{{ old('valid_from', $membershipsIndividual->valid_from) }}">
                @if($errors->has('valid_from'))
                    <div class="invalid-feedback">
                        {{ $errors->first('valid_from') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.membershipsIndividual.fields.valid_from_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="valid_till">{{ trans('cruds.membershipsIndividual.fields.valid_till') }}</label>
                <input class="form-control date {{ $errors->has('valid_till') ? 'is-invalid' : '' }}" type="text" name="valid_till" id="valid_till" value="{{ old('valid_till', $membershipsIndividual->valid_till) }}">
                @if($errors->has('valid_till'))
                    <div class="invalid-feedback">
                        {{ $errors->first('valid_till') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.membershipsIndividual.fields.valid_till_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="member_no">{{ trans('cruds.membershipsIndividual.fields.member_no') }}</label>
                <input class="form-control {{ $errors->has('member_no') ? 'is-invalid' : '' }}" type="text" name="member_no" id="member_no" value="{{ old('member_no', $membershipsIndividual->member_no) }}" required>
                @if($errors->has('member_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('member_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.membershipsIndividual.fields.member_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="member_name_id">{{ trans('cruds.membershipsIndividual.fields.member_name') }}</label>
                <select class="form-control select2 {{ $errors->has('member_name') ? 'is-invalid' : '' }}" name="member_name_id" id="member_name_id" required>
                    @foreach($member_names as $id => $entry)
                        <option value="{{ $id }}" {{ (old('member_name_id') ? old('member_name_id') : $membershipsIndividual->member_name->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('member_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('member_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.membershipsIndividual.fields.member_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="training_credits">{{ trans('cruds.membershipsIndividual.fields.training_credits') }}</label>
                <input class="form-control {{ $errors->has('training_credits') ? 'is-invalid' : '' }}" type="number" name="training_credits" id="training_credits" value="{{ old('training_credits', $membershipsIndividual->training_credits) }}" step="0.01">
                @if($errors->has('training_credits'))
                    <div class="invalid-feedback">
                        {{ $errors->first('training_credits') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.membershipsIndividual.fields.training_credits_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="support_funds">{{ trans('cruds.membershipsIndividual.fields.support_funds') }}</label>
                <input class="form-control {{ $errors->has('support_funds') ? 'is-invalid' : '' }}" type="number" name="support_funds" id="support_funds" value="{{ old('support_funds', $membershipsIndividual->support_funds) }}" step="0.01">
                @if($errors->has('support_funds'))
                    <div class="invalid-feedback">
                        {{ $errors->first('support_funds') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.membershipsIndividual.fields.support_funds_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="admission_date">{{ trans('cruds.membershipsIndividual.fields.admission_date') }}</label>
                <input class="form-control date {{ $errors->has('admission_date') ? 'is-invalid' : '' }}" type="text" name="admission_date" id="admission_date" value="{{ old('admission_date', $membershipsIndividual->admission_date) }}">
                @if($errors->has('admission_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('admission_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.membershipsIndividual.fields.admission_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.membershipsIndividual.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note', $membershipsIndividual->note) }}</textarea>
                @if($errors->has('note'))
                    <div class="invalid-feedback">
                        {{ $errors->first('note') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.membershipsIndividual.fields.note_helper') }}</span>
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