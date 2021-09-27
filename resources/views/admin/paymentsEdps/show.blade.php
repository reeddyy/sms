@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.paymentsEdp.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.payments-edps.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.paymentsEdp.fields.id') }}
                        </th>
                        <td>
                            {{ $paymentsEdp->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.paymentsEdp.fields.admission_no') }}
                        </th>
                        <td>
                            {{ $paymentsEdp->admission_no->admission_no ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.paymentsEdp.fields.payment_source') }}
                        </th>
                        <td>
                            {{ $paymentsEdp->payment_source->payment_source_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.paymentsEdp.fields.payment_amount') }}
                        </th>
                        <td>
                            {{ $paymentsEdp->payment_amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.paymentsEdp.fields.payment_date') }}
                        </th>
                        <td>
                            {{ $paymentsEdp->payment_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.paymentsEdp.fields.invoice_no') }}
                        </th>
                        <td>
                            {{ $paymentsEdp->invoice_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.paymentsEdp.fields.note') }}
                        </th>
                        <td>
                            {{ $paymentsEdp->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.payments-edps.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection