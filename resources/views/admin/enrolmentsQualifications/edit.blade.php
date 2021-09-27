@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.enrolmentsQualification.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.enrolments-qualifications.update", [$enrolmentsQualification->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="enrolment_status_id">{{ trans('cruds.enrolmentsQualification.fields.enrolment_status') }}</label>
                <select class="form-control select2 {{ $errors->has('enrolment_status') ? 'is-invalid' : '' }}" name="enrolment_status_id" id="enrolment_status_id" required>
                    @foreach($enrolment_statuses as $id => $entry)
                        <option value="{{ $id }}" {{ (old('enrolment_status_id') ? old('enrolment_status_id') : $enrolmentsQualification->enrolment_status->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('enrolment_status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('enrolment_status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.enrolmentsQualification.fields.enrolment_status_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="course_title_id">{{ trans('cruds.enrolmentsQualification.fields.course_title') }}</label>
                <select class="form-control select2 {{ $errors->has('course_title') ? 'is-invalid' : '' }}" name="course_title_id" id="course_title_id" required>
                    @foreach($course_titles as $id => $entry)
                        <option value="{{ $id }}" {{ (old('course_title_id') ? old('course_title_id') : $enrolmentsQualification->course_title->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('course_title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('course_title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.enrolmentsQualification.fields.course_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="start_date">{{ trans('cruds.enrolmentsQualification.fields.start_date') }}</label>
                <input class="form-control date {{ $errors->has('start_date') ? 'is-invalid' : '' }}" type="text" name="start_date" id="start_date" value="{{ old('start_date', $enrolmentsQualification->start_date) }}">
                @if($errors->has('start_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('start_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.enrolmentsQualification.fields.start_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="end_date">{{ trans('cruds.enrolmentsQualification.fields.end_date') }}</label>
                <input class="form-control date {{ $errors->has('end_date') ? 'is-invalid' : '' }}" type="text" name="end_date" id="end_date" value="{{ old('end_date', $enrolmentsQualification->end_date) }}">
                @if($errors->has('end_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('end_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.enrolmentsQualification.fields.end_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="enrolment_no">{{ trans('cruds.enrolmentsQualification.fields.enrolment_no') }}</label>
                <input class="form-control {{ $errors->has('enrolment_no') ? 'is-invalid' : '' }}" type="text" name="enrolment_no" id="enrolment_no" value="{{ old('enrolment_no', $enrolmentsQualification->enrolment_no) }}" required>
                @if($errors->has('enrolment_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('enrolment_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.enrolmentsQualification.fields.enrolment_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="student_name_id">{{ trans('cruds.enrolmentsQualification.fields.student_name') }}</label>
                <select class="form-control select2 {{ $errors->has('student_name') ? 'is-invalid' : '' }}" name="student_name_id" id="student_name_id" required>
                    @foreach($student_names as $id => $entry)
                        <option value="{{ $id }}" {{ (old('student_name_id') ? old('student_name_id') : $enrolmentsQualification->student_name->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('student_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('student_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.enrolmentsQualification.fields.student_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.enrolmentsQualification.fields.company_sponsored') }}</label>
                @foreach(App\Models\EnrolmentsQualification::COMPANY_SPONSORED_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('company_sponsored') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="company_sponsored_{{ $key }}" name="company_sponsored" value="{{ $key }}" {{ old('company_sponsored', $enrolmentsQualification->company_sponsored) === (string) $key ? 'checked' : '' }} required>
                        <label class="form-check-label" for="company_sponsored_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('company_sponsored'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_sponsored') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.enrolmentsQualification.fields.company_sponsored_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="officer_name_id">{{ trans('cruds.enrolmentsQualification.fields.officer_name') }}</label>
                <select class="form-control select2 {{ $errors->has('officer_name') ? 'is-invalid' : '' }}" name="officer_name_id" id="officer_name_id">
                    @foreach($officer_names as $id => $entry)
                        <option value="{{ $id }}" {{ (old('officer_name_id') ? old('officer_name_id') : $enrolmentsQualification->officer_name->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('officer_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('officer_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.enrolmentsQualification.fields.officer_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="total_fees">{{ trans('cruds.enrolmentsQualification.fields.total_fees') }}</label>
                <input class="form-control {{ $errors->has('total_fees') ? 'is-invalid' : '' }}" type="number" name="total_fees" id="total_fees" value="{{ old('total_fees', $enrolmentsQualification->total_fees) }}" step="0.01">
                @if($errors->has('total_fees'))
                    <div class="invalid-feedback">
                        {{ $errors->first('total_fees') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.enrolmentsQualification.fields.total_fees_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="amount_paid">{{ trans('cruds.enrolmentsQualification.fields.amount_paid') }}</label>
                <input class="form-control {{ $errors->has('amount_paid') ? 'is-invalid' : '' }}" type="number" name="amount_paid" id="amount_paid" value="{{ old('amount_paid', $enrolmentsQualification->amount_paid) }}" step="0.01">
                @if($errors->has('amount_paid'))
                    <div class="invalid-feedback">
                        {{ $errors->first('amount_paid') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.enrolmentsQualification.fields.amount_paid_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="outstanding_balance">{{ trans('cruds.enrolmentsQualification.fields.outstanding_balance') }}</label>
                <input class="form-control {{ $errors->has('outstanding_balance') ? 'is-invalid' : '' }}" type="number" name="outstanding_balance" id="outstanding_balance" value="{{ old('outstanding_balance', $enrolmentsQualification->outstanding_balance) }}" step="0.01">
                @if($errors->has('outstanding_balance'))
                    <div class="invalid-feedback">
                        {{ $errors->first('outstanding_balance') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.enrolmentsQualification.fields.outstanding_balance_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="result_points">{{ trans('cruds.enrolmentsQualification.fields.result_points') }}</label>
                <input class="form-control {{ $errors->has('result_points') ? 'is-invalid' : '' }}" type="number" name="result_points" id="result_points" value="{{ old('result_points', $enrolmentsQualification->result_points) }}" step="1">
                @if($errors->has('result_points'))
                    <div class="invalid-feedback">
                        {{ $errors->first('result_points') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.enrolmentsQualification.fields.result_points_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.enrolmentsQualification.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note', $enrolmentsQualification->note) }}</textarea>
                @if($errors->has('note'))
                    <div class="invalid-feedback">
                        {{ $errors->first('note') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.enrolmentsQualification.fields.note_helper') }}</span>
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