@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.level.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.levels.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.level.fields.id') }}
                        </th>
                        <td>
                            {{ $level->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.level.fields.level_name') }}
                        </th>
                        <td>
                            {{ $level->level_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.level.fields.note') }}
                        </th>
                        <td>
                            {{ $level->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.levels.index') }}">
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
            <a class="nav-link" href="#level_courses" role="tab" data-toggle="tab">
                {{ trans('cruds.course.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#level_programmes" role="tab" data-toggle="tab">
                {{ trans('cruds.programme.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#module_level_modules" role="tab" data-toggle="tab">
                {{ trans('cruds.module.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="level_courses">
            @includeIf('admin.levels.relationships.levelCourses', ['courses' => $level->levelCourses])
        </div>
        <div class="tab-pane" role="tabpanel" id="level_programmes">
            @includeIf('admin.levels.relationships.levelProgrammes', ['programmes' => $level->levelProgrammes])
        </div>
        <div class="tab-pane" role="tabpanel" id="module_level_modules">
            @includeIf('admin.levels.relationships.moduleLevelModules', ['modules' => $level->moduleLevelModules])
        </div>
    </div>
</div>

@endsection