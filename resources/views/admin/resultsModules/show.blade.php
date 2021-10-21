@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.resultsModule.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.results-modules.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.resultsModule.fields.id') }}
                        </th>
                        <td>
                            {{ $resultsModule->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resultsModule.fields.enrolment_no') }}
                        </th>
                        <td>
                            {{ $resultsModule->enrolment_no->enrolment_no ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resultsModule.fields.date_release') }}
                        </th>
                        <td>
                            {{ $resultsModule->date_release }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resultsModule.fields.module_1') }}
                        </th>
                        <td>
                            {{ $resultsModule->module_1->module_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resultsModule.fields.grade_1') }}
                        </th>
                        <td>
                            {{ $resultsModule->grade_1->grade_letter ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resultsModule.fields.module_2') }}
                        </th>
                        <td>
                            {{ $resultsModule->module_2->module_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resultsModule.fields.grade_2') }}
                        </th>
                        <td>
                            {{ $resultsModule->grade_2->grade_letter ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resultsModule.fields.module_3') }}
                        </th>
                        <td>
                            {{ $resultsModule->module_3->module_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resultsModule.fields.grade_3') }}
                        </th>
                        <td>
                            {{ $resultsModule->grade_3->grade_letter ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resultsModule.fields.module_4') }}
                        </th>
                        <td>
                            {{ $resultsModule->module_4->module_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resultsModule.fields.grade_4') }}
                        </th>
                        <td>
                            {{ $resultsModule->grade_4->grade_letter ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resultsModule.fields.module_5') }}
                        </th>
                        <td>
                            {{ $resultsModule->module_5->module_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resultsModule.fields.grade_5') }}
                        </th>
                        <td>
                            {{ $resultsModule->grade_5->grade_letter ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resultsModule.fields.module_6') }}
                        </th>
                        <td>
                            {{ $resultsModule->module_6->module_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resultsModule.fields.grade_6') }}
                        </th>
                        <td>
                            {{ $resultsModule->grade_6->grade_letter ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resultsModule.fields.total_result_points') }}
                        </th>
                        <td>
                            {{ $resultsModule->total_result_points }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resultsModule.fields.achievement_title') }}
                        </th>
                        <td>
                            {{ $resultsModule->achievement_title->achievement_title ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resultsModule.fields.date_transcript_sent_1') }}
                        </th>
                        <td>
                            {{ $resultsModule->date_transcript_sent_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resultsModule.fields.date_transcript_sent_2') }}
                        </th>
                        <td>
                            {{ $resultsModule->date_transcript_sent_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resultsModule.fields.note') }}
                        </th>
                        <td>
                            {{ $resultsModule->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.results-modules.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection