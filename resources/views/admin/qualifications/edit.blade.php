@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.qualification.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.qualifications.update", [$qualification->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="student_name_id">{{ trans('cruds.qualification.fields.student_name') }}</label>
                <select class="form-control select2 {{ $errors->has('student_name') ? 'is-invalid' : '' }}" name="student_name_id" id="student_name_id" required>
                    @foreach($student_names as $id => $entry)
                        <option value="{{ $id }}" {{ (old('student_name_id') ? old('student_name_id') : $qualification->student_name->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
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
                        <option value="{{ $id }}" {{ (old('course_name_id') ? old('course_name_id') : $qualification->course_name->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('course_name'))
                    <span class="text-danger">{{ $errors->first('course_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.course_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="course_start_date">{{ trans('cruds.qualification.fields.course_start_date') }}</label>
                <input class="form-control date {{ $errors->has('course_start_date') ? 'is-invalid' : '' }}" type="text" name="course_start_date" id="course_start_date" value="{{ old('course_start_date', $qualification->course_start_date) }}" required>
                @if($errors->has('course_start_date'))
                    <span class="text-danger">{{ $errors->first('course_start_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.course_start_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="course_end_date">{{ trans('cruds.qualification.fields.course_end_date') }}</label>
                <input class="form-control date {{ $errors->has('course_end_date') ? 'is-invalid' : '' }}" type="text" name="course_end_date" id="course_end_date" value="{{ old('course_end_date', $qualification->course_end_date) }}">
                @if($errors->has('course_end_date'))
                    <span class="text-danger">{{ $errors->first('course_end_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.course_end_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.qualification.fields.enrolment_status') }}</label>
                @foreach(App\Models\Qualification::ENROLMENT_STATUS_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('enrolment_status') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="enrolment_status_{{ $key }}" name="enrolment_status" value="{{ $key }}" {{ old('enrolment_status', $qualification->enrolment_status) === (string) $key ? 'checked' : '' }} required>
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
                        <input class="form-check-input" type="radio" id="company_sponsored_{{ $key }}" name="company_sponsored" value="{{ $key }}" {{ old('company_sponsored', $qualification->company_sponsored) === (string) $key ? 'checked' : '' }} required>
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
                <input class="form-control {{ $errors->has('company_name') ? 'is-invalid' : '' }}" type="text" name="company_name" id="company_name" value="{{ old('company_name', $qualification->company_name) }}">
                @if($errors->has('company_name'))
                    <span class="text-danger">{{ $errors->first('company_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.company_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_address_line_1">{{ trans('cruds.qualification.fields.company_address_line_1') }}</label>
                <input class="form-control {{ $errors->has('company_address_line_1') ? 'is-invalid' : '' }}" type="text" name="company_address_line_1" id="company_address_line_1" value="{{ old('company_address_line_1', $qualification->company_address_line_1) }}">
                @if($errors->has('company_address_line_1'))
                    <span class="text-danger">{{ $errors->first('company_address_line_1') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.company_address_line_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_address_line_2">{{ trans('cruds.qualification.fields.company_address_line_2') }}</label>
                <input class="form-control {{ $errors->has('company_address_line_2') ? 'is-invalid' : '' }}" type="text" name="company_address_line_2" id="company_address_line_2" value="{{ old('company_address_line_2', $qualification->company_address_line_2) }}">
                @if($errors->has('company_address_line_2'))
                    <span class="text-danger">{{ $errors->first('company_address_line_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.company_address_line_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="country">{{ trans('cruds.qualification.fields.country') }}</label>
                <input class="form-control {{ $errors->has('country') ? 'is-invalid' : '' }}" type="text" name="country" id="country" value="{{ old('country', $qualification->country) }}">
                @if($errors->has('country'))
                    <span class="text-danger">{{ $errors->first('country') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.country_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="postal_code">{{ trans('cruds.qualification.fields.postal_code') }}</label>
                <input class="form-control {{ $errors->has('postal_code') ? 'is-invalid' : '' }}" type="number" name="postal_code" id="postal_code" value="{{ old('postal_code', $qualification->postal_code) }}" step="1">
                @if($errors->has('postal_code'))
                    <span class="text-danger">{{ $errors->first('postal_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.postal_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="officer_in_charge_name">{{ trans('cruds.qualification.fields.officer_in_charge_name') }}</label>
                <input class="form-control {{ $errors->has('officer_in_charge_name') ? 'is-invalid' : '' }}" type="text" name="officer_in_charge_name" id="officer_in_charge_name" value="{{ old('officer_in_charge_name', $qualification->officer_in_charge_name) }}">
                @if($errors->has('officer_in_charge_name'))
                    <span class="text-danger">{{ $errors->first('officer_in_charge_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.officer_in_charge_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="officer_designation">{{ trans('cruds.qualification.fields.officer_designation') }}</label>
                <input class="form-control {{ $errors->has('officer_designation') ? 'is-invalid' : '' }}" type="text" name="officer_designation" id="officer_designation" value="{{ old('officer_designation', $qualification->officer_designation) }}">
                @if($errors->has('officer_designation'))
                    <span class="text-danger">{{ $errors->first('officer_designation') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.officer_designation_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="officer_contact_no">{{ trans('cruds.qualification.fields.officer_contact_no') }}</label>
                <input class="form-control {{ $errors->has('officer_contact_no') ? 'is-invalid' : '' }}" type="text" name="officer_contact_no" id="officer_contact_no" value="{{ old('officer_contact_no', $qualification->officer_contact_no) }}">
                @if($errors->has('officer_contact_no'))
                    <span class="text-danger">{{ $errors->first('officer_contact_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.officer_contact_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="officer_email_address">{{ trans('cruds.qualification.fields.officer_email_address') }}</label>
                <input class="form-control {{ $errors->has('officer_email_address') ? 'is-invalid' : '' }}" type="email" name="officer_email_address" id="officer_email_address" value="{{ old('officer_email_address', $qualification->officer_email_address) }}">
                @if($errors->has('officer_email_address'))
                    <span class="text-danger">{{ $errors->first('officer_email_address') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.officer_email_address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ssg_claim_amount">{{ trans('cruds.qualification.fields.ssg_claim_amount') }}</label>
                <input class="form-control {{ $errors->has('ssg_claim_amount') ? 'is-invalid' : '' }}" type="number" name="ssg_claim_amount" id="ssg_claim_amount" value="{{ old('ssg_claim_amount', $qualification->ssg_claim_amount) }}" step="0.01">
                @if($errors->has('ssg_claim_amount'))
                    <span class="text-danger">{{ $errors->first('ssg_claim_amount') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.ssg_claim_amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ssg_claim_no">{{ trans('cruds.qualification.fields.ssg_claim_no') }}</label>
                <input class="form-control {{ $errors->has('ssg_claim_no') ? 'is-invalid' : '' }}" type="text" name="ssg_claim_no" id="ssg_claim_no" value="{{ old('ssg_claim_no', $qualification->ssg_claim_no) }}">
                @if($errors->has('ssg_claim_no'))
                    <span class="text-danger">{{ $errors->first('ssg_claim_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.ssg_claim_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ssg_payment_date">{{ trans('cruds.qualification.fields.ssg_payment_date') }}</label>
                <input class="form-control date {{ $errors->has('ssg_payment_date') ? 'is-invalid' : '' }}" type="text" name="ssg_payment_date" id="ssg_payment_date" value="{{ old('ssg_payment_date', $qualification->ssg_payment_date) }}">
                @if($errors->has('ssg_payment_date'))
                    <span class="text-danger">{{ $errors->first('ssg_payment_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.ssg_payment_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ssg_receipt_no">{{ trans('cruds.qualification.fields.ssg_receipt_no') }}</label>
                <input class="form-control {{ $errors->has('ssg_receipt_no') ? 'is-invalid' : '' }}" type="text" name="ssg_receipt_no" id="ssg_receipt_no" value="{{ old('ssg_receipt_no', $qualification->ssg_receipt_no) }}">
                @if($errors->has('ssg_receipt_no'))
                    <span class="text-danger">{{ $errors->first('ssg_receipt_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.ssg_receipt_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="waive_amount">{{ trans('cruds.qualification.fields.waive_amount') }}</label>
                <input class="form-control {{ $errors->has('waive_amount') ? 'is-invalid' : '' }}" type="number" name="waive_amount" id="waive_amount" value="{{ old('waive_amount', $qualification->waive_amount) }}" step="0.01">
                @if($errors->has('waive_amount'))
                    <span class="text-danger">{{ $errors->first('waive_amount') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.waive_amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tc_utilised_amount">{{ trans('cruds.qualification.fields.tc_utilised_amount') }}</label>
                <input class="form-control {{ $errors->has('tc_utilised_amount') ? 'is-invalid' : '' }}" type="number" name="tc_utilised_amount" id="tc_utilised_amount" value="{{ old('tc_utilised_amount', $qualification->tc_utilised_amount) }}" step="0.01">
                @if($errors->has('tc_utilised_amount'))
                    <span class="text-danger">{{ $errors->first('tc_utilised_amount') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.tc_utilised_amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="payment_amount">{{ trans('cruds.qualification.fields.payment_amount') }}</label>
                <input class="form-control {{ $errors->has('payment_amount') ? 'is-invalid' : '' }}" type="number" name="payment_amount" id="payment_amount" value="{{ old('payment_amount', $qualification->payment_amount) }}" step="0.01">
                @if($errors->has('payment_amount'))
                    <span class="text-danger">{{ $errors->first('payment_amount') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.payment_amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="payment_date">{{ trans('cruds.qualification.fields.payment_date') }}</label>
                <input class="form-control date {{ $errors->has('payment_date') ? 'is-invalid' : '' }}" type="text" name="payment_date" id="payment_date" value="{{ old('payment_date', $qualification->payment_date) }}">
                @if($errors->has('payment_date'))
                    <span class="text-danger">{{ $errors->first('payment_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.payment_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="receipt_no">{{ trans('cruds.qualification.fields.receipt_no') }}</label>
                <input class="form-control {{ $errors->has('receipt_no') ? 'is-invalid' : '' }}" type="text" name="receipt_no" id="receipt_no" value="{{ old('receipt_no', $qualification->receipt_no) }}">
                @if($errors->has('receipt_no'))
                    <span class="text-danger">{{ $errors->first('receipt_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.receipt_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="payment_note">{{ trans('cruds.qualification.fields.payment_note') }}</label>
                <input class="form-control {{ $errors->has('payment_note') ? 'is-invalid' : '' }}" type="text" name="payment_note" id="payment_note" value="{{ old('payment_note', $qualification->payment_note) }}">
                @if($errors->has('payment_note'))
                    <span class="text-danger">{{ $errors->first('payment_note') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.payment_note_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="amount_paid">{{ trans('cruds.qualification.fields.amount_paid') }}</label>
                <input class="form-control {{ $errors->has('amount_paid') ? 'is-invalid' : '' }}" type="number" name="amount_paid" id="amount_paid" value="{{ old('amount_paid', $qualification->amount_paid) }}" step="0.01">
                @if($errors->has('amount_paid'))
                    <span class="text-danger">{{ $errors->first('amount_paid') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.amount_paid_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="outstanding_balance">{{ trans('cruds.qualification.fields.outstanding_balance') }}</label>
                <input class="form-control {{ $errors->has('outstanding_balance') ? 'is-invalid' : '' }}" type="number" name="outstanding_balance" id="outstanding_balance" value="{{ old('outstanding_balance', $qualification->outstanding_balance) }}" step="0.01">
                @if($errors->has('outstanding_balance'))
                    <span class="text-danger">{{ $errors->first('outstanding_balance') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.outstanding_balance_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="results_release_date">{{ trans('cruds.qualification.fields.results_release_date') }}</label>
                <input class="form-control date {{ $errors->has('results_release_date') ? 'is-invalid' : '' }}" type="text" name="results_release_date" id="results_release_date" value="{{ old('results_release_date', $qualification->results_release_date) }}">
                @if($errors->has('results_release_date'))
                    <span class="text-danger">{{ $errors->first('results_release_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.results_release_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="module_1_name_id">{{ trans('cruds.qualification.fields.module_1_name') }}</label>
                <select class="form-control select2 {{ $errors->has('module_1_name') ? 'is-invalid' : '' }}" name="module_1_name_id" id="module_1_name_id">
                    @foreach($module_1_names as $id => $entry)
                        <option value="{{ $id }}" {{ (old('module_1_name_id') ? old('module_1_name_id') : $qualification->module_1_name->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('module_1_name'))
                    <span class="text-danger">{{ $errors->first('module_1_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.module_1_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="module_1_grade_id">{{ trans('cruds.qualification.fields.module_1_grade') }}</label>
                <select class="form-control select2 {{ $errors->has('module_1_grade') ? 'is-invalid' : '' }}" name="module_1_grade_id" id="module_1_grade_id">
                    @foreach($module_1_grades as $id => $entry)
                        <option value="{{ $id }}" {{ (old('module_1_grade_id') ? old('module_1_grade_id') : $qualification->module_1_grade->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('module_1_grade'))
                    <span class="text-danger">{{ $errors->first('module_1_grade') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.module_1_grade_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="module_2_name_id">{{ trans('cruds.qualification.fields.module_2_name') }}</label>
                <select class="form-control select2 {{ $errors->has('module_2_name') ? 'is-invalid' : '' }}" name="module_2_name_id" id="module_2_name_id">
                    @foreach($module_2_names as $id => $entry)
                        <option value="{{ $id }}" {{ (old('module_2_name_id') ? old('module_2_name_id') : $qualification->module_2_name->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('module_2_name'))
                    <span class="text-danger">{{ $errors->first('module_2_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.module_2_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="module_2_grade_id">{{ trans('cruds.qualification.fields.module_2_grade') }}</label>
                <select class="form-control select2 {{ $errors->has('module_2_grade') ? 'is-invalid' : '' }}" name="module_2_grade_id" id="module_2_grade_id">
                    @foreach($module_2_grades as $id => $entry)
                        <option value="{{ $id }}" {{ (old('module_2_grade_id') ? old('module_2_grade_id') : $qualification->module_2_grade->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('module_2_grade'))
                    <span class="text-danger">{{ $errors->first('module_2_grade') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.module_2_grade_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="module_3_name_id">{{ trans('cruds.qualification.fields.module_3_name') }}</label>
                <select class="form-control select2 {{ $errors->has('module_3_name') ? 'is-invalid' : '' }}" name="module_3_name_id" id="module_3_name_id">
                    @foreach($module_3_names as $id => $entry)
                        <option value="{{ $id }}" {{ (old('module_3_name_id') ? old('module_3_name_id') : $qualification->module_3_name->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('module_3_name'))
                    <span class="text-danger">{{ $errors->first('module_3_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.module_3_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="module_3_grade_id">{{ trans('cruds.qualification.fields.module_3_grade') }}</label>
                <select class="form-control select2 {{ $errors->has('module_3_grade') ? 'is-invalid' : '' }}" name="module_3_grade_id" id="module_3_grade_id">
                    @foreach($module_3_grades as $id => $entry)
                        <option value="{{ $id }}" {{ (old('module_3_grade_id') ? old('module_3_grade_id') : $qualification->module_3_grade->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('module_3_grade'))
                    <span class="text-danger">{{ $errors->first('module_3_grade') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.module_3_grade_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="module_4_name_id">{{ trans('cruds.qualification.fields.module_4_name') }}</label>
                <select class="form-control select2 {{ $errors->has('module_4_name') ? 'is-invalid' : '' }}" name="module_4_name_id" id="module_4_name_id">
                    @foreach($module_4_names as $id => $entry)
                        <option value="{{ $id }}" {{ (old('module_4_name_id') ? old('module_4_name_id') : $qualification->module_4_name->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('module_4_name'))
                    <span class="text-danger">{{ $errors->first('module_4_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.module_4_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="module_4_grade_id">{{ trans('cruds.qualification.fields.module_4_grade') }}</label>
                <select class="form-control select2 {{ $errors->has('module_4_grade') ? 'is-invalid' : '' }}" name="module_4_grade_id" id="module_4_grade_id">
                    @foreach($module_4_grades as $id => $entry)
                        <option value="{{ $id }}" {{ (old('module_4_grade_id') ? old('module_4_grade_id') : $qualification->module_4_grade->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('module_4_grade'))
                    <span class="text-danger">{{ $errors->first('module_4_grade') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.module_4_grade_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="module_5_name_id">{{ trans('cruds.qualification.fields.module_5_name') }}</label>
                <select class="form-control select2 {{ $errors->has('module_5_name') ? 'is-invalid' : '' }}" name="module_5_name_id" id="module_5_name_id">
                    @foreach($module_5_names as $id => $entry)
                        <option value="{{ $id }}" {{ (old('module_5_name_id') ? old('module_5_name_id') : $qualification->module_5_name->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('module_5_name'))
                    <span class="text-danger">{{ $errors->first('module_5_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.module_5_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="module_5_grade_id">{{ trans('cruds.qualification.fields.module_5_grade') }}</label>
                <select class="form-control select2 {{ $errors->has('module_5_grade') ? 'is-invalid' : '' }}" name="module_5_grade_id" id="module_5_grade_id">
                    @foreach($module_5_grades as $id => $entry)
                        <option value="{{ $id }}" {{ (old('module_5_grade_id') ? old('module_5_grade_id') : $qualification->module_5_grade->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('module_5_grade'))
                    <span class="text-danger">{{ $errors->first('module_5_grade') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.module_5_grade_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="module_6_name_id">{{ trans('cruds.qualification.fields.module_6_name') }}</label>
                <select class="form-control select2 {{ $errors->has('module_6_name') ? 'is-invalid' : '' }}" name="module_6_name_id" id="module_6_name_id">
                    @foreach($module_6_names as $id => $entry)
                        <option value="{{ $id }}" {{ (old('module_6_name_id') ? old('module_6_name_id') : $qualification->module_6_name->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('module_6_name'))
                    <span class="text-danger">{{ $errors->first('module_6_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.module_6_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="module_6_grade_id">{{ trans('cruds.qualification.fields.module_6_grade') }}</label>
                <select class="form-control select2 {{ $errors->has('module_6_grade') ? 'is-invalid' : '' }}" name="module_6_grade_id" id="module_6_grade_id">
                    @foreach($module_6_grades as $id => $entry)
                        <option value="{{ $id }}" {{ (old('module_6_grade_id') ? old('module_6_grade_id') : $qualification->module_6_grade->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('module_6_grade'))
                    <span class="text-danger">{{ $errors->first('module_6_grade') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.module_6_grade_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="transcript_1_release_date">{{ trans('cruds.qualification.fields.transcript_1_release_date') }}</label>
                <input class="form-control date {{ $errors->has('transcript_1_release_date') ? 'is-invalid' : '' }}" type="text" name="transcript_1_release_date" id="transcript_1_release_date" value="{{ old('transcript_1_release_date', $qualification->transcript_1_release_date) }}">
                @if($errors->has('transcript_1_release_date'))
                    <span class="text-danger">{{ $errors->first('transcript_1_release_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.transcript_1_release_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="transcript_2_release_date">{{ trans('cruds.qualification.fields.transcript_2_release_date') }}</label>
                <input class="form-control date {{ $errors->has('transcript_2_release_date') ? 'is-invalid' : '' }}" type="text" name="transcript_2_release_date" id="transcript_2_release_date" value="{{ old('transcript_2_release_date', $qualification->transcript_2_release_date) }}">
                @if($errors->has('transcript_2_release_date'))
                    <span class="text-danger">{{ $errors->first('transcript_2_release_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.qualification.fields.transcript_2_release_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.qualification.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note', $qualification->note) }}</textarea>
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