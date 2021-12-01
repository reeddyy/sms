@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.admissionsEdp.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.admissions-edps.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.admissionsEdp.fields.id') }}
                        </th>
                        <td>
                            {{ $admissionsEdp->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.admissionsEdp.fields.status') }}
                        </th>
                        <td>
                            @foreach($admissionsEdp->statuses as $key => $status)
                                <span class="label label-info">{{ $status->status_name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.admissionsEdp.fields.application_no') }}
                        </th>
                        <td>
                            {{ $admissionsEdp->application_no->application_no ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.admissionsEdp.fields.edp_title') }}
                        </th>
                        <td>
                            {{ $admissionsEdp->edp_title->edp_title ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.admissionsEdp.fields.start_date') }}
                        </th>
                        <td>
                            {{ $admissionsEdp->start_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.admissionsEdp.fields.end_date') }}
                        </th>
                        <td>
                            {{ $admissionsEdp->end_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.admissionsEdp.fields.facilitator_name') }}
                        </th>
                        <td>
                            {{ $admissionsEdp->facilitator_name->facilitator_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.admissionsEdp.fields.venue') }}
                        </th>
                        <td>
                            {{ $admissionsEdp->venue->venue_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.admissionsEdp.fields.admission_no') }}
                        </th>
                        <td>
                            {{ $admissionsEdp->admission_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.admissionsEdp.fields.participant_name') }}
                        </th>
                        <td>
                            {{ $admissionsEdp->participant_name->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.admissionsEdp.fields.company_sponsored') }}
                        </th>
                        <td>
                            {{ App\Models\AdmissionsEdp::COMPANY_SPONSORED_RADIO[$admissionsEdp->company_sponsored] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.admissionsEdp.fields.officer_name') }}
                        </th>
                        <td>
                            {{ $admissionsEdp->officer_name->officer_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.admissionsEdp.fields.total_fees') }}
                        </th>
                        <td>
                            {{ $admissionsEdp->total_fees }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.admissionsEdp.fields.amount_paid') }}
                        </th>
                        <td>
                            {{ $admissionsEdp->amount_paid }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.admissionsEdp.fields.outstanding_balance') }}
                        </th>
                        <td>
                            {{ $admissionsEdp->outstanding_balance }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.admissionsEdp.fields.note') }}
                        </th>
                        <td>
                            {{ $admissionsEdp->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.admissions-edps.index') }}">
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
            <a class="nav-link" href="#admission_no_payments_edps" role="tab" data-toggle="tab">
                {{ trans('cruds.paymentsEdp.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="admission_no_payments_edps">
            @includeIf('admin.admissionsEdps.relationships.admissionNoPaymentsEdps', ['paymentsEdps' => $admissionsEdp->admissionNoPaymentsEdps])
        </div>
    </div>
</div>

@endsection