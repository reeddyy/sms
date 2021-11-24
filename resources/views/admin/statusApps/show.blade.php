@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.statusApp.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.status-apps.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.statusApp.fields.id') }}
                        </th>
                        <td>
                            {{ $statusApp->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.statusApp.fields.status_name') }}
                        </th>
                        <td>
                            {{ $statusApp->status_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.statusApp.fields.note') }}
                        </th>
                        <td>
                            {{ $statusApp->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.status-apps.index') }}">
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
            <a class="nav-link" href="#status_qualifications_apps" role="tab" data-toggle="tab">
                {{ trans('cruds.qualificationsApp.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#status_edp_apps" role="tab" data-toggle="tab">
                {{ trans('cruds.edpApp.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#status_corporates_apps" role="tab" data-toggle="tab">
                {{ trans('cruds.corporatesApp.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="status_qualifications_apps">
            @includeIf('admin.statusApps.relationships.statusQualificationsApps', ['qualificationsApps' => $statusApp->statusQualificationsApps])
        </div>
        <div class="tab-pane" role="tabpanel" id="status_edp_apps">
            @includeIf('admin.statusApps.relationships.statusEdpApps', ['edpApps' => $statusApp->statusEdpApps])
        </div>
        <div class="tab-pane" role="tabpanel" id="status_corporates_apps">
            @includeIf('admin.statusApps.relationships.statusCorporatesApps', ['corporatesApps' => $statusApp->statusCorporatesApps])
        </div>
    </div>
</div>

@endsection