@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.corporatesApp.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.corporates-apps.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.id') }}
                        </th>
                        <td>
                            {{ $corporatesApp->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.status') }}
                        </th>
                        <td>
                            @foreach($corporatesApp->statuses as $key => $status)
                                <span class="label label-info">{{ $status->status_name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.application_no') }}
                        </th>
                        <td>
                            {{ $corporatesApp->application_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.member_class') }}
                        </th>
                        <td>
                            {{ $corporatesApp->member_class }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.company_name') }}
                        </th>
                        <td>
                            {{ $corporatesApp->company_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.business_reg_no') }}
                        </th>
                        <td>
                            {{ $corporatesApp->business_reg_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.company_address') }}
                        </th>
                        <td>
                            {{ $corporatesApp->company_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.country') }}
                        </th>
                        <td>
                            {{ $corporatesApp->country }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.postal_code') }}
                        </th>
                        <td>
                            {{ $corporatesApp->postal_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.company_tel_no') }}
                        </th>
                        <td>
                            {{ $corporatesApp->company_tel_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.company_website') }}
                        </th>
                        <td>
                            {{ $corporatesApp->company_website }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.company_type') }}
                        </th>
                        <td>
                            {{ $corporatesApp->company_type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.industry_type') }}
                        </th>
                        <td>
                            {{ $corporatesApp->industry_type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.no_employees') }}
                        </th>
                        <td>
                            {{ $corporatesApp->no_employees }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.annual_turnover') }}
                        </th>
                        <td>
                            {{ $corporatesApp->annual_turnover }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.title_1') }}
                        </th>
                        <td>
                            {{ $corporatesApp->title_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.name_1') }}
                        </th>
                        <td>
                            {{ $corporatesApp->name_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.designation_1') }}
                        </th>
                        <td>
                            {{ $corporatesApp->designation_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.email_1') }}
                        </th>
                        <td>
                            {{ $corporatesApp->email_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.office_no_1') }}
                        </th>
                        <td>
                            {{ $corporatesApp->office_no_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.mobile_no_1') }}
                        </th>
                        <td>
                            {{ $corporatesApp->mobile_no_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.title_2') }}
                        </th>
                        <td>
                            {{ $corporatesApp->title_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.name_2') }}
                        </th>
                        <td>
                            {{ $corporatesApp->name_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.designation_2') }}
                        </th>
                        <td>
                            {{ $corporatesApp->designation_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.email_2') }}
                        </th>
                        <td>
                            {{ $corporatesApp->email_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.office_no_2') }}
                        </th>
                        <td>
                            {{ $corporatesApp->office_no_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.mobile_no_2') }}
                        </th>
                        <td>
                            {{ $corporatesApp->mobile_no_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.name_3') }}
                        </th>
                        <td>
                            {{ $corporatesApp->name_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.email_3') }}
                        </th>
                        <td>
                            {{ $corporatesApp->email_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.name_4') }}
                        </th>
                        <td>
                            {{ $corporatesApp->name_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.email_4') }}
                        </th>
                        <td>
                            {{ $corporatesApp->email_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.name_5') }}
                        </th>
                        <td>
                            {{ $corporatesApp->name_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.email_5') }}
                        </th>
                        <td>
                            {{ $corporatesApp->email_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.business_profile') }}
                        </th>
                        <td>
                            {{ $corporatesApp->business_profile }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.cold_chain') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $corporatesApp->cold_chain ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.contract_law') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $corporatesApp->contract_law ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.cost_price_analysis') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $corporatesApp->cost_price_analysis ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.delivery_and_last_mile') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $corporatesApp->delivery_and_last_mile ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.digital_technologies') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $corporatesApp->digital_technologies ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.integrated_logistics') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $corporatesApp->integrated_logistics ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.inventory') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $corporatesApp->inventory ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.lean_six_sigma') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $corporatesApp->lean_six_sigma ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.negotiation') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $corporatesApp->negotiation ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.performance_evaluation') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $corporatesApp->performance_evaluation ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.professional_networking') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $corporatesApp->professional_networking ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.shipping_and_freight') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $corporatesApp->shipping_and_freight ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.sourcing') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $corporatesApp->sourcing ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.supply_chain_management') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $corporatesApp->supply_chain_management ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.tender_and_contract') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $corporatesApp->tender_and_contract ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.transportation') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $corporatesApp->transportation ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.warehousing') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $corporatesApp->warehousing ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.others') }}
                        </th>
                        <td>
                            {{ $corporatesApp->others }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.title') }}
                        </th>
                        <td>
                            {{ $corporatesApp->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.applicant_name') }}
                        </th>
                        <td>
                            {{ $corporatesApp->applicant_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.designation') }}
                        </th>
                        <td>
                            {{ $corporatesApp->designation }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.email') }}
                        </th>
                        <td>
                            {{ $corporatesApp->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.office_no') }}
                        </th>
                        <td>
                            {{ $corporatesApp->office_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.mobile_no') }}
                        </th>
                        <td>
                            {{ $corporatesApp->mobile_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.hear_about_us') }}
                        </th>
                        <td>
                            {{ $corporatesApp->hear_about_us }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.priority_code') }}
                        </th>
                        <td>
                            {{ $corporatesApp->priority_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.note') }}
                        </th>
                        <td>
                            {{ $corporatesApp->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.corporates-apps.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection