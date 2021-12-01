@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.statusMembership.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.status-memberships.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.statusMembership.fields.id') }}
                        </th>
                        <td>
                            {{ $statusMembership->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.statusMembership.fields.status_name') }}
                        </th>
                        <td>
                            {{ $statusMembership->status_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.statusMembership.fields.note') }}
                        </th>
                        <td>
                            {{ $statusMembership->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.status-memberships.index') }}">
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
            <a class="nav-link" href="#status_memberships_corporates" role="tab" data-toggle="tab">
                {{ trans('cruds.membershipsCorporate.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#status_memberships_individuals" role="tab" data-toggle="tab">
                {{ trans('cruds.membershipsIndividual.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="status_memberships_corporates">
            @includeIf('admin.statusMemberships.relationships.statusMembershipsCorporates', ['membershipsCorporates' => $statusMembership->statusMembershipsCorporates])
        </div>
        <div class="tab-pane" role="tabpanel" id="status_memberships_individuals">
            @includeIf('admin.statusMemberships.relationships.statusMembershipsIndividuals', ['membershipsIndividuals' => $statusMembership->statusMembershipsIndividuals])
        </div>
    </div>
</div>

@endsection