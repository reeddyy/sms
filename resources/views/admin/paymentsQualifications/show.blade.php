@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.paymentsQualification.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.payments-qualifications.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.paymentsQualification.fields.id') }}
                        </th>
                        <td>
                            {{ $paymentsQualification->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.paymentsQualification.fields.enrolment_no') }}
                        </th>
                        <td>
                            {{ $paymentsQualification->enrolment_no->enrolment_no ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.paymentsQualification.fields.payment_source') }}
                        </th>
                        <td>
                            {{ $paymentsQualification->payment_source->payment_source_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.paymentsQualification.fields.payment_amount') }}
                        </th>
                        <td>
                            {{ $paymentsQualification->payment_amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.paymentsQualification.fields.payment_date') }}
                        </th>
                        <td>
                            {{ $paymentsQualification->payment_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.paymentsQualification.fields.invoice_no') }}
                        </th>
                        <td>
                            {{ $paymentsQualification->invoice_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.paymentsQualification.fields.instalment_no') }}
                        </th>
                        <td>
                            {{ $paymentsQualification->instalment_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.paymentsQualification.fields.note') }}
                        </th>
                        <td>
                            {{ $paymentsQualification->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.payments-qualifications.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection