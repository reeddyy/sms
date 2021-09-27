@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.cfPurpose.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.cf-purposes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.cfPurpose.fields.id') }}
                        </th>
                        <td>
                            {{ $cfPurpose->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cfPurpose.fields.purpose_name') }}
                        </th>
                        <td>
                            {{ $cfPurpose->purpose_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cfPurpose.fields.note') }}
                        </th>
                        <td>
                            {{ $cfPurpose->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.cf-purposes.index') }}">
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
            <a class="nav-link" href="#purpose_tc_individuals" role="tab" data-toggle="tab">
                {{ trans('cruds.tcIndividual.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#purpose_sf_individuals" role="tab" data-toggle="tab">
                {{ trans('cruds.sfIndividual.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="purpose_tc_individuals">
            @includeIf('admin.cfPurposes.relationships.purposeTcIndividuals', ['tcIndividuals' => $cfPurpose->purposeTcIndividuals])
        </div>
        <div class="tab-pane" role="tabpanel" id="purpose_sf_individuals">
            @includeIf('admin.cfPurposes.relationships.purposeSfIndividuals', ['sfIndividuals' => $cfPurpose->purposeSfIndividuals])
        </div>
    </div>
</div>

@endsection