@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.statusLead.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.status-leads.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.statusLead.fields.id') }}
                        </th>
                        <td>
                            {{ $statusLead->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.statusLead.fields.status_name') }}
                        </th>
                        <td>
                            {{ $statusLead->status_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.statusLead.fields.note') }}
                        </th>
                        <td>
                            {{ $statusLead->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.status-leads.index') }}">
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
            <a class="nav-link" href="#status_qualifications_reqs" role="tab" data-toggle="tab">
                {{ trans('cruds.qualificationsReq.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#status_edp_reqs" role="tab" data-toggle="tab">
                {{ trans('cruds.edpReq.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="status_qualifications_reqs">
            @includeIf('admin.statusLeads.relationships.statusQualificationsReqs', ['qualificationsReqs' => $statusLead->statusQualificationsReqs])
        </div>
        <div class="tab-pane" role="tabpanel" id="status_edp_reqs">
            @includeIf('admin.statusLeads.relationships.statusEdpReqs', ['edpReqs' => $statusLead->statusEdpReqs])
        </div>
    </div>
</div>

@endsection