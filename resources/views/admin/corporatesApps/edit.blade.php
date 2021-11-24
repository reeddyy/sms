@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.corporatesApp.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.corporates-apps.update", [$corporatesApp->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="statuses">{{ trans('cruds.corporatesApp.fields.status') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('statuses') ? 'is-invalid' : '' }}" name="statuses[]" id="statuses" multiple>
                    @foreach($statuses as $id => $status)
                        <option value="{{ $id }}" {{ (in_array($id, old('statuses', [])) || $corporatesApp->statuses->contains($id)) ? 'selected' : '' }}>{{ $status }}</option>
                    @endforeach
                </select>
                @if($errors->has('statuses'))
                    <div class="invalid-feedback">
                        {{ $errors->first('statuses') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="application_no">{{ trans('cruds.corporatesApp.fields.application_no') }}</label>
                <input class="form-control {{ $errors->has('application_no') ? 'is-invalid' : '' }}" type="text" name="application_no" id="application_no" value="{{ old('application_no', $corporatesApp->application_no) }}" required>
                @if($errors->has('application_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('application_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.application_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="member_class">{{ trans('cruds.corporatesApp.fields.member_class') }}</label>
                <input class="form-control {{ $errors->has('member_class') ? 'is-invalid' : '' }}" type="text" name="member_class" id="member_class" value="{{ old('member_class', $corporatesApp->member_class) }}">
                @if($errors->has('member_class'))
                    <div class="invalid-feedback">
                        {{ $errors->first('member_class') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.member_class_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_name">{{ trans('cruds.corporatesApp.fields.company_name') }}</label>
                <input class="form-control {{ $errors->has('company_name') ? 'is-invalid' : '' }}" type="text" name="company_name" id="company_name" value="{{ old('company_name', $corporatesApp->company_name) }}">
                @if($errors->has('company_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.company_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="business_reg_no">{{ trans('cruds.corporatesApp.fields.business_reg_no') }}</label>
                <input class="form-control {{ $errors->has('business_reg_no') ? 'is-invalid' : '' }}" type="text" name="business_reg_no" id="business_reg_no" value="{{ old('business_reg_no', $corporatesApp->business_reg_no) }}">
                @if($errors->has('business_reg_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('business_reg_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.business_reg_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_address">{{ trans('cruds.corporatesApp.fields.company_address') }}</label>
                <input class="form-control {{ $errors->has('company_address') ? 'is-invalid' : '' }}" type="text" name="company_address" id="company_address" value="{{ old('company_address', $corporatesApp->company_address) }}">
                @if($errors->has('company_address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.company_address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="country">{{ trans('cruds.corporatesApp.fields.country') }}</label>
                <input class="form-control {{ $errors->has('country') ? 'is-invalid' : '' }}" type="text" name="country" id="country" value="{{ old('country', $corporatesApp->country) }}">
                @if($errors->has('country'))
                    <div class="invalid-feedback">
                        {{ $errors->first('country') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.country_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="postal_code">{{ trans('cruds.corporatesApp.fields.postal_code') }}</label>
                <input class="form-control {{ $errors->has('postal_code') ? 'is-invalid' : '' }}" type="number" name="postal_code" id="postal_code" value="{{ old('postal_code', $corporatesApp->postal_code) }}" step="1">
                @if($errors->has('postal_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('postal_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.postal_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_tel_no">{{ trans('cruds.corporatesApp.fields.company_tel_no') }}</label>
                <input class="form-control {{ $errors->has('company_tel_no') ? 'is-invalid' : '' }}" type="text" name="company_tel_no" id="company_tel_no" value="{{ old('company_tel_no', $corporatesApp->company_tel_no) }}">
                @if($errors->has('company_tel_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_tel_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.company_tel_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_website">{{ trans('cruds.corporatesApp.fields.company_website') }}</label>
                <input class="form-control {{ $errors->has('company_website') ? 'is-invalid' : '' }}" type="text" name="company_website" id="company_website" value="{{ old('company_website', $corporatesApp->company_website) }}">
                @if($errors->has('company_website'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_website') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.company_website_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_type">{{ trans('cruds.corporatesApp.fields.company_type') }}</label>
                <input class="form-control {{ $errors->has('company_type') ? 'is-invalid' : '' }}" type="text" name="company_type" id="company_type" value="{{ old('company_type', $corporatesApp->company_type) }}">
                @if($errors->has('company_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.company_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="industry_type">{{ trans('cruds.corporatesApp.fields.industry_type') }}</label>
                <input class="form-control {{ $errors->has('industry_type') ? 'is-invalid' : '' }}" type="text" name="industry_type" id="industry_type" value="{{ old('industry_type', $corporatesApp->industry_type) }}">
                @if($errors->has('industry_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('industry_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.industry_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="no_employees">{{ trans('cruds.corporatesApp.fields.no_employees') }}</label>
                <input class="form-control {{ $errors->has('no_employees') ? 'is-invalid' : '' }}" type="text" name="no_employees" id="no_employees" value="{{ old('no_employees', $corporatesApp->no_employees) }}">
                @if($errors->has('no_employees'))
                    <div class="invalid-feedback">
                        {{ $errors->first('no_employees') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.no_employees_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="annual_turnover">{{ trans('cruds.corporatesApp.fields.annual_turnover') }}</label>
                <input class="form-control {{ $errors->has('annual_turnover') ? 'is-invalid' : '' }}" type="text" name="annual_turnover" id="annual_turnover" value="{{ old('annual_turnover', $corporatesApp->annual_turnover) }}">
                @if($errors->has('annual_turnover'))
                    <div class="invalid-feedback">
                        {{ $errors->first('annual_turnover') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.annual_turnover_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="title_1">{{ trans('cruds.corporatesApp.fields.title_1') }}</label>
                <input class="form-control {{ $errors->has('title_1') ? 'is-invalid' : '' }}" type="text" name="title_1" id="title_1" value="{{ old('title_1', $corporatesApp->title_1) }}">
                @if($errors->has('title_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.title_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name_1">{{ trans('cruds.corporatesApp.fields.name_1') }}</label>
                <input class="form-control {{ $errors->has('name_1') ? 'is-invalid' : '' }}" type="text" name="name_1" id="name_1" value="{{ old('name_1', $corporatesApp->name_1) }}">
                @if($errors->has('name_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.name_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="designation_1">{{ trans('cruds.corporatesApp.fields.designation_1') }}</label>
                <input class="form-control {{ $errors->has('designation_1') ? 'is-invalid' : '' }}" type="text" name="designation_1" id="designation_1" value="{{ old('designation_1', $corporatesApp->designation_1) }}">
                @if($errors->has('designation_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('designation_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.designation_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email_1">{{ trans('cruds.corporatesApp.fields.email_1') }}</label>
                <input class="form-control {{ $errors->has('email_1') ? 'is-invalid' : '' }}" type="email" name="email_1" id="email_1" value="{{ old('email_1', $corporatesApp->email_1) }}">
                @if($errors->has('email_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.email_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="office_no_1">{{ trans('cruds.corporatesApp.fields.office_no_1') }}</label>
                <input class="form-control {{ $errors->has('office_no_1') ? 'is-invalid' : '' }}" type="text" name="office_no_1" id="office_no_1" value="{{ old('office_no_1', $corporatesApp->office_no_1) }}">
                @if($errors->has('office_no_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('office_no_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.office_no_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="mobile_no_1">{{ trans('cruds.corporatesApp.fields.mobile_no_1') }}</label>
                <input class="form-control {{ $errors->has('mobile_no_1') ? 'is-invalid' : '' }}" type="text" name="mobile_no_1" id="mobile_no_1" value="{{ old('mobile_no_1', $corporatesApp->mobile_no_1) }}">
                @if($errors->has('mobile_no_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('mobile_no_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.mobile_no_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="title_2">{{ trans('cruds.corporatesApp.fields.title_2') }}</label>
                <input class="form-control {{ $errors->has('title_2') ? 'is-invalid' : '' }}" type="text" name="title_2" id="title_2" value="{{ old('title_2', $corporatesApp->title_2) }}">
                @if($errors->has('title_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.title_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name_2">{{ trans('cruds.corporatesApp.fields.name_2') }}</label>
                <input class="form-control {{ $errors->has('name_2') ? 'is-invalid' : '' }}" type="text" name="name_2" id="name_2" value="{{ old('name_2', $corporatesApp->name_2) }}">
                @if($errors->has('name_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.name_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="designation_2">{{ trans('cruds.corporatesApp.fields.designation_2') }}</label>
                <input class="form-control {{ $errors->has('designation_2') ? 'is-invalid' : '' }}" type="text" name="designation_2" id="designation_2" value="{{ old('designation_2', $corporatesApp->designation_2) }}">
                @if($errors->has('designation_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('designation_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.designation_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email_2">{{ trans('cruds.corporatesApp.fields.email_2') }}</label>
                <input class="form-control {{ $errors->has('email_2') ? 'is-invalid' : '' }}" type="email" name="email_2" id="email_2" value="{{ old('email_2', $corporatesApp->email_2) }}">
                @if($errors->has('email_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.email_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="office_no_2">{{ trans('cruds.corporatesApp.fields.office_no_2') }}</label>
                <input class="form-control {{ $errors->has('office_no_2') ? 'is-invalid' : '' }}" type="text" name="office_no_2" id="office_no_2" value="{{ old('office_no_2', $corporatesApp->office_no_2) }}">
                @if($errors->has('office_no_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('office_no_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.office_no_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="mobile_no_2">{{ trans('cruds.corporatesApp.fields.mobile_no_2') }}</label>
                <input class="form-control {{ $errors->has('mobile_no_2') ? 'is-invalid' : '' }}" type="text" name="mobile_no_2" id="mobile_no_2" value="{{ old('mobile_no_2', $corporatesApp->mobile_no_2) }}">
                @if($errors->has('mobile_no_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('mobile_no_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.mobile_no_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name_3">{{ trans('cruds.corporatesApp.fields.name_3') }}</label>
                <input class="form-control {{ $errors->has('name_3') ? 'is-invalid' : '' }}" type="text" name="name_3" id="name_3" value="{{ old('name_3', $corporatesApp->name_3) }}">
                @if($errors->has('name_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.name_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email_3">{{ trans('cruds.corporatesApp.fields.email_3') }}</label>
                <input class="form-control {{ $errors->has('email_3') ? 'is-invalid' : '' }}" type="email" name="email_3" id="email_3" value="{{ old('email_3', $corporatesApp->email_3) }}">
                @if($errors->has('email_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.email_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name_4">{{ trans('cruds.corporatesApp.fields.name_4') }}</label>
                <input class="form-control {{ $errors->has('name_4') ? 'is-invalid' : '' }}" type="text" name="name_4" id="name_4" value="{{ old('name_4', $corporatesApp->name_4) }}">
                @if($errors->has('name_4'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name_4') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.name_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email_4">{{ trans('cruds.corporatesApp.fields.email_4') }}</label>
                <input class="form-control {{ $errors->has('email_4') ? 'is-invalid' : '' }}" type="email" name="email_4" id="email_4" value="{{ old('email_4', $corporatesApp->email_4) }}">
                @if($errors->has('email_4'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email_4') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.email_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name_5">{{ trans('cruds.corporatesApp.fields.name_5') }}</label>
                <input class="form-control {{ $errors->has('name_5') ? 'is-invalid' : '' }}" type="text" name="name_5" id="name_5" value="{{ old('name_5', $corporatesApp->name_5) }}">
                @if($errors->has('name_5'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name_5') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.name_5_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email_5">{{ trans('cruds.corporatesApp.fields.email_5') }}</label>
                <input class="form-control {{ $errors->has('email_5') ? 'is-invalid' : '' }}" type="email" name="email_5" id="email_5" value="{{ old('email_5', $corporatesApp->email_5) }}">
                @if($errors->has('email_5'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email_5') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.email_5_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="business_profile">{{ trans('cruds.corporatesApp.fields.business_profile') }}</label>
                <input class="form-control {{ $errors->has('business_profile') ? 'is-invalid' : '' }}" type="text" name="business_profile" id="business_profile" value="{{ old('business_profile', $corporatesApp->business_profile) }}">
                @if($errors->has('business_profile'))
                    <div class="invalid-feedback">
                        {{ $errors->first('business_profile') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.business_profile_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('cold_chain') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="cold_chain" value="0">
                    <input class="form-check-input" type="checkbox" name="cold_chain" id="cold_chain" value="1" {{ $corporatesApp->cold_chain || old('cold_chain', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="cold_chain">{{ trans('cruds.corporatesApp.fields.cold_chain') }}</label>
                </div>
                @if($errors->has('cold_chain'))
                    <div class="invalid-feedback">
                        {{ $errors->first('cold_chain') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.cold_chain_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('contract_law') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="contract_law" value="0">
                    <input class="form-check-input" type="checkbox" name="contract_law" id="contract_law" value="1" {{ $corporatesApp->contract_law || old('contract_law', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="contract_law">{{ trans('cruds.corporatesApp.fields.contract_law') }}</label>
                </div>
                @if($errors->has('contract_law'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contract_law') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.contract_law_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('cost_price_analysis') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="cost_price_analysis" value="0">
                    <input class="form-check-input" type="checkbox" name="cost_price_analysis" id="cost_price_analysis" value="1" {{ $corporatesApp->cost_price_analysis || old('cost_price_analysis', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="cost_price_analysis">{{ trans('cruds.corporatesApp.fields.cost_price_analysis') }}</label>
                </div>
                @if($errors->has('cost_price_analysis'))
                    <div class="invalid-feedback">
                        {{ $errors->first('cost_price_analysis') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.cost_price_analysis_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('delivery_and_last_mile') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="delivery_and_last_mile" value="0">
                    <input class="form-check-input" type="checkbox" name="delivery_and_last_mile" id="delivery_and_last_mile" value="1" {{ $corporatesApp->delivery_and_last_mile || old('delivery_and_last_mile', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="delivery_and_last_mile">{{ trans('cruds.corporatesApp.fields.delivery_and_last_mile') }}</label>
                </div>
                @if($errors->has('delivery_and_last_mile'))
                    <div class="invalid-feedback">
                        {{ $errors->first('delivery_and_last_mile') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.delivery_and_last_mile_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('digital_technologies') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="digital_technologies" value="0">
                    <input class="form-check-input" type="checkbox" name="digital_technologies" id="digital_technologies" value="1" {{ $corporatesApp->digital_technologies || old('digital_technologies', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="digital_technologies">{{ trans('cruds.corporatesApp.fields.digital_technologies') }}</label>
                </div>
                @if($errors->has('digital_technologies'))
                    <div class="invalid-feedback">
                        {{ $errors->first('digital_technologies') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.digital_technologies_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('integrated_logistics') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="integrated_logistics" value="0">
                    <input class="form-check-input" type="checkbox" name="integrated_logistics" id="integrated_logistics" value="1" {{ $corporatesApp->integrated_logistics || old('integrated_logistics', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="integrated_logistics">{{ trans('cruds.corporatesApp.fields.integrated_logistics') }}</label>
                </div>
                @if($errors->has('integrated_logistics'))
                    <div class="invalid-feedback">
                        {{ $errors->first('integrated_logistics') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.integrated_logistics_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('inventory') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="inventory" value="0">
                    <input class="form-check-input" type="checkbox" name="inventory" id="inventory" value="1" {{ $corporatesApp->inventory || old('inventory', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="inventory">{{ trans('cruds.corporatesApp.fields.inventory') }}</label>
                </div>
                @if($errors->has('inventory'))
                    <div class="invalid-feedback">
                        {{ $errors->first('inventory') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.inventory_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('lean_six_sigma') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="lean_six_sigma" value="0">
                    <input class="form-check-input" type="checkbox" name="lean_six_sigma" id="lean_six_sigma" value="1" {{ $corporatesApp->lean_six_sigma || old('lean_six_sigma', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="lean_six_sigma">{{ trans('cruds.corporatesApp.fields.lean_six_sigma') }}</label>
                </div>
                @if($errors->has('lean_six_sigma'))
                    <div class="invalid-feedback">
                        {{ $errors->first('lean_six_sigma') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.lean_six_sigma_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('negotiation') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="negotiation" value="0">
                    <input class="form-check-input" type="checkbox" name="negotiation" id="negotiation" value="1" {{ $corporatesApp->negotiation || old('negotiation', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="negotiation">{{ trans('cruds.corporatesApp.fields.negotiation') }}</label>
                </div>
                @if($errors->has('negotiation'))
                    <div class="invalid-feedback">
                        {{ $errors->first('negotiation') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.negotiation_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('performance_evaluation') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="performance_evaluation" value="0">
                    <input class="form-check-input" type="checkbox" name="performance_evaluation" id="performance_evaluation" value="1" {{ $corporatesApp->performance_evaluation || old('performance_evaluation', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="performance_evaluation">{{ trans('cruds.corporatesApp.fields.performance_evaluation') }}</label>
                </div>
                @if($errors->has('performance_evaluation'))
                    <div class="invalid-feedback">
                        {{ $errors->first('performance_evaluation') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.performance_evaluation_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('professional_networking') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="professional_networking" value="0">
                    <input class="form-check-input" type="checkbox" name="professional_networking" id="professional_networking" value="1" {{ $corporatesApp->professional_networking || old('professional_networking', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="professional_networking">{{ trans('cruds.corporatesApp.fields.professional_networking') }}</label>
                </div>
                @if($errors->has('professional_networking'))
                    <div class="invalid-feedback">
                        {{ $errors->first('professional_networking') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.professional_networking_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('shipping_and_freight') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="shipping_and_freight" value="0">
                    <input class="form-check-input" type="checkbox" name="shipping_and_freight" id="shipping_and_freight" value="1" {{ $corporatesApp->shipping_and_freight || old('shipping_and_freight', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="shipping_and_freight">{{ trans('cruds.corporatesApp.fields.shipping_and_freight') }}</label>
                </div>
                @if($errors->has('shipping_and_freight'))
                    <div class="invalid-feedback">
                        {{ $errors->first('shipping_and_freight') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.shipping_and_freight_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('sourcing') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="sourcing" value="0">
                    <input class="form-check-input" type="checkbox" name="sourcing" id="sourcing" value="1" {{ $corporatesApp->sourcing || old('sourcing', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="sourcing">{{ trans('cruds.corporatesApp.fields.sourcing') }}</label>
                </div>
                @if($errors->has('sourcing'))
                    <div class="invalid-feedback">
                        {{ $errors->first('sourcing') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.sourcing_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('supply_chain_management') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="supply_chain_management" value="0">
                    <input class="form-check-input" type="checkbox" name="supply_chain_management" id="supply_chain_management" value="1" {{ $corporatesApp->supply_chain_management || old('supply_chain_management', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="supply_chain_management">{{ trans('cruds.corporatesApp.fields.supply_chain_management') }}</label>
                </div>
                @if($errors->has('supply_chain_management'))
                    <div class="invalid-feedback">
                        {{ $errors->first('supply_chain_management') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.supply_chain_management_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('tender_and_contract') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="tender_and_contract" value="0">
                    <input class="form-check-input" type="checkbox" name="tender_and_contract" id="tender_and_contract" value="1" {{ $corporatesApp->tender_and_contract || old('tender_and_contract', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="tender_and_contract">{{ trans('cruds.corporatesApp.fields.tender_and_contract') }}</label>
                </div>
                @if($errors->has('tender_and_contract'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tender_and_contract') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.tender_and_contract_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('transportation') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="transportation" value="0">
                    <input class="form-check-input" type="checkbox" name="transportation" id="transportation" value="1" {{ $corporatesApp->transportation || old('transportation', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="transportation">{{ trans('cruds.corporatesApp.fields.transportation') }}</label>
                </div>
                @if($errors->has('transportation'))
                    <div class="invalid-feedback">
                        {{ $errors->first('transportation') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.transportation_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('warehousing') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="warehousing" value="0">
                    <input class="form-check-input" type="checkbox" name="warehousing" id="warehousing" value="1" {{ $corporatesApp->warehousing || old('warehousing', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="warehousing">{{ trans('cruds.corporatesApp.fields.warehousing') }}</label>
                </div>
                @if($errors->has('warehousing'))
                    <div class="invalid-feedback">
                        {{ $errors->first('warehousing') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.warehousing_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="others">{{ trans('cruds.corporatesApp.fields.others') }}</label>
                <input class="form-control {{ $errors->has('others') ? 'is-invalid' : '' }}" type="text" name="others" id="others" value="{{ old('others', $corporatesApp->others) }}">
                @if($errors->has('others'))
                    <div class="invalid-feedback">
                        {{ $errors->first('others') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.others_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="title">{{ trans('cruds.corporatesApp.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $corporatesApp->title) }}">
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="applicant_name">{{ trans('cruds.corporatesApp.fields.applicant_name') }}</label>
                <input class="form-control {{ $errors->has('applicant_name') ? 'is-invalid' : '' }}" type="text" name="applicant_name" id="applicant_name" value="{{ old('applicant_name', $corporatesApp->applicant_name) }}">
                @if($errors->has('applicant_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('applicant_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.applicant_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="designation">{{ trans('cruds.corporatesApp.fields.designation') }}</label>
                <input class="form-control {{ $errors->has('designation') ? 'is-invalid' : '' }}" type="text" name="designation" id="designation" value="{{ old('designation', $corporatesApp->designation) }}">
                @if($errors->has('designation'))
                    <div class="invalid-feedback">
                        {{ $errors->first('designation') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.designation_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.corporatesApp.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email', $corporatesApp->email) }}">
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="office_no">{{ trans('cruds.corporatesApp.fields.office_no') }}</label>
                <input class="form-control {{ $errors->has('office_no') ? 'is-invalid' : '' }}" type="text" name="office_no" id="office_no" value="{{ old('office_no', $corporatesApp->office_no) }}">
                @if($errors->has('office_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('office_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.office_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="mobile_no">{{ trans('cruds.corporatesApp.fields.mobile_no') }}</label>
                <input class="form-control {{ $errors->has('mobile_no') ? 'is-invalid' : '' }}" type="text" name="mobile_no" id="mobile_no" value="{{ old('mobile_no', $corporatesApp->mobile_no) }}">
                @if($errors->has('mobile_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('mobile_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.mobile_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="hear_about_us">{{ trans('cruds.corporatesApp.fields.hear_about_us') }}</label>
                <input class="form-control {{ $errors->has('hear_about_us') ? 'is-invalid' : '' }}" type="text" name="hear_about_us" id="hear_about_us" value="{{ old('hear_about_us', $corporatesApp->hear_about_us) }}">
                @if($errors->has('hear_about_us'))
                    <div class="invalid-feedback">
                        {{ $errors->first('hear_about_us') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.hear_about_us_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="priority_code">{{ trans('cruds.corporatesApp.fields.priority_code') }}</label>
                <input class="form-control {{ $errors->has('priority_code') ? 'is-invalid' : '' }}" type="text" name="priority_code" id="priority_code" value="{{ old('priority_code', $corporatesApp->priority_code) }}">
                @if($errors->has('priority_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('priority_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.priority_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.corporatesApp.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note', $corporatesApp->note) }}</textarea>
                @if($errors->has('note'))
                    <div class="invalid-feedback">
                        {{ $errors->first('note') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.corporatesApp.fields.note_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection