@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.resultsModule.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.results-modules.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="enrolment_no_id">{{ trans('cruds.resultsModule.fields.enrolment_no') }}</label>
                <select class="form-control select2 {{ $errors->has('enrolment_no') ? 'is-invalid' : '' }}" name="enrolment_no_id" id="enrolment_no_id" required>
                    <option value="">Please select</option>
                    @foreach($enrolment_nos as $enrolment_no)
                        <option value="{{ $enrolment_no->id }}" {{ old('enrolment_no_id') == $enrolment_no->id ? 'selected' : '' }}>{{ $enrolment_no->enrolment_no }} | {{ $enrolment_no->student_name->name }}</option>
                    @endforeach
                </select>
                @if($errors->has('enrolment_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('enrolment_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.resultsModule.fields.enrolment_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date_release">{{ trans('cruds.resultsModule.fields.date_release') }}</label>
                <input class="form-control date {{ $errors->has('date_release') ? 'is-invalid' : '' }}" type="text" name="date_release" id="date_release" value="{{ old('date_release') }}">
                @if($errors->has('date_release'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_release') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.resultsModule.fields.date_release_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="module_1_id">{{ trans('cruds.resultsModule.fields.module_1') }}</label>
                <select class="form-control select2 {{ $errors->has('module_1') ? 'is-invalid' : '' }}" name="module_1_id" id="module_1_id">
                    @foreach($module_1s as $id => $entry)
                        <option value="{{ $id }}" {{ old('module_1_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('module_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('module_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.resultsModule.fields.module_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="grade_1_id">{{ trans('cruds.resultsModule.fields.grade_1') }}</label>
                <select onchange="calculateTotalPoints();" class="form-control select2 {{ $errors->has('grade_1') ? 'is-invalid' : '' }}" name="grade_1_id" id="grade_1_id">
                    @foreach($grade_1s as $id => $entry)
                        <option value="{{ $id }}" {{ old('grade_1_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('grade_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('grade_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.resultsModule.fields.grade_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="module_2_id">{{ trans('cruds.resultsModule.fields.module_2') }}</label>
                <select class="form-control select2 {{ $errors->has('module_2') ? 'is-invalid' : '' }}" name="module_2_id" id="module_2_id">
                    @foreach($module_2s as $id => $entry)
                        <option value="{{ $id }}" {{ old('module_2_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('module_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('module_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.resultsModule.fields.module_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="grade_2_id">{{ trans('cruds.resultsModule.fields.grade_2') }}</label>
                <select onchange="calculateTotalPoints();" class="form-control select2 {{ $errors->has('grade_2') ? 'is-invalid' : '' }}" name="grade_2_id" id="grade_2_id">
                    @foreach($grade_2s as $id => $entry)
                        <option value="{{ $id }}" {{ old('grade_2_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('grade_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('grade_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.resultsModule.fields.grade_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="module_3_id">{{ trans('cruds.resultsModule.fields.module_3') }}</label>
                <select class="form-control select2 {{ $errors->has('module_3') ? 'is-invalid' : '' }}" name="module_3_id" id="module_3_id">
                    @foreach($module_3s as $id => $entry)
                        <option value="{{ $id }}" {{ old('module_3_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('module_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('module_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.resultsModule.fields.module_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="grade_3_id">{{ trans('cruds.resultsModule.fields.grade_3') }}</label>
                <select onchange="calculateTotalPoints();" class="form-control select2 {{ $errors->has('grade_3') ? 'is-invalid' : '' }}" name="grade_3_id" id="grade_3_id">
                    @foreach($grade_3s as $id => $entry)
                        <option value="{{ $id }}" {{ old('grade_3_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('grade_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('grade_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.resultsModule.fields.grade_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="module_4_id">{{ trans('cruds.resultsModule.fields.module_4') }}</label>
                <select class="form-control select2 {{ $errors->has('module_4') ? 'is-invalid' : '' }}" name="module_4_id" id="module_4_id">
                    @foreach($module_4s as $id => $entry)
                        <option value="{{ $id }}" {{ old('module_4_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('module_4'))
                    <div class="invalid-feedback">
                        {{ $errors->first('module_4') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.resultsModule.fields.module_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="grade_4_id">{{ trans('cruds.resultsModule.fields.grade_4') }}</label>
                <select onchange="calculateTotalPoints();" class="form-control select2 {{ $errors->has('grade_4') ? 'is-invalid' : '' }}" name="grade_4_id" id="grade_4_id">
                    @foreach($grade_4s as $id => $entry)
                        <option value="{{ $id }}" {{ old('grade_4_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('grade_4'))
                    <div class="invalid-feedback">
                        {{ $errors->first('grade_4') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.resultsModule.fields.grade_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="module_5_id">{{ trans('cruds.resultsModule.fields.module_5') }}</label>
                <select class="form-control select2 {{ $errors->has('module_5') ? 'is-invalid' : '' }}" name="module_5_id" id="module_5_id">
                    @foreach($module_5s as $id => $entry)
                        <option value="{{ $id }}" {{ old('module_5_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('module_5'))
                    <div class="invalid-feedback">
                        {{ $errors->first('module_5') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.resultsModule.fields.module_5_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="grade_5_id">{{ trans('cruds.resultsModule.fields.grade_5') }}</label>
                <select onchange="calculateTotalPoints();" class="form-control select2 {{ $errors->has('grade_5') ? 'is-invalid' : '' }}" name="grade_5_id" id="grade_5_id">
                    @foreach($grade_5s as $id => $entry)
                        <option value="{{ $id }}" {{ old('grade_5_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('grade_5'))
                    <div class="invalid-feedback">
                        {{ $errors->first('grade_5') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.resultsModule.fields.grade_5_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="module_6_id">{{ trans('cruds.resultsModule.fields.module_6') }}</label>
                <select class="form-control select2 {{ $errors->has('module_6') ? 'is-invalid' : '' }}" name="module_6_id" id="module_6_id">
                    @foreach($module_6s as $id => $entry)
                        <option value="{{ $id }}" {{ old('module_6_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('module_6'))
                    <div class="invalid-feedback">
                        {{ $errors->first('module_6') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.resultsModule.fields.module_6_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="grade_6_id">{{ trans('cruds.resultsModule.fields.grade_6') }}</label>
                <select onchange="calculateTotalPoints();" class="form-control select2 {{ $errors->has('grade_6') ? 'is-invalid' : '' }}" name="grade_6_id" id="grade_6_id">
                    @foreach($grade_6s as $id => $entry)
                        <option value="{{ $id }}" {{ old('grade_6_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('grade_6'))
                    <div class="invalid-feedback">
                        {{ $errors->first('grade_6') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.resultsModule.fields.grade_6_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="total_result_points">{{ trans('cruds.resultsModule.fields.total_result_points') }}</label>
                <input class="form-control {{ $errors->has('total_result_points') ? 'is-invalid' : '' }}" type="number" name="total_result_points" id="total_result_points" value="{{ old('total_result_points', '') }}" step="1">
                @if($errors->has('total_result_points'))
                    <div class="invalid-feedback">
                        {{ $errors->first('total_result_points') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.resultsModule.fields.total_result_points_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="achievement_title_id">{{ trans('cruds.resultsModule.fields.achievement_title') }}</label>
                <select class="form-control select2 {{ $errors->has('achievement_title') ? 'is-invalid' : '' }}" name="achievement_title_id" id="achievement_title_id">
                    @foreach($achievement_titles as $id => $entry)
                        <option value="{{ $id }}" {{ old('achievement_title_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('achievement_title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('achievement_title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.resultsModule.fields.achievement_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date_transcript_sent_1">{{ trans('cruds.resultsModule.fields.date_transcript_sent_1') }}</label>
                <input class="form-control date {{ $errors->has('date_transcript_sent_1') ? 'is-invalid' : '' }}" type="text" name="date_transcript_sent_1" id="date_transcript_sent_1" value="{{ old('date_transcript_sent_1') }}">
                @if($errors->has('date_transcript_sent_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_transcript_sent_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.resultsModule.fields.date_transcript_sent_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date_transcript_sent_2">{{ trans('cruds.resultsModule.fields.date_transcript_sent_2') }}</label>
                <input class="form-control date {{ $errors->has('date_transcript_sent_2') ? 'is-invalid' : '' }}" type="text" name="date_transcript_sent_2" id="date_transcript_sent_2" value="{{ old('date_transcript_sent_2') }}">
                @if($errors->has('date_transcript_sent_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_transcript_sent_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.resultsModule.fields.date_transcript_sent_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.resultsModule.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note') }}</textarea>
                @if($errors->has('note'))
                    <div class="invalid-feedback">
                        {{ $errors->first('note') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.resultsModule.fields.note_helper') }}</span>
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
$(document).ready(function(){
    if({!! $grade_points !!}){
        const grades = {!! $grade_points !!};
        $(grades).each(function(index, value){
            sessionStorage.setItem("grade_" + value.id,value.grade_point_s);
        })
    } 
})

function calculateTotalPoints(){
    var grade1 = $('#grade_1_id').val();
    var grade1_point = grade1 ? sessionStorage.getItem("grade_" + grade1) : 0;
    var grade2 = $('#grade_2_id').val();
    var grade2_point = grade2 ? sessionStorage.getItem("grade_" + grade2) : 0;
    var grade3 = $('#grade_3_id').val();
    var grade3_point = grade3 ? sessionStorage.getItem("grade_" + grade3) : 0;
    var grade4 = $('#grade_4_id').val();
    var grade4_point = grade4 ? sessionStorage.getItem("grade_" + grade4) : 0;
    var grade5 = $('#grade_5_id').val();
    var grade5_point = grade5 ? sessionStorage.getItem("grade_" + grade5) : 0;
    var grade6 = $('#grade_6_id').val();
    var grade6_point = grade6 ? sessionStorage.getItem("grade_" + grade6) : 0;


    var total_points = parseInt(grade1_point) + parseInt(grade2_point) + parseInt(grade3_point) + parseInt(grade4_point) + parseInt(grade5_point) + parseInt(grade6_point);
    $('#total_result_points').val(total_points);
}
    
</script>
@endsection