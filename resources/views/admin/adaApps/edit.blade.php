@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.adaApp.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.ada-apps.update", [$adaApp->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="statuses">{{ trans('cruds.adaApp.fields.status') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('statuses') ? 'is-invalid' : '' }}" name="statuses[]" id="statuses" multiple>
                    @foreach($statuses as $id => $status)
                        <option value="{{ $id }}" {{ (in_array($id, old('statuses', [])) || $adaApp->statuses->contains($id)) ? 'selected' : '' }}>{{ $status }}</option>
                    @endforeach
                </select>
                @if($errors->has('statuses'))
                    <div class="invalid-feedback">
                        {{ $errors->first('statuses') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adaApp.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="application_no">{{ trans('cruds.adaApp.fields.application_no') }}</label>
                <input readonly class="form-control {{ $errors->has('application_no') ? 'is-invalid' : '' }}" type="text" name="application_no" id="application_no" value="{{ old('application_no', $adaApp->application_no) }}" required>
                @if($errors->has('application_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('application_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adaApp.fields.application_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="award_name">{{ trans('cruds.adaApp.fields.award_name') }}</label>
                <input class="form-control {{ $errors->has('award_name') ? 'is-invalid' : '' }}" type="text" name="award_name" id="award_name" value="{{ old('award_name', $adaApp->award_name) }}">
                @if($errors->has('award_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('award_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adaApp.fields.award_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="hear_about_us">{{ trans('cruds.adaApp.fields.hear_about_us') }}</label>
                <input class="form-control {{ $errors->has('hear_about_us') ? 'is-invalid' : '' }}" type="text" name="hear_about_us" id="hear_about_us" value="{{ old('hear_about_us', $adaApp->hear_about_us) }}">
                @if($errors->has('hear_about_us'))
                    <div class="invalid-feedback">
                        {{ $errors->first('hear_about_us') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adaApp.fields.hear_about_us_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="title">{{ trans('cruds.adaApp.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $adaApp->title) }}">
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adaApp.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name">{{ trans('cruds.adaApp.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $adaApp->name) }}">
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adaApp.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="id_no">{{ trans('cruds.adaApp.fields.id_no') }}</label>
                <input class="form-control {{ $errors->has('id_no') ? 'is-invalid' : '' }}" type="text" name="id_no" id="id_no" value="{{ old('id_no', $adaApp->id_no) }}">
                @if($errors->has('id_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('id_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adaApp.fields.id_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="gender">{{ trans('cruds.adaApp.fields.gender') }}</label>
                <input class="form-control {{ $errors->has('gender') ? 'is-invalid' : '' }}" type="text" name="gender" id="gender" value="{{ old('gender', $adaApp->gender) }}">
                @if($errors->has('gender'))
                    <div class="invalid-feedback">
                        {{ $errors->first('gender') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adaApp.fields.gender_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="dob">{{ trans('cruds.adaApp.fields.dob') }}</label>
                <input class="form-control date {{ $errors->has('dob') ? 'is-invalid' : '' }}" type="text" name="dob" id="dob" value="{{ old('dob', $adaApp->dob) }}">
                @if($errors->has('dob'))
                    <div class="invalid-feedback">
                        {{ $errors->first('dob') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adaApp.fields.dob_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="nationality">{{ trans('cruds.adaApp.fields.nationality') }}</label>
                <input class="form-control {{ $errors->has('nationality') ? 'is-invalid' : '' }}" type="text" name="nationality" id="nationality" value="{{ old('nationality', $adaApp->nationality) }}">
                @if($errors->has('nationality'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nationality') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adaApp.fields.nationality_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="address">{{ trans('cruds.adaApp.fields.address') }}</label>
                <input class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" type="text" name="address" id="address" value="{{ old('address', $adaApp->address) }}">
                @if($errors->has('address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adaApp.fields.address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="country">{{ trans('cruds.adaApp.fields.country') }}</label>
                <input class="form-control {{ $errors->has('country') ? 'is-invalid' : '' }}" type="text" name="country" id="country" value="{{ old('country', $adaApp->country) }}">
                @if($errors->has('country'))
                    <div class="invalid-feedback">
                        {{ $errors->first('country') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adaApp.fields.country_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="postal_code">{{ trans('cruds.adaApp.fields.postal_code') }}</label>
                <input class="form-control {{ $errors->has('postal_code') ? 'is-invalid' : '' }}" type="number" name="postal_code" id="postal_code" value="{{ old('postal_code', $adaApp->postal_code) }}" step="1">
                @if($errors->has('postal_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('postal_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adaApp.fields.postal_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contact_no">{{ trans('cruds.adaApp.fields.contact_no') }}</label>
                <input class="form-control {{ $errors->has('contact_no') ? 'is-invalid' : '' }}" type="text" name="contact_no" id="contact_no" value="{{ old('contact_no', $adaApp->contact_no) }}">
                @if($errors->has('contact_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adaApp.fields.contact_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.adaApp.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email', $adaApp->email) }}">
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adaApp.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_name_1">{{ trans('cruds.adaApp.fields.company_name_1') }}</label>
                <input class="form-control {{ $errors->has('company_name_1') ? 'is-invalid' : '' }}" type="text" name="company_name_1" id="company_name_1" value="{{ old('company_name_1', $adaApp->company_name_1) }}">
                @if($errors->has('company_name_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_name_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adaApp.fields.company_name_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="designation_1">{{ trans('cruds.adaApp.fields.designation_1') }}</label>
                <input class="form-control {{ $errors->has('designation_1') ? 'is-invalid' : '' }}" type="text" name="designation_1" id="designation_1" value="{{ old('designation_1', $adaApp->designation_1) }}">
                @if($errors->has('designation_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('designation_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adaApp.fields.designation_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="duration_1">{{ trans('cruds.adaApp.fields.duration_1') }}</label>
                <input class="form-control {{ $errors->has('duration_1') ? 'is-invalid' : '' }}" type="number" name="duration_1" id="duration_1" value="{{ old('duration_1', $adaApp->duration_1) }}" step="0.1">
                @if($errors->has('duration_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('duration_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adaApp.fields.duration_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="country_1">{{ trans('cruds.adaApp.fields.country_1') }}</label>
                <input class="form-control {{ $errors->has('country_1') ? 'is-invalid' : '' }}" type="text" name="country_1" id="country_1" value="{{ old('country_1', $adaApp->country_1) }}">
                @if($errors->has('country_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('country_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adaApp.fields.country_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_name_2">{{ trans('cruds.adaApp.fields.company_name_2') }}</label>
                <input class="form-control {{ $errors->has('company_name_2') ? 'is-invalid' : '' }}" type="text" name="company_name_2" id="company_name_2" value="{{ old('company_name_2', $adaApp->company_name_2) }}">
                @if($errors->has('company_name_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_name_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adaApp.fields.company_name_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="designation_2">{{ trans('cruds.adaApp.fields.designation_2') }}</label>
                <input class="form-control {{ $errors->has('designation_2') ? 'is-invalid' : '' }}" type="text" name="designation_2" id="designation_2" value="{{ old('designation_2', $adaApp->designation_2) }}">
                @if($errors->has('designation_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('designation_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adaApp.fields.designation_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="duration_2">{{ trans('cruds.adaApp.fields.duration_2') }}</label>
                <input class="form-control {{ $errors->has('duration_2') ? 'is-invalid' : '' }}" type="number" name="duration_2" id="duration_2" value="{{ old('duration_2', $adaApp->duration_2) }}" step="0.1">
                @if($errors->has('duration_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('duration_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adaApp.fields.duration_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="country_2">{{ trans('cruds.adaApp.fields.country_2') }}</label>
                <input class="form-control {{ $errors->has('country_2') ? 'is-invalid' : '' }}" type="text" name="country_2" id="country_2" value="{{ old('country_2', $adaApp->country_2) }}">
                @if($errors->has('country_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('country_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adaApp.fields.country_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_name_3">{{ trans('cruds.adaApp.fields.company_name_3') }}</label>
                <input class="form-control {{ $errors->has('company_name_3') ? 'is-invalid' : '' }}" type="text" name="company_name_3" id="company_name_3" value="{{ old('company_name_3', $adaApp->company_name_3) }}">
                @if($errors->has('company_name_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_name_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adaApp.fields.company_name_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="designation_3">{{ trans('cruds.adaApp.fields.designation_3') }}</label>
                <input class="form-control {{ $errors->has('designation_3') ? 'is-invalid' : '' }}" type="text" name="designation_3" id="designation_3" value="{{ old('designation_3', $adaApp->designation_3) }}">
                @if($errors->has('designation_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('designation_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adaApp.fields.designation_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="duration_3">{{ trans('cruds.adaApp.fields.duration_3') }}</label>
                <input class="form-control {{ $errors->has('duration_3') ? 'is-invalid' : '' }}" type="number" name="duration_3" id="duration_3" value="{{ old('duration_3', $adaApp->duration_3) }}" step="0.1">
                @if($errors->has('duration_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('duration_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adaApp.fields.duration_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="country_3">{{ trans('cruds.adaApp.fields.country_3') }}</label>
                <input class="form-control {{ $errors->has('country_3') ? 'is-invalid' : '' }}" type="text" name="country_3" id="country_3" value="{{ old('country_3', $adaApp->country_3) }}">
                @if($errors->has('country_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('country_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adaApp.fields.country_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="programme_1">{{ trans('cruds.adaApp.fields.programme_1') }}</label>
                <input class="form-control {{ $errors->has('programme_1') ? 'is-invalid' : '' }}" type="text" name="programme_1" id="programme_1" value="{{ old('programme_1', $adaApp->programme_1) }}">
                @if($errors->has('programme_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('programme_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adaApp.fields.programme_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="certificate_no_1">{{ trans('cruds.adaApp.fields.certificate_no_1') }}</label>
                <input class="form-control {{ $errors->has('certificate_no_1') ? 'is-invalid' : '' }}" type="text" name="certificate_no_1" id="certificate_no_1" value="{{ old('certificate_no_1', $adaApp->certificate_no_1) }}">
                @if($errors->has('certificate_no_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('certificate_no_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adaApp.fields.certificate_no_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date_awarded_1">{{ trans('cruds.adaApp.fields.date_awarded_1') }}</label>
                <input class="form-control date {{ $errors->has('date_awarded_1') ? 'is-invalid' : '' }}" type="text" name="date_awarded_1" id="date_awarded_1" value="{{ old('date_awarded_1', $adaApp->date_awarded_1) }}">
                @if($errors->has('date_awarded_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_awarded_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adaApp.fields.date_awarded_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="certificate_1">{{ trans('cruds.adaApp.fields.certificate_1') }}</label>
                <input class="form-control {{ $errors->has('certificate_1') ? 'is-invalid' : '' }}" type="text" name="certificate_1" id="certificate_1" value="{{ old('certificate_1', $adaApp->certificate_1) }}">
                @if($errors->has('certificate_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('certificate_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adaApp.fields.certificate_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="programme_2">{{ trans('cruds.adaApp.fields.programme_2') }}</label>
                <input class="form-control {{ $errors->has('programme_2') ? 'is-invalid' : '' }}" type="text" name="programme_2" id="programme_2" value="{{ old('programme_2', $adaApp->programme_2) }}">
                @if($errors->has('programme_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('programme_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adaApp.fields.programme_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="certificate_no_2">{{ trans('cruds.adaApp.fields.certificate_no_2') }}</label>
                <input class="form-control {{ $errors->has('certificate_no_2') ? 'is-invalid' : '' }}" type="text" name="certificate_no_2" id="certificate_no_2" value="{{ old('certificate_no_2', $adaApp->certificate_no_2) }}">
                @if($errors->has('certificate_no_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('certificate_no_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adaApp.fields.certificate_no_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date_awarded_2">{{ trans('cruds.adaApp.fields.date_awarded_2') }}</label>
                <input class="form-control date {{ $errors->has('date_awarded_2') ? 'is-invalid' : '' }}" type="text" name="date_awarded_2" id="date_awarded_2" value="{{ old('date_awarded_2', $adaApp->date_awarded_2) }}">
                @if($errors->has('date_awarded_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_awarded_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adaApp.fields.date_awarded_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="certificate_2">{{ trans('cruds.adaApp.fields.certificate_2') }}</label>
                <input class="form-control {{ $errors->has('certificate_2') ? 'is-invalid' : '' }}" type="text" name="certificate_2" id="certificate_2" value="{{ old('certificate_2', $adaApp->certificate_2) }}">
                @if($errors->has('certificate_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('certificate_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adaApp.fields.certificate_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="programme_3">{{ trans('cruds.adaApp.fields.programme_3') }}</label>
                <input class="form-control {{ $errors->has('programme_3') ? 'is-invalid' : '' }}" type="text" name="programme_3" id="programme_3" value="{{ old('programme_3', $adaApp->programme_3) }}">
                @if($errors->has('programme_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('programme_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adaApp.fields.programme_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="certificate_no_3">{{ trans('cruds.adaApp.fields.certificate_no_3') }}</label>
                <input class="form-control {{ $errors->has('certificate_no_3') ? 'is-invalid' : '' }}" type="text" name="certificate_no_3" id="certificate_no_3" value="{{ old('certificate_no_3', $adaApp->certificate_no_3) }}">
                @if($errors->has('certificate_no_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('certificate_no_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adaApp.fields.certificate_no_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date_awarded_3">{{ trans('cruds.adaApp.fields.date_awarded_3') }}</label>
                <input class="form-control date {{ $errors->has('date_awarded_3') ? 'is-invalid' : '' }}" type="text" name="date_awarded_3" id="date_awarded_3" value="{{ old('date_awarded_3', $adaApp->date_awarded_3) }}">
                @if($errors->has('date_awarded_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_awarded_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adaApp.fields.date_awarded_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="certificate_3">{{ trans('cruds.adaApp.fields.certificate_3') }}</label>
                <input class="form-control {{ $errors->has('certificate_3') ? 'is-invalid' : '' }}" type="text" name="certificate_3" id="certificate_3" value="{{ old('certificate_3', $adaApp->certificate_3) }}">
                @if($errors->has('certificate_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('certificate_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adaApp.fields.certificate_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.adaApp.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note', $adaApp->note) }}</textarea>
                @if($errors->has('note'))
                    <div class="invalid-feedback">
                        {{ $errors->first('note') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.adaApp.fields.note_helper') }}</span>
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