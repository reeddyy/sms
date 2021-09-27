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
                            {{ trans('cruds.resultsModule.fields.module') }}
                        </th>
                        <td>
                            {{ $resultsModule->module->module_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resultsModule.fields.grade') }}
                        </th>
                        <td>
                            {{ $resultsModule->grade->grade_letter ?? '' }}
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