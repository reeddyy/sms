@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.enrolmentsQualification.title_singular') }}
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-md-8">
                <form method="POST" action="{{ route("admin.enrolments-qualifications.store") }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                    <label for="statuses">{{ trans('cruds.enrolmentsQualification.fields.status') }}</label>
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
                        <span class="help-block">{{ trans('cruds.enrolmentsQualification.fields.status_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label class="required" for="application_no_id">{{ trans('cruds.enrolmentsQualification.fields.application_no') }}</label>
                        <select class="form-control select2 {{ $errors->has('application_no') ? 'is-invalid' : '' }}" name="application_no_id" id="application_no_id" required>
                            @foreach($application_nos as $id => $entry)
                                <option value="{{ $id }}" {{ old('application_no_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('application_no'))
                            <div class="invalid-feedback">
                                {{ $errors->first('application_no') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.enrolmentsQualification.fields.application_no_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label class="required" for="course_title_id">{{ trans('cruds.enrolmentsQualification.fields.course_title') }}</label>
                        <select onchange="updateCourseFees()" class="form-control select2 {{ $errors->has('course_title') ? 'is-invalid' : '' }}" name="course_title_id" id="course_title_id" required>
                            @foreach($course_titles as $id => $entry)
                                <option value="{{ $id }}" {{ old('course_title_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('course_title'))
                            <div class="invalid-feedback">
                                {{ $errors->first('course_title') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.enrolmentsQualification.fields.course_title_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="start_date">{{ trans('cruds.enrolmentsQualification.fields.start_date') }}</label>
                        <input class="form-control date {{ $errors->has('start_date') ? 'is-invalid' : '' }}" type="text" name="start_date" id="start_date" value="{{ old('start_date') }}">
                        @if($errors->has('start_date'))
                            <div class="invalid-feedback">
                                {{ $errors->first('start_date') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.enrolmentsQualification.fields.start_date_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="end_date">{{ trans('cruds.enrolmentsQualification.fields.end_date') }}</label>
                        <input class="form-control date {{ $errors->has('end_date') ? 'is-invalid' : '' }}" type="text" name="end_date" id="end_date" value="{{ old('end_date') }}">
                        @if($errors->has('end_date'))
                            <div class="invalid-feedback">
                                {{ $errors->first('end_date') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.enrolmentsQualification.fields.end_date_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="classes">{{ trans('cruds.enrolmentsQualification.fields.classes') }}</label>
                        <div style="padding-bottom: 4px">
                            <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                            <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                        </div>
                        <select class="form-control select2 {{ $errors->has('classes') ? 'is-invalid' : '' }}" name="classes[]" id="classes" multiple>
                            @foreach($classes as $id => $class)
                                <option value="{{ $id }}" {{ in_array($id, old('classes', [])) ? 'selected' : '' }}>{{ $class }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('classes'))
                            <div class="invalid-feedback">
                                {{ $errors->first('classes') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.enrolmentsQualification.fields.classes_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label class="required" for="enrolment_no">{{ trans('cruds.enrolmentsQualification.fields.enrolment_no') }}</label>
                        <input class="form-control {{ $errors->has('enrolment_no') ? 'is-invalid' : '' }}" type="text" name="enrolment_no" id="enrolment_no" value="{{ old('enrolment_no', '') }}" required>
                        @if($errors->has('enrolment_no'))
                            <div class="invalid-feedback">
                                {{ $errors->first('enrolment_no') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.enrolmentsQualification.fields.enrolment_no_helper') }}</span>
                    </div>
                    <!-- Student Name with ID -->
                    <div class="form-group">
                        <label class="required" for="student_name_id">{{ trans('cruds.enrolmentsQualification.fields.student_name') }}</label>
                        <select class="form-control select2 {{ $errors->has('student_name') ? 'is-invalid' : '' }}" name="student_name_id" id="student_name_id" required>
                            <option value="">Please select student</option>
                            @foreach($students as $student)
                                <option value="{{ $student->id }}" {{ old('student_name_id') == $student->id ? 'selected' : '' }}>{{ $student->name }} | {{ $student->id_no }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('student_name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('student_name') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.enrolmentsQualification.fields.student_name_helper') }}</span>
                    </div>

                    <div class="form-group">
                        <label class="required">{{ trans('cruds.enrolmentsQualification.fields.company_sponsored') }}</label>
                        @foreach(App\Models\EnrolmentsQualification::COMPANY_SPONSORED_RADIO as $key => $label)
                            <div class="form-check {{ $errors->has('company_sponsored') ? 'is-invalid' : '' }}">
                                <input class="form-check-input" type="radio" id="company_sponsored_{{ $key }}" name="company_sponsored" value="{{ $key }}" {{ old('company_sponsored', 'No') === (string) $key ? 'checked' : '' }} required>
                                <label class="form-check-label" for="company_sponsored_{{ $key }}">{{ $label }}</label>
                            </div>
                        @endforeach
                        @if($errors->has('company_sponsored'))
                            <div class="invalid-feedback">
                                {{ $errors->first('company_sponsored') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.enrolmentsQualification.fields.company_sponsored_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="officer_name_id">{{ trans('cruds.enrolmentsQualification.fields.officer_name') }}</label>
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
                        <span class="help-block">{{ trans('cruds.enrolmentsQualification.fields.officer_name_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="total_fees">{{ trans('cruds.enrolmentsQualification.fields.total_fees') }}</label>
                        <input onkeyup="updateOutstanding()" class="form-control {{ $errors->has('total_fees') ? 'is-invalid' : '' }}" type="number" name="total_fees" id="total_fees" value="{{ old('total_fees', '0') }}" step="0.01">
                        @if($errors->has('total_fees'))
                            <div class="invalid-feedback">
                                {{ $errors->first('total_fees') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.enrolmentsQualification.fields.total_fees_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="amount_paid">{{ trans('cruds.enrolmentsQualification.fields.amount_paid') }}</label>
                        <input readonly="true" class="form-control {{ $errors->has('amount_paid') ? 'is-invalid' : '' }}" type="number" name="amount_paid" id="amount_paid" value="{{ old('amount_paid', '0') }}" step="0.01">
                        @if($errors->has('amount_paid'))
                            <div class="invalid-feedback">
                                {{ $errors->first('amount_paid') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.enrolmentsQualification.fields.amount_paid_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="outstanding_balance">{{ trans('cruds.enrolmentsQualification.fields.outstanding_balance') }}</label>
                        <input readonly="true" class="form-control {{ $errors->has('outstanding_balance') ? 'is-invalid' : '' }}" type="number" name="outstanding_balance" id="outstanding_balance" value="{{ old('outstanding_balance', '0') }}" step="0.01">
                        @if($errors->has('outstanding_balance'))
                            <div class="invalid-feedback">
                                {{ $errors->first('outstanding_balance') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.enrolmentsQualification.fields.outstanding_balance_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="note">{{ trans('cruds.enrolmentsQualification.fields.note') }}</label>
                        <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note') }}</textarea>
                        @if($errors->has('note'))
                            <div class="invalid-feedback">
                                {{ $errors->first('note') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.enrolmentsQualification.fields.note_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-danger" type="submit">
                            {{ trans('global.save') }}
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                
            <table class="table table-bordered table-striped">
                <tbody id="table_message">
                    <tr class="text-center">
                        <th>
                            Applicantion Details
                        </th>
                    </tr>
                    <tr>
                        <td>
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
                            Course
                        </th>
                        <td id="course">
                            
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
                            Applicant Name
                        </th>
                        <td id="applicant_name">
                            
                        </td>
                    </tr>
                    <tr>
                        <th width="25%"> 
                            Applicant ID No.
                        </th>
                        <td id="applicant_id_no">
                        
                        </td>
                    </tr>
                    <tr>
                        <th width="25%"> 
                            Officer Name
                        </th>
                        <td id="officer_name">

                        </td>
                    </tr>         
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function updateCourseFees(){
        var course_fee = 0;

        var course_title_id = $("#course_title_id").val();
        if(course_title_id){
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            var courseurl = '{{ route("admin.enrolments-qualifications.getCourseFees", ":id") }}';
            url = courseurl.replace(":id",course_title_id);
            

            $.ajax({
                url: url,
                type: 'get',
                dataType: 'JSON',
                success: function(data) {
                    if(data.course_fee){
                        course_fee = data.course_fee;
                    }
                    $("#total_fees").val(course_fee);
                    var amount_paid = $("#amount_paid").val();
                    var outstanding_balance = parseFloat(course_fee).toFixed(2) - parseFloat(amount_paid).toFixed(2);
                    $("#outstanding_balance").val(outstanding_balance.toFixed(2));
                }
            });
        } else{
            $("#total_fees").val(0);

            var amount_paid = $("#amount_paid").val();
            var outstanding_balance = parseFloat(course_fee).toFixed(2) - parseFloat(amount_paid).toFixed(2);
            $("#outstanding_balance").val(outstanding_balance.toFixed(2));

        }
    }

    function updateOutstanding(){
        var course_fee = $("#total_fees").val();
        var amount_paid = $("#amount_paid").val();
        var outstanding_balance = parseFloat(course_fee).toFixed(2) - parseFloat(amount_paid).toFixed(2);
        $("#outstanding_balance").val(outstanding_balance.toFixed(2));
    }

    $('#application_no_id').change(function(){
    var id = $(this).val();
    if(id != ""){
        var url = '{{ route("admin.qualifications-apps.getApplicationDetails",":id") }}';
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
                $('#course').html(response.course);    
                $('#commencement').html(response.commencement);    
                $('#applicant_name').html(response.applicant_name);    
                $('#applicant_id_no').html(response.id_no);    
                $('#officer_name').html(response.officer_name);    
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
</script>



@endsection