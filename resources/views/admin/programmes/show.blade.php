@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.programme.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.programmes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.programme.fields.id') }}
                        </th>
                        <td>
                            {{ $programme->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.programme.fields.edp_title') }}
                        </th>
                        <td>
                            {{ $programme->edp_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.programme.fields.edp_abbr') }}
                        </th>
                        <td>
                            {{ $programme->edp_abbr }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.programme.fields.duration_day') }}
                        </th>
                        <td>
                            {{ $programme->duration_day }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.programme.fields.level') }}
                        </th>
                        <td>
                            {{ $programme->level->level_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.programme.fields.member_rate') }}
                        </th>
                        <td>
                            {{ $programme->member_rate }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.programme.fields.public_rate') }}
                        </th>
                        <td>
                            {{ $programme->public_rate }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.programme.fields.edp_status') }}
                        </th>
                        <td>
                            {{ App\Models\Programme::EDP_STATUS_RADIO[$programme->edp_status] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.programme.fields.note') }}
                        </th>
                        <td>
                            {{ $programme->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.programmes.index') }}">
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
            <a class="nav-link" href="#edp_title_admissions_edps" role="tab" data-toggle="tab">
                {{ trans('cruds.admissionsEdp.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="edp_title_admissions_edps">
            @includeIf('admin.programmes.relationships.edpTitleAdmissionsEdps', ['admissionsEdps' => $programme->edpTitleAdmissionsEdps])
        </div>
    </div>
</div>

@endsection