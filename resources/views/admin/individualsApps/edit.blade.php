@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.individualsApp.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.individuals-apps.update", [$individualsApp->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="statuses">{{ trans('cruds.individualsApp.fields.status') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('statuses') ? 'is-invalid' : '' }}" name="statuses[]" id="statuses" multiple>
                    @foreach($statuses as $id => $status)
                        <option value="{{ $id }}" {{ (in_array($id, old('statuses', [])) || $individualsApp->statuses->contains($id)) ? 'selected' : '' }}>{{ $status }}</option>
                    @endforeach
                </select>
                @if($errors->has('statuses'))
                    <div class="invalid-feedback">
                        {{ $errors->first('statuses') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="application_no">{{ trans('cruds.individualsApp.fields.application_no') }}</label>
                <input class="form-control {{ $errors->has('application_no') ? 'is-invalid' : '' }}" type="text" name="application_no" id="application_no" value="{{ old('application_no', $individualsApp->application_no) }}" required>
                @if($errors->has('application_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('application_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.application_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="member_class">{{ trans('cruds.individualsApp.fields.member_class') }}</label>
                <input class="form-control {{ $errors->has('member_class') ? 'is-invalid' : '' }}" type="text" name="member_class" id="member_class" value="{{ old('member_class', $individualsApp->member_class) }}">
                @if($errors->has('member_class'))
                    <div class="invalid-feedback">
                        {{ $errors->first('member_class') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.member_class_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="title">{{ trans('cruds.individualsApp.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $individualsApp->title) }}">
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name">{{ trans('cruds.individualsApp.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $individualsApp->name) }}">
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="id_no">{{ trans('cruds.individualsApp.fields.id_no') }}</label>
                <input class="form-control {{ $errors->has('id_no') ? 'is-invalid' : '' }}" type="text" name="id_no" id="id_no" value="{{ old('id_no', $individualsApp->id_no) }}">
                @if($errors->has('id_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('id_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.id_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="gender">{{ trans('cruds.individualsApp.fields.gender') }}</label>
                <input class="form-control {{ $errors->has('gender') ? 'is-invalid' : '' }}" type="text" name="gender" id="gender" value="{{ old('gender', $individualsApp->gender) }}">
                @if($errors->has('gender'))
                    <div class="invalid-feedback">
                        {{ $errors->first('gender') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.gender_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="dob">{{ trans('cruds.individualsApp.fields.dob') }}</label>
                <input class="form-control date {{ $errors->has('dob') ? 'is-invalid' : '' }}" type="text" name="dob" id="dob" value="{{ old('dob', $individualsApp->dob) }}">
                @if($errors->has('dob'))
                    <div class="invalid-feedback">
                        {{ $errors->first('dob') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.dob_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="nationality">{{ trans('cruds.individualsApp.fields.nationality') }}</label>
                <input class="form-control {{ $errors->has('nationality') ? 'is-invalid' : '' }}" type="text" name="nationality" id="nationality" value="{{ old('nationality', $individualsApp->nationality) }}">
                @if($errors->has('nationality'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nationality') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.nationality_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="address">{{ trans('cruds.individualsApp.fields.address') }}</label>
                <input class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" type="text" name="address" id="address" value="{{ old('address', $individualsApp->address) }}">
                @if($errors->has('address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="country">{{ trans('cruds.individualsApp.fields.country') }}</label>
                <input class="form-control {{ $errors->has('country') ? 'is-invalid' : '' }}" type="text" name="country" id="country" value="{{ old('country', $individualsApp->country) }}">
                @if($errors->has('country'))
                    <div class="invalid-feedback">
                        {{ $errors->first('country') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.country_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="postal_code">{{ trans('cruds.individualsApp.fields.postal_code') }}</label>
                <input class="form-control {{ $errors->has('postal_code') ? 'is-invalid' : '' }}" type="number" name="postal_code" id="postal_code" value="{{ old('postal_code', $individualsApp->postal_code) }}" step="1">
                @if($errors->has('postal_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('postal_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.postal_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contact_no">{{ trans('cruds.individualsApp.fields.contact_no') }}</label>
                <input class="form-control {{ $errors->has('contact_no') ? 'is-invalid' : '' }}" type="text" name="contact_no" id="contact_no" value="{{ old('contact_no', $individualsApp->contact_no) }}">
                @if($errors->has('contact_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.contact_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.individualsApp.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email', $individualsApp->email) }}">
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="lps_exp">{{ trans('cruds.individualsApp.fields.lps_exp') }}</label>
                <input class="form-control {{ $errors->has('lps_exp') ? 'is-invalid' : '' }}" type="text" name="lps_exp" id="lps_exp" value="{{ old('lps_exp', $individualsApp->lps_exp) }}">
                @if($errors->has('lps_exp'))
                    <div class="invalid-feedback">
                        {{ $errors->first('lps_exp') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.lps_exp_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="hear_about_us">{{ trans('cruds.individualsApp.fields.hear_about_us') }}</label>
                <input class="form-control {{ $errors->has('hear_about_us') ? 'is-invalid' : '' }}" type="text" name="hear_about_us" id="hear_about_us" value="{{ old('hear_about_us', $individualsApp->hear_about_us) }}">
                @if($errors->has('hear_about_us'))
                    <div class="invalid-feedback">
                        {{ $errors->first('hear_about_us') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.hear_about_us_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_name">{{ trans('cruds.individualsApp.fields.company_name') }}</label>
                <input class="form-control {{ $errors->has('company_name') ? 'is-invalid' : '' }}" type="text" name="company_name" id="company_name" value="{{ old('company_name', $individualsApp->company_name) }}">
                @if($errors->has('company_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.company_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="designation">{{ trans('cruds.individualsApp.fields.designation') }}</label>
                <input class="form-control {{ $errors->has('designation') ? 'is-invalid' : '' }}" type="text" name="designation" id="designation" value="{{ old('designation', $individualsApp->designation) }}">
                @if($errors->has('designation'))
                    <div class="invalid-feedback">
                        {{ $errors->first('designation') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.designation_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="duration">{{ trans('cruds.individualsApp.fields.duration') }}</label>
                <input class="form-control {{ $errors->has('duration') ? 'is-invalid' : '' }}" type="number" name="duration" id="duration" value="{{ old('duration', $individualsApp->duration) }}" step="1">
                @if($errors->has('duration'))
                    <div class="invalid-feedback">
                        {{ $errors->first('duration') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.duration_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="job_function">{{ trans('cruds.individualsApp.fields.job_function') }}</label>
                <input class="form-control {{ $errors->has('job_function') ? 'is-invalid' : '' }}" type="text" name="job_function" id="job_function" value="{{ old('job_function', $individualsApp->job_function) }}">
                @if($errors->has('job_function'))
                    <div class="invalid-feedback">
                        {{ $errors->first('job_function') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.job_function_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="industry_type">{{ trans('cruds.individualsApp.fields.industry_type') }}</label>
                <input class="form-control {{ $errors->has('industry_type') ? 'is-invalid' : '' }}" type="text" name="industry_type" id="industry_type" value="{{ old('industry_type', $individualsApp->industry_type) }}">
                @if($errors->has('industry_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('industry_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.industry_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_address">{{ trans('cruds.individualsApp.fields.company_address') }}</label>
                <input class="form-control {{ $errors->has('company_address') ? 'is-invalid' : '' }}" type="text" name="company_address" id="company_address" value="{{ old('company_address', $individualsApp->company_address) }}">
                @if($errors->has('company_address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.company_address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="country_1">{{ trans('cruds.individualsApp.fields.country_1') }}</label>
                <input class="form-control {{ $errors->has('country_1') ? 'is-invalid' : '' }}" type="text" name="country_1" id="country_1" value="{{ old('country_1', $individualsApp->country_1) }}">
                @if($errors->has('country_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('country_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.country_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="postal_code_1">{{ trans('cruds.individualsApp.fields.postal_code_1') }}</label>
                <input class="form-control {{ $errors->has('postal_code_1') ? 'is-invalid' : '' }}" type="number" name="postal_code_1" id="postal_code_1" value="{{ old('postal_code_1', $individualsApp->postal_code_1) }}" step="1">
                @if($errors->has('postal_code_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('postal_code_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.postal_code_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="qualification">{{ trans('cruds.individualsApp.fields.qualification') }}</label>
                <input class="form-control {{ $errors->has('qualification') ? 'is-invalid' : '' }}" type="text" name="qualification" id="qualification" value="{{ old('qualification', $individualsApp->qualification) }}">
                @if($errors->has('qualification'))
                    <div class="invalid-feedback">
                        {{ $errors->first('qualification') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.qualification_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="level">{{ trans('cruds.individualsApp.fields.level') }}</label>
                <input class="form-control {{ $errors->has('level') ? 'is-invalid' : '' }}" type="text" name="level" id="level" value="{{ old('level', $individualsApp->level) }}">
                @if($errors->has('level'))
                    <div class="invalid-feedback">
                        {{ $errors->first('level') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.level_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="institute">{{ trans('cruds.individualsApp.fields.institute') }}</label>
                <input class="form-control {{ $errors->has('institute') ? 'is-invalid' : '' }}" type="text" name="institute" id="institute" value="{{ old('institute', $individualsApp->institute) }}">
                @if($errors->has('institute'))
                    <div class="invalid-feedback">
                        {{ $errors->first('institute') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.institute_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="year_attained">{{ trans('cruds.individualsApp.fields.year_attained') }}</label>
                <input class="form-control {{ $errors->has('year_attained') ? 'is-invalid' : '' }}" type="number" name="year_attained" id="year_attained" value="{{ old('year_attained', $individualsApp->year_attained) }}" step="1">
                @if($errors->has('year_attained'))
                    <div class="invalid-feedback">
                        {{ $errors->first('year_attained') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.year_attained_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="id_front">{{ trans('cruds.individualsApp.fields.id_front') }}</label>
                <input class="form-control {{ $errors->has('id_front') ? 'is-invalid' : '' }}" type="text" name="id_front" id="id_front" value="{{ old('id_front', $individualsApp->id_front) }}">
                @if($errors->has('id_front'))
                    <div class="invalid-feedback">
                        {{ $errors->first('id_front') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.id_front_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="id_back">{{ trans('cruds.individualsApp.fields.id_back') }}</label>
                <input class="form-control {{ $errors->has('id_back') ? 'is-invalid' : '' }}" type="text" name="id_back" id="id_back" value="{{ old('id_back', $individualsApp->id_back) }}">
                @if($errors->has('id_back'))
                    <div class="invalid-feedback">
                        {{ $errors->first('id_back') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.id_back_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="certificate">{{ trans('cruds.individualsApp.fields.certificate') }}</label>
                <input class="form-control {{ $errors->has('certificate') ? 'is-invalid' : '' }}" type="text" name="certificate" id="certificate" value="{{ old('certificate', $individualsApp->certificate) }}">
                @if($errors->has('certificate'))
                    <div class="invalid-feedback">
                        {{ $errors->first('certificate') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.certificate_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('cold_chain') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="cold_chain" value="0">
                    <input class="form-check-input" type="checkbox" name="cold_chain" id="cold_chain" value="1" {{ $individualsApp->cold_chain || old('cold_chain', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="cold_chain">{{ trans('cruds.individualsApp.fields.cold_chain') }}</label>
                </div>
                @if($errors->has('cold_chain'))
                    <div class="invalid-feedback">
                        {{ $errors->first('cold_chain') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.cold_chain_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('performance_evaluation') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="performance_evaluation" value="0">
                    <input class="form-check-input" type="checkbox" name="performance_evaluation" id="performance_evaluation" value="1" {{ $individualsApp->performance_evaluation || old('performance_evaluation', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="performance_evaluation">{{ trans('cruds.individualsApp.fields.performance_evaluation') }}</label>
                </div>
                @if($errors->has('performance_evaluation'))
                    <div class="invalid-feedback">
                        {{ $errors->first('performance_evaluation') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.performance_evaluation_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('contract_law') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="contract_law" value="0">
                    <input class="form-check-input" type="checkbox" name="contract_law" id="contract_law" value="1" {{ $individualsApp->contract_law || old('contract_law', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="contract_law">{{ trans('cruds.individualsApp.fields.contract_law') }}</label>
                </div>
                @if($errors->has('contract_law'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contract_law') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.contract_law_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('cost_price_analysis') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="cost_price_analysis" value="0">
                    <input class="form-check-input" type="checkbox" name="cost_price_analysis" id="cost_price_analysis" value="1" {{ $individualsApp->cost_price_analysis || old('cost_price_analysis', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="cost_price_analysis">{{ trans('cruds.individualsApp.fields.cost_price_analysis') }}</label>
                </div>
                @if($errors->has('cost_price_analysis'))
                    <div class="invalid-feedback">
                        {{ $errors->first('cost_price_analysis') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.cost_price_analysis_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('delivery_and_last_mile') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="delivery_and_last_mile" value="0">
                    <input class="form-check-input" type="checkbox" name="delivery_and_last_mile" id="delivery_and_last_mile" value="1" {{ $individualsApp->delivery_and_last_mile || old('delivery_and_last_mile', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="delivery_and_last_mile">{{ trans('cruds.individualsApp.fields.delivery_and_last_mile') }}</label>
                </div>
                @if($errors->has('delivery_and_last_mile'))
                    <div class="invalid-feedback">
                        {{ $errors->first('delivery_and_last_mile') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.delivery_and_last_mile_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('digital_technologies') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="digital_technologies" value="0">
                    <input class="form-check-input" type="checkbox" name="digital_technologies" id="digital_technologies" value="1" {{ $individualsApp->digital_technologies || old('digital_technologies', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="digital_technologies">{{ trans('cruds.individualsApp.fields.digital_technologies') }}</label>
                </div>
                @if($errors->has('digital_technologies'))
                    <div class="invalid-feedback">
                        {{ $errors->first('digital_technologies') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.digital_technologies_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('integrated_logistics') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="integrated_logistics" value="0">
                    <input class="form-check-input" type="checkbox" name="integrated_logistics" id="integrated_logistics" value="1" {{ $individualsApp->integrated_logistics || old('integrated_logistics', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="integrated_logistics">{{ trans('cruds.individualsApp.fields.integrated_logistics') }}</label>
                </div>
                @if($errors->has('integrated_logistics'))
                    <div class="invalid-feedback">
                        {{ $errors->first('integrated_logistics') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.integrated_logistics_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('inventory') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="inventory" value="0">
                    <input class="form-check-input" type="checkbox" name="inventory" id="inventory" value="1" {{ $individualsApp->inventory || old('inventory', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="inventory">{{ trans('cruds.individualsApp.fields.inventory') }}</label>
                </div>
                @if($errors->has('inventory'))
                    <div class="invalid-feedback">
                        {{ $errors->first('inventory') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.inventory_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('lean_six_sigma') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="lean_six_sigma" value="0">
                    <input class="form-check-input" type="checkbox" name="lean_six_sigma" id="lean_six_sigma" value="1" {{ $individualsApp->lean_six_sigma || old('lean_six_sigma', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="lean_six_sigma">{{ trans('cruds.individualsApp.fields.lean_six_sigma') }}</label>
                </div>
                @if($errors->has('lean_six_sigma'))
                    <div class="invalid-feedback">
                        {{ $errors->first('lean_six_sigma') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.lean_six_sigma_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('negotiation') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="negotiation" value="0">
                    <input class="form-check-input" type="checkbox" name="negotiation" id="negotiation" value="1" {{ $individualsApp->negotiation || old('negotiation', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="negotiation">{{ trans('cruds.individualsApp.fields.negotiation') }}</label>
                </div>
                @if($errors->has('negotiation'))
                    <div class="invalid-feedback">
                        {{ $errors->first('negotiation') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.negotiation_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('professional_networking') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="professional_networking" value="0">
                    <input class="form-check-input" type="checkbox" name="professional_networking" id="professional_networking" value="1" {{ $individualsApp->professional_networking || old('professional_networking', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="professional_networking">{{ trans('cruds.individualsApp.fields.professional_networking') }}</label>
                </div>
                @if($errors->has('professional_networking'))
                    <div class="invalid-feedback">
                        {{ $errors->first('professional_networking') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.professional_networking_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('shipping_and_freight') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="shipping_and_freight" value="0">
                    <input class="form-check-input" type="checkbox" name="shipping_and_freight" id="shipping_and_freight" value="1" {{ $individualsApp->shipping_and_freight || old('shipping_and_freight', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="shipping_and_freight">{{ trans('cruds.individualsApp.fields.shipping_and_freight') }}</label>
                </div>
                @if($errors->has('shipping_and_freight'))
                    <div class="invalid-feedback">
                        {{ $errors->first('shipping_and_freight') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.shipping_and_freight_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('sourcing') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="sourcing" value="0">
                    <input class="form-check-input" type="checkbox" name="sourcing" id="sourcing" value="1" {{ $individualsApp->sourcing || old('sourcing', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="sourcing">{{ trans('cruds.individualsApp.fields.sourcing') }}</label>
                </div>
                @if($errors->has('sourcing'))
                    <div class="invalid-feedback">
                        {{ $errors->first('sourcing') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.sourcing_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('supply_chain_management') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="supply_chain_management" value="0">
                    <input class="form-check-input" type="checkbox" name="supply_chain_management" id="supply_chain_management" value="1" {{ $individualsApp->supply_chain_management || old('supply_chain_management', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="supply_chain_management">{{ trans('cruds.individualsApp.fields.supply_chain_management') }}</label>
                </div>
                @if($errors->has('supply_chain_management'))
                    <div class="invalid-feedback">
                        {{ $errors->first('supply_chain_management') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.supply_chain_management_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('tender_and_contract') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="tender_and_contract" value="0">
                    <input class="form-check-input" type="checkbox" name="tender_and_contract" id="tender_and_contract" value="1" {{ $individualsApp->tender_and_contract || old('tender_and_contract', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="tender_and_contract">{{ trans('cruds.individualsApp.fields.tender_and_contract') }}</label>
                </div>
                @if($errors->has('tender_and_contract'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tender_and_contract') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.tender_and_contract_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('transportation') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="transportation" value="0">
                    <input class="form-check-input" type="checkbox" name="transportation" id="transportation" value="1" {{ $individualsApp->transportation || old('transportation', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="transportation">{{ trans('cruds.individualsApp.fields.transportation') }}</label>
                </div>
                @if($errors->has('transportation'))
                    <div class="invalid-feedback">
                        {{ $errors->first('transportation') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.transportation_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('warehousing') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="warehousing" value="0">
                    <input class="form-check-input" type="checkbox" name="warehousing" id="warehousing" value="1" {{ $individualsApp->warehousing || old('warehousing', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="warehousing">{{ trans('cruds.individualsApp.fields.warehousing') }}</label>
                </div>
                @if($errors->has('warehousing'))
                    <div class="invalid-feedback">
                        {{ $errors->first('warehousing') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.warehousing_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="others">{{ trans('cruds.individualsApp.fields.others') }}</label>
                <input class="form-control {{ $errors->has('others') ? 'is-invalid' : '' }}" type="text" name="others" id="others" value="{{ old('others', $individualsApp->others) }}">
                @if($errors->has('others'))
                    <div class="invalid-feedback">
                        {{ $errors->first('others') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.others_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="priority_code">{{ trans('cruds.individualsApp.fields.priority_code') }}</label>
                <input class="form-control {{ $errors->has('priority_code') ? 'is-invalid' : '' }}" type="text" name="priority_code" id="priority_code" value="{{ old('priority_code', $individualsApp->priority_code) }}">
                @if($errors->has('priority_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('priority_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.priority_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.individualsApp.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note', $individualsApp->note) }}</textarea>
                @if($errors->has('note'))
                    <div class="invalid-feedback">
                        {{ $errors->first('note') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.individualsApp.fields.note_helper') }}</span>
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