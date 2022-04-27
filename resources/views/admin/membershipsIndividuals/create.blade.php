@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.membershipsIndividual.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.memberships-individuals.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="statuses">{{ trans('cruds.membershipsIndividual.fields.status') }}</label>
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
                        <span class="help-block">{{ trans('cruds.membershipsIndividual.fields.status_helper') }}</span>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="application_no_id">{{ trans('cruds.membershipsIndividual.fields.application_no') }}</label>
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
                                <span class="help-block">{{ trans('cruds.membershipsIndividual.fields.application_no_helper') }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="required" for="member_class_id">{{ trans('cruds.membershipsIndividual.fields.member_class') }}</label>
                                <select class="form-control select2 {{ $errors->has('member_class') ? 'is-invalid' : '' }}" name="member_class_id" id="member_class_id" required>
                                    @foreach($member_classes as $id => $entry)
                                        <option value="{{ $id }}" {{ old('member_class_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('member_class'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('member_class') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.membershipsIndividual.fields.member_class_helper') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="valid_from">{{ trans('cruds.membershipsIndividual.fields.valid_from') }}</label>
                                <input class="form-control date {{ $errors->has('valid_from') ? 'is-invalid' : '' }}" type="text" name="valid_from" id="valid_from" value="{{ old('valid_from') }}">
                                @if($errors->has('valid_from'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('valid_from') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.membershipsIndividual.fields.valid_from_helper') }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="valid_till">{{ trans('cruds.membershipsIndividual.fields.valid_till') }}</label>
                                <input class="form-control date {{ $errors->has('valid_till') ? 'is-invalid' : '' }}" type="text" name="valid_till" id="valid_till" value="{{ old('valid_till') }}">
                                @if($errors->has('valid_till'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('valid_till') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.membershipsIndividual.fields.valid_till_helper') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="required" for="member_no">{{ trans('cruds.membershipsIndividual.fields.member_no') }}</label>
                                <input class="form-control {{ $errors->has('member_no') ? 'is-invalid' : '' }}" type="text" name="member_no" id="member_no" value="{{ old('member_no', '') }}" required>
                                @if($errors->has('member_no'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('member_no') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.membershipsIndividual.fields.member_no_helper') }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="required" for="member_name_id">{{ trans('cruds.membershipsIndividual.fields.member_name') }}</label>
                                <select class="form-control select2 {{ $errors->has('member_name') ? 'is-invalid' : '' }}" name="member_name_id" id="member_name_id" required>
                                    <option value=""> Select Member</option>
                                    @foreach($member_names as $member_name)
                                        <option value="{{ $member_name->id }}" {{ old('member_name_id') == $member_name->id ? 'selected' : '' }}>  {{ $member_name->name }} | {{ $member_name->id_no }} </option>
                                    @endforeach
                                </select>
                                @if($errors->has('member_name'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('member_name') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.membershipsIndividual.fields.member_name_helper') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="training_credits">{{ trans('cruds.membershipsIndividual.fields.training_credits') }}</label>
                                <input class="form-control {{ $errors->has('training_credits') ? 'is-invalid' : '' }}" type="number" name="training_credits" id="training_credits" value="{{ old('training_credits', '') }}" step="0.01">
                                @if($errors->has('training_credits'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('training_credits') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.membershipsIndividual.fields.training_credits_helper') }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="support_funds">{{ trans('cruds.membershipsIndividual.fields.support_funds') }}</label>
                                <input class="form-control {{ $errors->has('support_funds') ? 'is-invalid' : '' }}" type="number" name="support_funds" id="support_funds" value="{{ old('support_funds', '') }}" step="0.01">
                                @if($errors->has('support_funds'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('support_funds') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.membershipsIndividual.fields.support_funds_helper') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="admission_date">{{ trans('cruds.membershipsIndividual.fields.admission_date') }}</label>
                                <input class="form-control date {{ $errors->has('admission_date') ? 'is-invalid' : '' }}" type="text" name="admission_date" id="admission_date" value="{{ old('admission_date') }}">
                                @if($errors->has('admission_date'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('admission_date') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.membershipsIndividual.fields.admission_date_helper') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="note">{{ trans('cruds.membershipsIndividual.fields.note') }}</label>
                        <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note') }}</textarea>
                        @if($errors->has('note'))
                            <div class="invalid-feedback">
                                {{ $errors->first('note') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.membershipsIndividual.fields.note_helper') }}</span>
                    </div>
                </div>
                
                <!-- Application Details -->
                <div class="col-md-4">
                    <table class="table table-bordered table-striped">
                        <tbody id="table_message">
                            <tr class="text-center">
                                <th colspan=2>
                                    Application Details
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
                                    Application Details
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
                                    Member Class
                                </th>
                                <td id="member_class">
                                
                                </td>
                            </tr>
                            <tr>
                                <th width="25%"> 
                                    Applicant Name
                                </th>
                                <td id="name">
                                    
                                </td>
                            </tr>
                            <tr>
                                <th width="25%"> 
                                    Applicant ID No.
                                </th>
                                <td id="id_no">
                                    
                                </td>
                            </tr>   
                        </tbody>    
                    </table>
                </div>
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
@parent
<script>
$('#application_no_id').change(function(){
        var application_no = $("#application_no_id option:selected").text();
        $("#member_no").val(application_no);
        //getFundAmounts(application_no);

        //Loading Application details

        var id = $(this).val();
        if(id != ""){
            var url = '{{ route("admin.memberships-individuals.getApplicationDetails",":id") }}';
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
                    $('#member_class').html(response.member_class);
                    $('#name').html(response.name);
                    $('#id_no').html(response.id_no);    
                    $('#table_message').hide();
                    $('#application_details').show();        
                }
            }
        });
        }else{
            $('#application_details').hide();
            $('#table_message').show();  
        }
    });

    function getFundAmounts()
    {

    }
</script>
@endsection