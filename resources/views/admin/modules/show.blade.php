@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.module.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.modules.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.module.fields.id') }}
                        </th>
                        <td>
                            {{ $module->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.module.fields.module_name') }}
                        </th>
                        <td>
                            {{ $module->module_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.module.fields.module_abbr') }}
                        </th>
                        <td>
                            {{ $module->module_abbr }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.module.fields.module_code') }}
                        </th>
                        <td>
                            {{ $module->module_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.module.fields.module_status') }}
                        </th>
                        <td>
                            {{ App\Models\Module::MODULE_STATUS_RADIO[$module->module_status] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.module.fields.note') }}
                        </th>
                        <td>
                            {{ $module->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.modules.index') }}">
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
            <a class="nav-link" href="#module_s_courses" role="tab" data-toggle="tab">
                {{ trans('cruds.course.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="module_s_courses">
            @includeIf('admin.modules.relationships.moduleSCourses', ['courses' => $module->moduleSCourses])
        </div>
    </div>
</div>

@endsection