@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.achievement.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.achievements.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.achievement.fields.id') }}
                        </th>
                        <td>
                            {{ $achievement->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.achievement.fields.achievement_title') }}
                        </th>
                        <td>
                            {{ $achievement->achievement_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.achievement.fields.note') }}
                        </th>
                        <td>
                            {{ $achievement->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.achievements.index') }}">
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
            <a class="nav-link" href="#achievement_title_results_modules" role="tab" data-toggle="tab">
                {{ trans('cruds.resultsModule.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="achievement_title_results_modules">
            @includeIf('admin.achievements.relationships.achievementTitleResultsModules', ['resultsModules' => $achievement->achievementTitleResultsModules])
        </div>
    </div>
</div>

@endsection