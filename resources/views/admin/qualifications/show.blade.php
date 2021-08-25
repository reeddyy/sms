@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.qualification.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.qualifications.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.id') }}
                        </th>
                        <td>
                            {{ $qualification->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.student_name') }}
                        </th>
                        <td>
                            {{ $qualification->student_name->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.course_name') }}
                        </th>
                        <td>
                            {{ $qualification->course_name->course_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.course_start_date') }}
                        </th>
                        <td>
                            {{ $qualification->course_start_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.course_end_date') }}
                        </th>
                        <td>
                            {{ $qualification->course_end_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.enrolment_status') }}
                        </th>
                        <td>
                            {{ App\Models\Qualification::ENROLMENT_STATUS_RADIO[$qualification->enrolment_status] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.company_sponsored') }}
                        </th>
                        <td>
                            {{ App\Models\Qualification::COMPANY_SPONSORED_RADIO[$qualification->company_sponsored] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.company_name') }}
                        </th>
                        <td>
                            {{ $qualification->company_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.company_address_line_1') }}
                        </th>
                        <td>
                            {{ $qualification->company_address_line_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.company_address_line_2') }}
                        </th>
                        <td>
                            {{ $qualification->company_address_line_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.country') }}
                        </th>
                        <td>
                            {{ $qualification->country }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.postal_code') }}
                        </th>
                        <td>
                            {{ $qualification->postal_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.officer_in_charge_name') }}
                        </th>
                        <td>
                            {{ $qualification->officer_in_charge_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.officer_designation') }}
                        </th>
                        <td>
                            {{ $qualification->officer_designation }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.officer_contact_no') }}
                        </th>
                        <td>
                            {{ $qualification->officer_contact_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.officer_email_address') }}
                        </th>
                        <td>
                            {{ $qualification->officer_email_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.ssg_claim_amount') }}
                        </th>
                        <td>
                            {{ $qualification->ssg_claim_amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.ssg_claim_no') }}
                        </th>
                        <td>
                            {{ $qualification->ssg_claim_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.ssg_payment_date') }}
                        </th>
                        <td>
                            {{ $qualification->ssg_payment_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.ssg_receipt_no') }}
                        </th>
                        <td>
                            {{ $qualification->ssg_receipt_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.waive_amount') }}
                        </th>
                        <td>
                            {{ $qualification->waive_amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.tc_utilised_amount') }}
                        </th>
                        <td>
                            {{ $qualification->tc_utilised_amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.payment_amount') }}
                        </th>
                        <td>
                            {{ $qualification->payment_amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.payment_date') }}
                        </th>
                        <td>
                            {{ $qualification->payment_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.receipt_no') }}
                        </th>
                        <td>
                            {{ $qualification->receipt_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.payment_note') }}
                        </th>
                        <td>
                            {{ $qualification->payment_note }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.amount_paid') }}
                        </th>
                        <td>
                            {{ $qualification->amount_paid }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.outstanding_balance') }}
                        </th>
                        <td>
                            {{ $qualification->outstanding_balance }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.results_release_date') }}
                        </th>
                        <td>
                            {{ $qualification->results_release_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.module_1_name') }}
                        </th>
                        <td>
                            {{ $qualification->module_1_name->module_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.module_1_grade') }}
                        </th>
                        <td>
                            {{ $qualification->module_1_grade->grade ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.module_2_name') }}
                        </th>
                        <td>
                            {{ $qualification->module_2_name->module_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.module_2_grade') }}
                        </th>
                        <td>
                            {{ $qualification->module_2_grade->grade ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.module_3_name') }}
                        </th>
                        <td>
                            {{ $qualification->module_3_name->module_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.module_3_grade') }}
                        </th>
                        <td>
                            {{ $qualification->module_3_grade->grade ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.module_4_name') }}
                        </th>
                        <td>
                            {{ $qualification->module_4_name->module_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.module_4_grade') }}
                        </th>
                        <td>
                            {{ $qualification->module_4_grade->grade ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.module_5_name') }}
                        </th>
                        <td>
                            {{ $qualification->module_5_name->module_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.module_5_grade') }}
                        </th>
                        <td>
                            {{ $qualification->module_5_grade->grade ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.module_6_name') }}
                        </th>
                        <td>
                            {{ $qualification->module_6_name->module_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.module_6_grade') }}
                        </th>
                        <td>
                            {{ $qualification->module_6_grade->grade ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.transcript_1_release_date') }}
                        </th>
                        <td>
                            {{ $qualification->transcript_1_release_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.transcript_2_release_date') }}
                        </th>
                        <td>
                            {{ $qualification->transcript_2_release_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualification.fields.note') }}
                        </th>
                        <td>
                            {{ $qualification->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.qualifications.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection