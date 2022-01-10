@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.admissionsEdp.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.admissions-edps.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
            <label for="statuses">{{ trans('cruds.admissionsEdp.fields.status') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('statuses') ? 'is-invalid' : '' }}" name="statuses[]" id="statuses" multiple>
                    @foreach($statuses as $id => $status)
                        <option value="{{ $id }}" {{ in_array($id, old('statuses', [])) ? 'selected' : '' }}>{{ $status }}</option>
                    @endforeach
                </select>
                @if($errors->has('statuses'))
                    <div class="invalid-feedback">
                        {{ $errors->first('statuses') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.admissionsEdp.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="application_no_id">{{ trans('cruds.admissionsEdp.fields.application_no') }}</label>
                <select class="form-control select2 {{ $errors->has('application_no') ? 'is-invalid' : '' }}" name="application_no_id" id="application_no_id">
                    @foreach($application_nos as $id => $entry)
                        <option value="{{ $id }}" {{ old('application_no_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('application_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('application_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.admissionsEdp.fields.application_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="edp_title_id">{{ trans('cruds.admissionsEdp.fields.edp_title') }}</label>
                <select onchange="updateEDPFees()" class="form-control select2 {{ $errors->has('edp_title') ? 'is-invalid' : '' }}" name="edp_title_id" id="edp_title_id" required>
                    @foreach($edp_titles as $id => $entry)
                        <option value="{{ $id }}" {{ old('edp_title_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('edp_title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('edp_title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.admissionsEdp.fields.edp_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="start_date">{{ trans('cruds.admissionsEdp.fields.start_date') }}</label>
                <input class="form-control date {{ $errors->has('start_date') ? 'is-invalid' : '' }}" type="text" name="start_date" id="start_date" value="{{ old('start_date') }}">
                @if($errors->has('start_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('start_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.admissionsEdp.fields.start_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="end_date">{{ trans('cruds.admissionsEdp.fields.end_date') }}</label>
                <input class="form-control date {{ $errors->has('end_date') ? 'is-invalid' : '' }}" type="text" name="end_date" id="end_date" value="{{ old('end_date') }}">
                @if($errors->has('end_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('end_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.admissionsEdp.fields.end_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="facilitator_name_id">{{ trans('cruds.admissionsEdp.fields.facilitator_name') }}</label>
                <select class="form-control select2 {{ $errors->has('facilitator_name') ? 'is-invalid' : '' }}" name="facilitator_name_id" id="facilitator_name_id">
                    @foreach($facilitator_names as $id => $entry)
                        <option value="{{ $id }}" {{ old('facilitator_name_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('facilitator_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('facilitator_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.admissionsEdp.fields.facilitator_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="venue_id">{{ trans('cruds.admissionsEdp.fields.venue') }}</label>
                <select class="form-control select2 {{ $errors->has('venue') ? 'is-invalid' : '' }}" name="venue_id" id="venue_id">
                    @foreach($venues as $id => $entry)
                        <option value="{{ $id }}" {{ old('venue_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('venue'))
                    <div class="invalid-feedback">
                        {{ $errors->first('venue') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.admissionsEdp.fields.venue_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="admission_no">{{ trans('cruds.admissionsEdp.fields.admission_no') }}</label>
                <input class="form-control {{ $errors->has('admission_no') ? 'is-invalid' : '' }}" type="text" name="admission_no" id="admission_no" value="{{ old('admission_no', '') }}" required>
                @if($errors->has('admission_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('admission_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.admissionsEdp.fields.admission_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="participant_name_id">{{ trans('cruds.admissionsEdp.fields.participant_name') }}</label>
                <select class="form-control select2 {{ $errors->has('participant_name') ? 'is-invalid' : '' }}" name="participant_name_id" id="participant_name_id">
                    @foreach($participant_names as $id => $entry)
                        <option value="{{ $id }}" {{ old('participant_name_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('participant_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('participant_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.admissionsEdp.fields.participant_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.admissionsEdp.fields.company_sponsored') }}</label>
                @foreach(App\Models\AdmissionsEdp::COMPANY_SPONSORED_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('company_sponsored') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="company_sponsored_{{ $key }}" name="company_sponsored" value="{{ $key }}" {{ old('company_sponsored', 'Yes') === (string) $key ? 'checked' : '' }} required>
                        <label class="form-check-label" for="company_sponsored_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('company_sponsored'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_sponsored') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.admissionsEdp.fields.company_sponsored_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="officer_name_id">{{ trans('cruds.admissionsEdp.fields.officer_name') }}</label>
                <select class="form-control select2 {{ $errors->has('officer_name') ? 'is-invalid' : '' }}" name="officer_name_id" id="officer_name_id">
                    @foreach($officer_names as $id => $entry)
                        <option value="{{ $id }}" {{ old('officer_name_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('officer_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('officer_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.admissionsEdp.fields.officer_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="total_fees">{{ trans('cruds.admissionsEdp.fields.total_fees') }}</label>
                <input onkeyup="updateOutstanding()" class="form-control {{ $errors->has('total_fees') ? 'is-invalid' : '' }}" type="number" name="total_fees" id="total_fees" value="{{ old('total_fees', '0') }}" step="0.01">
                @if($errors->has('total_fees'))
                    <div class="invalid-feedback">
                        {{ $errors->first('total_fees') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.admissionsEdp.fields.total_fees_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="amount_paid">{{ trans('cruds.admissionsEdp.fields.amount_paid') }}</label>
                <input readonly class="form-control {{ $errors->has('amount_paid') ? 'is-invalid' : '' }}" type="number" name="amount_paid" id="amount_paid" value="{{ old('amount_paid', '0') }}" step="0.01">
                @if($errors->has('amount_paid'))
                    <div class="invalid-feedback">
                        {{ $errors->first('amount_paid') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.admissionsEdp.fields.amount_paid_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="outstanding_balance">{{ trans('cruds.admissionsEdp.fields.outstanding_balance') }}</label>
                <input readonly class="form-control {{ $errors->has('outstanding_balance') ? 'is-invalid' : '' }}" type="number" name="outstanding_balance" id="outstanding_balance" value="{{ old('outstanding_balance', '0') }}" step="0.01">
                @if($errors->has('outstanding_balance'))
                    <div class="invalid-feedback">
                        {{ $errors->first('outstanding_balance') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.admissionsEdp.fields.outstanding_balance_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.admissionsEdp.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note') }}</textarea>
                @if($errors->has('note'))
                    <div class="invalid-feedback">
                        {{ $errors->first('note') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.admissionsEdp.fields.note_helper') }}</span>
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
@section('scripts')
<script>
    $('#application_no_id').change(function(){
        var application_no = $("#application_no_id option:selected").text();
        $("#admission_no").val(application_no);
    });
    function updateEDPFees(){
        
        var programme_fee = 0;

        var edp_title_id = $("#edp_title_id").val();
        if(edp_title_id){
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            var programmeurl = '{{ route("admin.admissions-edps.getEDPFees", ":id") }}';
            url = programmeurl.replace(":id",edp_title_id);           

            $.ajax({
                url: url,
                type: 'get',
                dataType: 'JSON',
                success: function(data) {
                    if(data.edp_fees){
                        edp_fees = data.edp_fees;
                    }
                    
                    $("#total_fees").val(edp_fees);
                    var amount_paid = $("#amount_paid").val();
                    var outstanding_balance = parseFloat(edp_fees).toFixed(2) - parseFloat(amount_paid).toFixed(2);
                    $("#outstanding_balance").val(outstanding_balance.toFixed(2));
                }
            });
        } else{
            $("#total_fees").val(0);
            var amount_paid = $("#amount_paid").val();
            var outstanding_balance = parseFloat(edp_fees).toFixed(2) - parseFloat(amount_paid).toFixed(2);
            $("#outstanding_balance").val(outstanding_balance.toFixed(2));

        }

        $('#start_date').prop('disabled', false);
    }

    function updateOutstanding(){
        var edp_fees = $("#total_fees").val();
        var amount_paid = $("#amount_paid").val();
        var outstanding_balance = parseFloat(edp_fees).toFixed(2) - parseFloat(amount_paid).toFixed(2);
        $("#outstanding_balance").val(outstanding_balance.toFixed(2));
    }
</script>
@endsection
