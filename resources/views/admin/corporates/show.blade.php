@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.corporate.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.corporates.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.corporate.fields.id') }}
                        </th>
                        <td>
                            {{ $corporate->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporate.fields.company_name') }}
                        </th>
                        <td>
                            {{ $corporate->company_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporate.fields.business_reg_no') }}
                        </th>
                        <td>
                            {{ $corporate->business_reg_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporate.fields.company_address') }}
                        </th>
                        <td>
                            {{ $corporate->company_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporate.fields.unit_no') }}
                        </th>
                        <td>
                            {{ $corporate->unit_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporate.fields.country') }}
                        </th>
                        <td>
                            {{ $corporate->country }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporate.fields.postal_code') }}
                        </th>
                        <td>
                            {{ $corporate->postal_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporate.fields.phone_no') }}
                        </th>
                        <td>
                            {{ $corporate->phone_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporate.fields.website') }}
                        </th>
                        <td>
                            {{ $corporate->website }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporate.fields.company_type') }}
                        </th>
                        <td>
                            {{ $corporate->company_type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporate.fields.industry_type') }}
                        </th>
                        <td>
                            {{ $corporate->industry_type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporate.fields.employees_no') }}
                        </th>
                        <td>
                            {{ $corporate->employees_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporate.fields.annual_turnover') }}
                        </th>
                        <td>
                            {{ $corporate->annual_turnover }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporate.fields.title_1') }}
                        </th>
                        <td>
                            {{ App\Models\Corporate::TITLE_1_SELECT[$corporate->title_1] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporate.fields.name_1') }}
                        </th>
                        <td>
                            {{ $corporate->name_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporate.fields.designation_1') }}
                        </th>
                        <td>
                            {{ $corporate->designation_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporate.fields.email_address_1') }}
                        </th>
                        <td>
                            {{ $corporate->email_address_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporate.fields.office_no_1') }}
                        </th>
                        <td>
                            {{ $corporate->office_no_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporate.fields.mobile_no_1') }}
                        </th>
                        <td>
                            {{ $corporate->mobile_no_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporate.fields.title_2') }}
                        </th>
                        <td>
                            {{ App\Models\Corporate::TITLE_2_SELECT[$corporate->title_2] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporate.fields.name_2') }}
                        </th>
                        <td>
                            {{ $corporate->name_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporate.fields.designation_2') }}
                        </th>
                        <td>
                            {{ $corporate->designation_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporate.fields.email_address_2') }}
                        </th>
                        <td>
                            {{ $corporate->email_address_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporate.fields.office_no_2') }}
                        </th>
                        <td>
                            {{ $corporate->office_no_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporate.fields.mobile_no_2') }}
                        </th>
                        <td>
                            {{ $corporate->mobile_no_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporate.fields.name_3') }}
                        </th>
                        <td>
                            {{ $corporate->name_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporate.fields.email_address_3') }}
                        </th>
                        <td>
                            {{ $corporate->email_address_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporate.fields.name_4') }}
                        </th>
                        <td>
                            {{ $corporate->name_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporate.fields.email_address_4') }}
                        </th>
                        <td>
                            {{ $corporate->email_address_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporate.fields.name_5') }}
                        </th>
                        <td>
                            {{ $corporate->name_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporate.fields.email_address_5') }}
                        </th>
                        <td>
                            {{ $corporate->email_address_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporate.fields.title') }}
                        </th>
                        <td>
                            {{ App\Models\Corporate::TITLE_SELECT[$corporate->title] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporate.fields.applicant_name') }}
                        </th>
                        <td>
                            {{ $corporate->applicant_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporate.fields.designation') }}
                        </th>
                        <td>
                            {{ $corporate->designation }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporate.fields.email_address') }}
                        </th>
                        <td>
                            {{ $corporate->email_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporate.fields.office_no') }}
                        </th>
                        <td>
                            {{ $corporate->office_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporate.fields.mobile_no') }}
                        </th>
                        <td>
                            {{ $corporate->mobile_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporate.fields.hear_about_us') }}
                        </th>
                        <td>
                            {{ $corporate->hear_about_us }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporate.fields.note') }}
                        </th>
                        <td>
                            {{ $corporate->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.corporates.index') }}">
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
            <a class="nav-link" href="#company_name_memberships_corporates" role="tab" data-toggle="tab">
                {{ trans('cruds.membershipsCorporate.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="company_name_memberships_corporates">
            @includeIf('admin.corporates.relationships.companyNameMembershipsCorporates', ['membershipsCorporates' => $corporate->companyNameMembershipsCorporates])
        </div>
    </div>
</div>

@endsection