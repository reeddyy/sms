@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.statusEdp.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.status-edps.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.statusEdp.fields.id') }}
                        </th>
                        <td>
                            {{ $statusEdp->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.statusEdp.fields.status_name') }}
                        </th>
                        <td>
                            {{ $statusEdp->status_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.statusEdp.fields.note') }}
                        </th>
                        <td>
                            {{ $statusEdp->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.status-edps.index') }}">
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
            <a class="nav-link" href="#status_admissions_edps" role="tab" data-toggle="tab">
                {{ trans('cruds.admissionsEdp.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="status_admissions_edps">
            @includeIf('admin.statusEdps.relationships.statusAdmissionsEdps', ['admissionsEdps' => $statusEdp->statusAdmissionsEdps])
        </div>
    </div>
</div>

@endsection