@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.paymentsIndividual.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.payments-individuals.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.paymentsIndividual.fields.id') }}
                        </th>
                        <td>
                            {{ $paymentsIndividual->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.paymentsIndividual.fields.member_no') }}
                        </th>
                        <td>
                            {{ $paymentsIndividual->member_no->member_no ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.paymentsIndividual.fields.payment_amount') }}
                        </th>
                        <td>
                            {{ $paymentsIndividual->payment_amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.paymentsIndividual.fields.payment_date') }}
                        </th>
                        <td>
                            {{ $paymentsIndividual->payment_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.paymentsIndividual.fields.invoice_no') }}
                        </th>
                        <td>
                            {{ $paymentsIndividual->invoice_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.paymentsIndividual.fields.membership') }}
                        </th>
                        <td>
                            {{ App\Models\PaymentsIndividual::MEMBERSHIP_RADIO[$paymentsIndividual->membership] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.paymentsIndividual.fields.member_valid_till') }}
                        </th>
                        <td>
                            {{ $paymentsIndividual->member_valid_till }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.paymentsIndividual.fields.note') }}
                        </th>
                        <td>
                            {{ $paymentsIndividual->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.payments-individuals.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection