@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.grade.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.grades.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.grade.fields.id') }}
                        </th>
                        <td>
                            {{ $grade->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.grade.fields.grade_letter') }}
                        </th>
                        <td>
                            {{ $grade->grade_letter }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.grade.fields.grade_description') }}
                        </th>
                        <td>
                            {{ $grade->grade_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.grade.fields.grade_point_s') }}
                        </th>
                        <td>
                            {{ $grade->grade_point_s }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.grade.fields.grade_marks') }}
                        </th>
                        <td>
                            {{ $grade->grade_marks }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.grade.fields.note') }}
                        </th>
                        <td>
                            {{ $grade->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.grades.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#grade_results_modules" role="tab" data-toggle="tab">
                {{ trans('cruds.resultsModule.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#grade_results_digital_modules" role="tab" data-toggle="tab">
                {{ trans('cruds.resultsDigitalModule.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="grade_results_modules">
            @includeIf('admin.grades.relationships.gradeResultsModules', ['resultsModules' => $grade->gradeResultsModules])
        </div>
        <div class="tab-pane" role="tabpanel" id="grade_results_digital_modules">
            @includeIf('admin.grades.relationships.gradeResultsDigitalModules', ['resultsDigitalModules' => $grade->gradeResultsDigitalModules])
        </div>
    </div>
</div>

@endsection