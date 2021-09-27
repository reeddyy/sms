@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.resultsDigitalModule.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.results-digital-modules.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.resultsDigitalModule.fields.id') }}
                        </th>
                        <td>
                            {{ $resultsDigitalModule->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resultsDigitalModule.fields.enrolment_no') }}
                        </th>
                        <td>
                            {{ $resultsDigitalModule->enrolment_no->enrolment_no ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resultsDigitalModule.fields.date_release') }}
                        </th>
                        <td>
                            {{ $resultsDigitalModule->date_release }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resultsDigitalModule.fields.module') }}
                        </th>
                        <td>
                            {{ $resultsDigitalModule->module->module_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resultsDigitalModule.fields.grade') }}
                        </th>
                        <td>
                            {{ $resultsDigitalModule->grade->grade_letter ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resultsDigitalModule.fields.note') }}
                        </th>
                        <td>
                            {{ $resultsDigitalModule->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.results-digital-modules.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection