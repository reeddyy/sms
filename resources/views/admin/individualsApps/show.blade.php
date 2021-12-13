@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.individualsApp.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.individuals-apps.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.id') }}
                        </th>
                        <td>
                            {{ $individualsApp->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.status') }}
                        </th>
                        <td>
                            @foreach($individualsApp->statuses as $key => $status)
                                <span class="label label-info">{{ $status->status_name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.application_no') }}
                        </th>
                        <td>
                            {{ $individualsApp->application_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.member_class') }}
                        </th>
                        <td>
                            {{ $individualsApp->member_class }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.title') }}
                        </th>
                        <td>
                            {{ $individualsApp->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.name') }}
                        </th>
                        <td>
                            {{ $individualsApp->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.id_no') }}
                        </th>
                        <td>
                            {{ $individualsApp->id_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.gender') }}
                        </th>
                        <td>
                            {{ $individualsApp->gender }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.dob') }}
                        </th>
                        <td>
                            {{ $individualsApp->dob }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.nationality') }}
                        </th>
                        <td>
                            {{ $individualsApp->nationality }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.address') }}
                        </th>
                        <td>
                            {{ $individualsApp->address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.country') }}
                        </th>
                        <td>
                            {{ $individualsApp->country }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.postal_code') }}
                        </th>
                        <td>
                            {{ $individualsApp->postal_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.contact_no') }}
                        </th>
                        <td>
                            {{ $individualsApp->contact_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.email') }}
                        </th>
                        <td>
                            {{ $individualsApp->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.lps_exp') }}
                        </th>
                        <td>
                            {{ $individualsApp->lps_exp }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.hear_about_us') }}
                        </th>
                        <td>
                            {{ $individualsApp->hear_about_us }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.company_name') }}
                        </th>
                        <td>
                            {{ $individualsApp->company_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.designation') }}
                        </th>
                        <td>
                            {{ $individualsApp->designation }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.duration') }}
                        </th>
                        <td>
                            {{ $individualsApp->duration }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.job_function') }}
                        </th>
                        <td>
                            {{ $individualsApp->job_function }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.industry_type') }}
                        </th>
                        <td>
                            {{ $individualsApp->industry_type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.company_address') }}
                        </th>
                        <td>
                            {{ $individualsApp->company_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.country_1') }}
                        </th>
                        <td>
                            {{ $individualsApp->country_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.postal_code_1') }}
                        </th>
                        <td>
                            {{ $individualsApp->postal_code_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.qualification') }}
                        </th>
                        <td>
                            {{ $individualsApp->qualification }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.level') }}
                        </th>
                        <td>
                            {{ $individualsApp->level }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.institute') }}
                        </th>
                        <td>
                            {{ $individualsApp->institute }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.year_attained') }}
                        </th>
                        <td>
                            {{ $individualsApp->year_attained }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.id_front') }}
                        </th>
                        <td>
                            {{ $individualsApp->id_front }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.id_back') }}
                        </th>
                        <td>
                            {{ $individualsApp->id_back }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.certificate') }}
                        </th>
                        <td>
                            {{ $individualsApp->certificate }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.cold_chain') }}
                        </th>
                        <td>
                            {{ $individualsApp->cold_chain }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.contract_law') }}
                        </th>
                        <td>
                            {{ $individualsApp->contract_law }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.cost_price_analysis') }}
                        </th>
                        <td>
                            {{ $individualsApp->cost_price_analysis }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.delivery_and_last_mile') }}
                        </th>
                        <td>
                            {{ $individualsApp->delivery_and_last_mile }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.digital_technologies') }}
                        </th>
                        <td>
                            {{ $individualsApp->digital_technologies }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.integrated_logistics') }}
                        </th>
                        <td>
                            {{ $individualsApp->integrated_logistics }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.inventory') }}
                        </th>
                        <td>
                            {{ $individualsApp->inventory }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.lean_six_sigma') }}
                        </th>
                        <td>
                            {{ $individualsApp->lean_six_sigma }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.negotiation') }}
                        </th>
                        <td>
                            {{ $individualsApp->negotiation }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.performance_evaluation') }}
                        </th>
                        <td>
                            {{ $individualsApp->performance_evaluation }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.professional_networking') }}
                        </th>
                        <td>
                            {{ $individualsApp->professional_networking }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.shipping_and_freight') }}
                        </th>
                        <td>
                            {{ $individualsApp->shipping_and_freight }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.sourcing') }}
                        </th>
                        <td>
                            {{ $individualsApp->sourcing }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.supply_chain_management') }}
                        </th>
                        <td>
                            {{ $individualsApp->supply_chain_management }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.tender_and_contract') }}
                        </th>
                        <td>
                            {{ $individualsApp->tender_and_contract }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.transportation') }}
                        </th>
                        <td>
                            {{ $individualsApp->transportation }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.warehousing') }}
                        </th>
                        <td>
                            {{ $individualsApp->warehousing }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.others') }}
                        </th>
                        <td>
                            {{ $individualsApp->others }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.priority_code') }}
                        </th>
                        <td>
                            {{ $individualsApp->priority_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individualsApp.fields.note') }}
                        </th>
                        <td>
                            {{ $individualsApp->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.individuals-apps.index') }}">
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
            <a class="nav-link" href="#application_no_memberships_individuals" role="tab" data-toggle="tab">
                {{ trans('cruds.membershipsIndividual.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="application_no_memberships_individuals">
            @includeIf('admin.individualsApps.relationships.applicationNoMembershipsIndividuals', ['membershipsIndividuals' => $individualsApp->applicationNoMembershipsIndividuals])
        </div>
    </div>
</div>

@endsection