@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.memberClass.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.member-classes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.memberClass.fields.id') }}
                        </th>
                        <td>
                            {{ $memberClass->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.memberClass.fields.member_class_name') }}
                        </th>
                        <td>
                            {{ $memberClass->member_class_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.memberClass.fields.note') }}
                        </th>
                        <td>
                            {{ $memberClass->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.member-classes.index') }}">
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
            <a class="nav-link" href="#member_class_memberships_individuals" role="tab" data-toggle="tab">
                {{ trans('cruds.membershipsIndividual.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="member_class_memberships_individuals">
            @includeIf('admin.memberClasses.relationships.memberClassMembershipsIndividuals', ['membershipsIndividuals' => $memberClass->memberClassMembershipsIndividuals])
        </div>
    </div>
</div>

@endsection