@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.paymentSource.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.payment-sources.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.paymentSource.fields.id') }}
                        </th>
                        <td>
                            {{ $paymentSource->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.paymentSource.fields.payment_source_name') }}
                        </th>
                        <td>
                            {{ $paymentSource->payment_source_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.paymentSource.fields.note') }}
                        </th>
                        <td>
                            {{ $paymentSource->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.payment-sources.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#payment_source_payments_qualifications" role="tab" data-toggle="tab">
                {{ trans('cruds.paymentsQualification.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#payment_source_payments_edps" role="tab" data-toggle="tab">
                {{ trans('cruds.paymentsEdp.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="payment_source_payments_qualifications">
            @includeIf('admin.paymentSources.relationships.paymentSourcePaymentsQualifications', ['paymentsQualifications' => $paymentSource->paymentSourcePaymentsQualifications])
        </div>
        <div class="tab-pane" role="tabpanel" id="payment_source_payments_edps">
            @includeIf('admin.paymentSources.relationships.paymentSourcePaymentsEdps', ['paymentsEdps' => $paymentSource->paymentSourcePaymentsEdps])
        </div>
    </div>
</div>

@endsection