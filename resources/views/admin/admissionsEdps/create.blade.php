@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.admissionsEdp.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.admissions-edps.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-8">
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
                    <div class="row">
                        <div class="col-md-6">
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
                        </div>
                        <div class="col-md-6">
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
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
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
                        </div>
                        <div class="col-md-6">
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
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
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
                        </div>
                        <div class="col-md-6">
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
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
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
                        </div>
                        <div class="col-md-6">
                            <!-- Participant Name with ID -->
                            <div class="form-group">
                                <label class="required" for="participant_name_id">{{ trans('cruds.admissionsEdp.fields.participant_name') }}</label>
                                <select class="form-control select2 {{ $errors->has('participant_name') ? 'is-invalid' : '' }}" name="participant_name_id" id="participant_name_id" required>
                                    <option value="">Please select</option>
                                    @foreach($participant_names as $participant_name)
                                        <option value="{{ $participant_name->id }}" {{ old('participant_name_id') == $participant_name->id ? 'selected' : '' }}>{{ $participant_name->name }} | {{ $participant_name->id_no }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('participant_name_id'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('participant_name_id') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.admissionsEdp.fields.participant_name_helper') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
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
                        </div>
                        <div class="col-md-6">
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
                        </div>
                        <div class="row">
                            <div class="col-md-4">
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
                            </div>
                            <div class="col-md-4">
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
                            </div>
                            <div class="col-md-4">
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
                            </div>
                        </div>
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
                </div>
                <!-- Application Details -->
                <div class="col-md-4">
                    <table class="table table-bordered table-striped">
                        <tbody id="table_message">
                            <tr class="text-center">
                                <th colspan=2>
                                    Applicantion Details
                                </th>
                            </tr>
                            <tr>
                                <td colspan=2>
                                    Select application no. to see the application details.
                                </td>
                            </tr>
                        </tbody>
                        <tbody id="application_details" style="display:none;">
                            <tr class="text-center">
                                <th colspan=2>
                                    Applicantion Details
                                </th>
                            </tr>
                            <tr>
                                <th width="25%">
                                    Status
                                </th>
                                <td id="status">
                                    
                                </td>
                            </tr>
                            <tr>
                                <th width="25%">
                                    Application No.
                                </th>
                                <td id="application_no">
                                    
                                </td>
                            </tr>
                            <tr>
                                <th width="25%">
                                    Sponsorship
                                </th>
                                <td id="sponsorship">
                                
                                </td>
                            </tr>
                            <tr>
                                <th width="25%"> 
                                    Officer Name
                                </th>
                                <td id="officer_name">
                                    
                                </td>
                            </tr>
                            <tr>
                                <th width="25%"> 
                                    Programme
                                </th>
                                <td id="programme">
                                    
                                </td>
                            </tr>
                            <tr>
                                <th width="25%"> 
                                    Commencement
                                </th>
                                <td id="commencement">
                                    
                                </td>
                            </tr>
                            <tr>
                                <th width="25%"> 
                                    No. of Participants
                                </th>
                                <td id="no_participants">
                                    
                                </td>
                            </tr>    
                        </tbody>
                        <!-- Participant Loop -->
                        <tbody id="participants">
                            
                        </tbody>
                    </table>
                </div>
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

        //Loading Application details

        var id = $(this).val();
        if(id != ""){
            var url = '{{ route("admin.admissions-edps.getApplicationDetails",":id") }}';
        url = url.replace(":id",id);

        $.ajax({
            url: url,
            type: 'get',
            dataType: 'json',
            success: function(response){
                if(response != null){
                    var statuses = "";
                    $(response.statuses).each(function(index, value){
                        statuses += value.status_name + " ";
                    });                
                    $('#status').html(statuses);
                    $('#application_no').html(response.application_no);    
                    $('#sponsorship').html(response.sponsorship);
                    $('#officer_name').html(response.officer_name);
                    $('#programme').html(response.programme);    
                    $('#commencement').html(response.commencement);   
                    

                    var participants = "";
                    if(response.no_participants === "" || response.participants == null){
                        participants = 1;
                    }else{
                        participants = Number(response.no_participants);
                    }
                    $('#no_participants').html(participants);
                    var participants_html = "";
                    x = [];

                    for( var i in response ) {
                        x[i] = response[i];
                    }

                    if(participants > 0){
                        for (let i = 1; i <= participants; i++) {   
                            participants_html += '<tr class="text-center"><th colspan=2>' + i + '. Participant</th>';
                            participants_html += '</tr><tr><th>Name</th><td>'+ x['participant_name_'+ i] +'</td></tr>'
                            participants_html += '<tr><th>ID No.</th><td>' + x['id_no_'+ i] + '</td></tr>';
                            participants_html += '<tr><th>Dietary</th><td>' + x['special_dietary_'+ i] + '</td></tr>';
                        }
                        $('#participants').html(participants_html);
                        $('#participants').show(); 
                    }else{
                        participants_html = "";
                        $('#participants').hide();
                    }
                    $('#table_message').hide();
                    $('#application_details').show();        
                }
            }
        });
        }else{
            $('#application_details').hide();
            $('#participants').hide();
            $('#table_message').show();  
        }
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
