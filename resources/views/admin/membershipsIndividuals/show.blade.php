@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.membershipsIndividual.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.memberships-individuals.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.membershipsIndividual.fields.id') }}
                        </th>
                        <td>
                            {{ $membershipsIndividual->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.membershipsIndividual.fields.member_status') }}
                        </th>
                        <td>
                            {{ $membershipsIndividual->member_status->status_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.membershipsIndividual.fields.member_class') }}
                        </th>
                        <td>
                            {{ $membershipsIndividual->member_class->member_class_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.membershipsIndividual.fields.start_date') }}
                        </th>
                        <td>
                            {{ $membershipsIndividual->start_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.membershipsIndividual.fields.valid_till') }}
                        </th>
                        <td>
                            {{ $membershipsIndividual->valid_till }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.membershipsIndividual.fields.member_no') }}
                        </th>
                        <td>
                            {{ $membershipsIndividual->member_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.membershipsIndividual.fields.member_name') }}
                        </th>
                        <td>
                            {{ $membershipsIndividual->member_name->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.membershipsIndividual.fields.training_credits') }}
                        </th>
                        <td>
                            {{ $membershipsIndividual->training_credits }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.membershipsIndividual.fields.support_funds') }}
                        </th>
                        <td>
                            {{ $membershipsIndividual->support_funds }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.membershipsIndividual.fields.note') }}
                        </th>
                        <td>
                            {{ $membershipsIndividual->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.memberships-individuals.index') }}">
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
            <a class="nav-link" href="#member_no_tc_individuals" role="tab" data-toggle="tab">
                {{ trans('cruds.tcIndividual.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#member_no_payments_individuals" role="tab" data-toggle="tab">
                {{ trans('cruds.paymentsIndividual.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#member_no_sf_individuals" role="tab" data-toggle="tab">
                {{ trans('cruds.sfIndividual.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="member_no_tc_individuals">
            @includeIf('admin.membershipsIndividuals.relationships.memberNoTcIndividuals', ['tcIndividuals' => $membershipsIndividual->memberNoTcIndividuals])
        </div>
        <div class="tab-pane" role="tabpanel" id="member_no_payments_individuals">
            @includeIf('admin.membershipsIndividuals.relationships.memberNoPaymentsIndividuals', ['paymentsIndividuals' => $membershipsIndividual->memberNoPaymentsIndividuals])
        </div>
        <div class="tab-pane" role="tabpanel" id="member_no_sf_individuals">
            @includeIf('admin.membershipsIndividuals.relationships.memberNoSfIndividuals', ['sfIndividuals' => $membershipsIndividual->memberNoSfIndividuals])
        </div>
    </div>
</div>

@endsection