@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.membershipsCorporate.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.memberships-corporates.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.membershipsCorporate.fields.id') }}
                        </th>
                        <td>
                            {{ $membershipsCorporate->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.membershipsCorporate.fields.member_status') }}
                        </th>
                        <td>
                            {{ $membershipsCorporate->member_status->status_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.membershipsCorporate.fields.member_class') }}
                        </th>
                        <td>
                            {{ $membershipsCorporate->member_class->member_class_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.membershipsCorporate.fields.valid_from') }}
                        </th>
                        <td>
                            {{ $membershipsCorporate->valid_from }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.membershipsCorporate.fields.valid_till') }}
                        </th>
                        <td>
                            {{ $membershipsCorporate->valid_till }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.membershipsCorporate.fields.member_no') }}
                        </th>
                        <td>
                            {{ $membershipsCorporate->member_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.membershipsCorporate.fields.company_name') }}
                        </th>
                        <td>
                            {{ $membershipsCorporate->company_name->company_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.membershipsCorporate.fields.training_credits') }}
                        </th>
                        <td>
                            {{ $membershipsCorporate->training_credits }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.membershipsCorporate.fields.support_funds') }}
                        </th>
                        <td>
                            @foreach($membershipsCorporate->support_funds as $key => $support_funds)
                                <span class="label label-info">{{ $support_funds->fund_name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.membershipsCorporate.fields.admission_date') }}
                        </th>
                        <td>
                            {{ $membershipsCorporate->admission_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.membershipsCorporate.fields.note') }}
                        </th>
                        <td>
                            {{ $membershipsCorporate->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.memberships-corporates.index') }}">
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
            <a class="nav-link" href="#member_no_payments_corporates" role="tab" data-toggle="tab">
                {{ trans('cruds.paymentsCorporate.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#member_no_training_credits_corporates" role="tab" data-toggle="tab">
                {{ trans('cruds.trainingCreditsCorporate.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#member_no_support_funds_corporates" role="tab" data-toggle="tab">
                {{ trans('cruds.supportFundsCorporate.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="member_no_payments_corporates">
            @includeIf('admin.membershipsCorporates.relationships.memberNoPaymentsCorporates', ['paymentsCorporates' => $membershipsCorporate->memberNoPaymentsCorporates])
        </div>
        <div class="tab-pane" role="tabpanel" id="member_no_training_credits_corporates">
            @includeIf('admin.membershipsCorporates.relationships.memberNoTrainingCreditsCorporates', ['trainingCreditsCorporates' => $membershipsCorporate->memberNoTrainingCreditsCorporates])
        </div>
        <div class="tab-pane" role="tabpanel" id="member_no_support_funds_corporates">
            @includeIf('admin.membershipsCorporates.relationships.memberNoSupportFundsCorporates', ['supportFundsCorporates' => $membershipsCorporate->memberNoSupportFundsCorporates])
        </div>
    </div>
</div>

@endsection