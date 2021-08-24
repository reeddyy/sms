@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.qualification.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.qualifications.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="student_name_id">{{ trans('cruds.qualification.fields.student_name') }}</label>
                <select class="form-control select2 {{ $errors->has('student_name') ? 'is-invalid' : '' }}" name="student_name_id" id="student_name_id" required>
                    @foreach($student_names as $id => $entry)
                        <option value="{{ $id }}" {{ old('student_name_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('student_name'))
                    <span class="text-danger">{{ $errors->first('student_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.student_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="course_name_id">{{ trans('cruds.qualification.fields.course_name') }}</label>
                <select class="form-control select2 {{ $errors->has('course_name') ? 'is-invalid' : '' }}" name="course_name_id" id="course_name_id" required>
                    @foreach($course_names as $id => $entry)
                        <option value="{{ $id }}" {{ old('course_name_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('course_name'))
                    <span class="text-danger">{{ $errors->first('course_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.course_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="course_start_date">{{ trans('cruds.qualification.fields.course_start_date') }}</label>
                <input class="form-control date {{ $errors->has('course_start_date') ? 'is-invalid' : '' }}" type="text" name="course_start_date" id="course_start_date" value="{{ old('course_start_date') }}" required>
                @if($errors->has('course_start_date'))
                    <span class="text-danger">{{ $errors->first('course_start_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.course_start_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="course_end_date">{{ trans('cruds.qualification.fields.course_end_date') }}</label>
                <input class="form-control date {{ $errors->has('course_end_date') ? 'is-invalid' : '' }}" type="text" name="course_end_date" id="course_end_date" value="{{ old('course_end_date') }}">
                @if($errors->has('course_end_date'))
                    <span class="text-danger">{{ $errors->first('course_end_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.course_end_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.qualification.fields.enrolment_status') }}</label>
                @foreach(App\Models\Qualification::ENROLMENT_STATUS_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('enrolment_status') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="enrolment_status_{{ $key }}" name="enrolment_status" value="{{ $key }}" {{ old('enrolment_status', 'Accepted') === (string) $key ? 'checked' : '' }} required>
                        <label class="form-check-label" for="enrolment_status_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('enrolment_status'))
                    <span class="text-danger">{{ $errors->first('enrolment_status') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.enrolment_status_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.qualification.fields.company_sponsored') }}</label>
                @foreach(App\Models\Qualification::COMPANY_SPONSORED_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('company_sponsored') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="company_sponsored_{{ $key }}" name="company_sponsored" value="{{ $key }}" {{ old('company_sponsored', 'No') === (string) $key ? 'checked' : '' }} required>
                        <label class="form-check-label" for="company_sponsored_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('company_sponsored'))
                    <span class="text-danger">{{ $errors->first('company_sponsored') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.company_sponsored_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_name">{{ trans('cruds.qualification.fields.company_name') }}</label>
                <input class="form-control {{ $errors->has('company_name') ? 'is-invalid' : '' }}" type="text" name="company_name" id="company_name" value="{{ old('company_name', '') }}">
                @if($errors->has('company_name'))
                    <span class="text-danger">{{ $errors->first('company_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.company_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_address_line_1">{{ trans('cruds.qualification.fields.company_address_line_1') }}</label>
                <input class="form-control {{ $errors->has('company_address_line_1') ? 'is-invalid' : '' }}" type="text" name="company_address_line_1" id="company_address_line_1" value="{{ old('company_address_line_1', '') }}">
                @if($errors->has('company_address_line_1'))
                    <span class="text-danger">{{ $errors->first('company_address_line_1') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.company_address_line_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_address_line_2">{{ trans('cruds.qualification.fields.company_address_line_2') }}</label>
                <input class="form-control {{ $errors->has('company_address_line_2') ? 'is-invalid' : '' }}" type="text" name="company_address_line_2" id="company_address_line_2" value="{{ old('company_address_line_2', '') }}">
                @if($errors->has('company_address_line_2'))
                    <span class="text-danger">{{ $errors->first('company_address_line_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.company_address_line_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="country">{{ trans('cruds.qualification.fields.country') }}</label>
                <input class="form-control {{ $errors->has('country') ? 'is-invalid' : '' }}" type="text" name="country" id="country" value="{{ old('country', '') }}">
                @if($errors->has('country'))
                    <span class="text-danger">{{ $errors->first('country') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.country_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="postal_code">{{ trans('cruds.qualification.fields.postal_code') }}</label>
                <input class="form-control {{ $errors->has('postal_code') ? 'is-invalid' : '' }}" type="number" name="postal_code" id="postal_code" value="{{ old('postal_code', '') }}" step="1">
                @if($errors->has('postal_code'))
                    <span class="text-danger">{{ $errors->first('postal_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.postal_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="officer_in_charge_name">{{ trans('cruds.qualification.fields.officer_in_charge_name') }}</label>
                <input class="form-control {{ $errors->has('officer_in_charge_name') ? 'is-invalid' : '' }}" type="text" name="officer_in_charge_name" id="officer_in_charge_name" value="{{ old('officer_in_charge_name', '') }}">
                @if($errors->has('officer_in_charge_name'))
                    <span class="text-danger">{{ $errors->first('officer_in_charge_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.officer_in_charge_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="officer_designation">{{ trans('cruds.qualification.fields.officer_designation') }}</label>
                <input class="form-control {{ $errors->has('officer_designation') ? 'is-invalid' : '' }}" type="text" name="officer_designation" id="officer_designation" value="{{ old('officer_designation', '') }}">
                @if($errors->has('officer_designation'))
                    <span class="text-danger">{{ $errors->first('officer_designation') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.officer_designation_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="officer_contact_no">{{ trans('cruds.qualification.fields.officer_contact_no') }}</label>
                <input class="form-control {{ $errors->has('officer_contact_no') ? 'is-invalid' : '' }}" type="text" name="officer_contact_no" id="officer_contact_no" value="{{ old('officer_contact_no', '') }}">
                @if($errors->has('officer_contact_no'))
                    <span class="text-danger">{{ $errors->first('officer_contact_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.officer_contact_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="officer_email_address">{{ trans('cruds.qualification.fields.officer_email_address') }}</label>
                <input class="form-control {{ $errors->has('officer_email_address') ? 'is-invalid' : '' }}" type="email" name="officer_email_address" id="officer_email_address" value="{{ old('officer_email_address') }}">
                @if($errors->has('officer_email_address'))
                    <span class="text-danger">{{ $errors->first('officer_email_address') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.officer_email_address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ssg_claim_amount">{{ trans('cruds.qualification.fields.ssg_claim_amount') }}</label>
                <input class="form-control {{ $errors->has('ssg_claim_amount') ? 'is-invalid' : '' }}" type="number" name="ssg_claim_amount" id="ssg_claim_amount" value="{{ old('ssg_claim_amount', '0') }}" step="0.01">
                @if($errors->has('ssg_claim_amount'))
                    <span class="text-danger">{{ $errors->first('ssg_claim_amount') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.ssg_claim_amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ssg_claim_no">{{ trans('cruds.qualification.fields.ssg_claim_no') }}</label>
                <input class="form-control {{ $errors->has('ssg_claim_no') ? 'is-invalid' : '' }}" type="text" name="ssg_claim_no" id="ssg_claim_no" value="{{ old('ssg_claim_no', '') }}">
                @if($errors->has('ssg_claim_no'))
                    <span class="text-danger">{{ $errors->first('ssg_claim_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.ssg_claim_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ssg_payment_date">{{ trans('cruds.qualification.fields.ssg_payment_date') }}</label>
                <input class="form-control date {{ $errors->has('ssg_payment_date') ? 'is-invalid' : '' }}" type="text" name="ssg_payment_date" id="ssg_payment_date" value="{{ old('ssg_payment_date') }}">
                @if($errors->has('ssg_payment_date'))
                    <span class="text-danger">{{ $errors->first('ssg_payment_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.ssg_payment_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ssg_receipt_no">{{ trans('cruds.qualification.fields.ssg_receipt_no') }}</label>
                <input class="form-control {{ $errors->has('ssg_receipt_no') ? 'is-invalid' : '' }}" type="text" name="ssg_receipt_no" id="ssg_receipt_no" value="{{ old('ssg_receipt_no', '') }}">
                @if($errors->has('ssg_receipt_no'))
                    <span class="text-danger">{{ $errors->first('ssg_receipt_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.ssg_receipt_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="waive_amount">{{ trans('cruds.qualification.fields.waive_amount') }}</label>
                <input class="form-control {{ $errors->has('waive_amount') ? 'is-invalid' : '' }}" type="number" name="waive_amount" id="waive_amount" value="{{ old('waive_amount', '0') }}" step="0.01">
                @if($errors->has('waive_amount'))
                    <span class="text-danger">{{ $errors->first('waive_amount') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.waive_amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tc_utilised_amount">{{ trans('cruds.qualification.fields.tc_utilised_amount') }}</label>
                <input class="form-control {{ $errors->has('tc_utilised_amount') ? 'is-invalid' : '' }}" type="number" name="tc_utilised_amount" id="tc_utilised_amount" value="{{ old('tc_utilised_amount', '0') }}" step="0.01">
                @if($errors->has('tc_utilised_amount'))
                    <span class="text-danger">{{ $errors->first('tc_utilised_amount') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.tc_utilised_amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="instalment_amount">{{ trans('cruds.qualification.fields.instalment_amount') }}</label>
                <input class="form-control {{ $errors->has('instalment_amount') ? 'is-invalid' : '' }}" type="number" name="instalment_amount" id="instalment_amount" value="{{ old('instalment_amount', '0') }}" step="0.01">
                @if($errors->has('instalment_amount'))
                    <span class="text-danger">{{ $errors->first('instalment_amount') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.instalment_amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="payment_date">{{ trans('cruds.qualification.fields.payment_date') }}</label>
                <input class="form-control date {{ $errors->has('payment_date') ? 'is-invalid' : '' }}" type="text" name="payment_date" id="payment_date" value="{{ old('payment_date') }}">
                @if($errors->has('payment_date'))
                    <span class="text-danger">{{ $errors->first('payment_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.payment_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="receipt_no">{{ trans('cruds.qualification.fields.receipt_no') }}</label>
                <input class="form-control {{ $errors->has('receipt_no') ? 'is-invalid' : '' }}" type="text" name="receipt_no" id="receipt_no" value="{{ old('receipt_no', '') }}">
                @if($errors->has('receipt_no'))
                    <span class="text-danger">{{ $errors->first('receipt_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.receipt_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="module_name_id">{{ trans('cruds.qualification.fields.module_name') }}</label>
                <select class="form-control select2 {{ $errors->has('module_name') ? 'is-invalid' : '' }}" name="module_name_id" id="module_name_id">
                    @foreach($module_names as $id => $entry)
                        <option value="{{ $id }}" {{ old('module_name_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('module_name'))
                    <span class="text-danger">{{ $errors->first('module_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.module_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="module_grade_id">{{ trans('cruds.qualification.fields.module_grade') }}</label>
                <select class="form-control select2 {{ $errors->has('module_grade') ? 'is-invalid' : '' }}" name="module_grade_id" id="module_grade_id">
                    @foreach($module_grades as $id => $entry)
                        <option value="{{ $id }}" {{ old('module_grade_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('module_grade'))
                    <span class="text-danger">{{ $errors->first('module_grade') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.module_grade_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.qualification.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note') }}</textarea>
                @if($errors->has('note'))
                    <span class="text-danger">{{ $errors->first('note') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.note_helper') }}</span>
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