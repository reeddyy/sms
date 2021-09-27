@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.digitalModule.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.digital-modules.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.digitalModule.fields.id') }}
                        </th>
                        <td>
                            {{ $digitalModule->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.digitalModule.fields.module_name') }}
                        </th>
                        <td>
                            {{ $digitalModule->module_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.digitalModule.fields.module_abbr') }}
                        </th>
                        <td>
                            {{ $digitalModule->module_abbr }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.digitalModule.fields.module_code') }}
                        </th>
                        <td>
                            {{ $digitalModule->module_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.digitalModule.fields.level') }}
                        </th>
                        <td>
                            {{ $digitalModule->level->level_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.digitalModule.fields.module_status') }}
                        </th>
                        <td>
                            {{ App\Models\DigitalModule::MODULE_STATUS_RADIO[$digitalModule->module_status] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.digitalModule.fields.note') }}
                        </th>
                        <td>
                            {{ $digitalModule->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.digital-modules.index') }}">
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
            <a class="nav-link" href="#module_results_digital_modules" role="tab" data-toggle="tab">
                {{ trans('cruds.resultsDigitalModule.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#digital_module_s_courses" role="tab" data-toggle="tab">
                {{ trans('cruds.course.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="module_results_digital_modules">
            @includeIf('admin.digitalModules.relationships.moduleResultsDigitalModules', ['resultsDigitalModules' => $digitalModule->moduleResultsDigitalModules])
        </div>
        <div class="tab-pane" role="tabpanel" id="digital_module_s_courses">
            @includeIf('admin.digitalModules.relationships.digitalModuleSCourses', ['courses' => $digitalModule->digitalModuleSCourses])
        </div>
    </div>
</div>

@endsection