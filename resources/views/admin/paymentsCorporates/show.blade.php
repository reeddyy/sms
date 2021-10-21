@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.paymentsCorporate.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.payments-corporates.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.paymentsCorporate.fields.id') }}
                        </th>
                        <td>
                            {{ $paymentsCorporate->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.paymentsCorporate.fields.member_no') }}
                        </th>
                        <td>
                            {{ $paymentsCorporate->member_no->member_no ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.paymentsCorporate.fields.payment_amount') }}
                        </th>
                        <td>
                            {{ $paymentsCorporate->payment_amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.paymentsCorporate.fields.payment_date') }}
                        </th>
                        <td>
                            {{ $paymentsCorporate->payment_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.paymentsCorporate.fields.invoice_no') }}
                        </th>
                        <td>
                            {{ $paymentsCorporate->invoice_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.paymentsCorporate.fields.membership') }}
                        </th>
                        <td>
                            {{ App\Models\PaymentsCorporate::MEMBERSHIP_RADIO[$paymentsCorporate->membership] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.paymentsCorporate.fields.member_valid_till') }}
                        </th>
                        <td>
                            {{ $paymentsCorporate->member_valid_till }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.paymentsCorporate.fields.note') }}
                        </th>
                        <td>
                            {{ $paymentsCorporate->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.payments-corporates.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection