@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.status.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.statuses.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.status.fields.id') }}
                        </th>
                        <td>
                            {{ $status->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.status.fields.status_name') }}
                        </th>
                        <td>
                            {{ $status->status_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.status.fields.note') }}
                        </th>
                        <td>
                            {{ $status->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.statuses.index') }}">
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
            <a class="nav-link" href="#admission_status_admissions_edps" role="tab" data-toggle="tab">
                {{ trans('cruds.admissionsEdp.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#ada_status_applicants_adas" role="tab" data-toggle="tab">
                {{ trans('cruds.applicantsAda.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="admission_status_admissions_edps">
            @includeIf('admin.statuses.relationships.admissionStatusAdmissionsEdps', ['admissionsEdps' => $status->admissionStatusAdmissionsEdps])
        </div>
        <div class="tab-pane" role="tabpanel" id="ada_status_applicants_adas">
            @includeIf('admin.statuses.relationships.adaStatusApplicantsAdas', ['applicantsAdas' => $status->adaStatusApplicantsAdas])
        </div>
    </div>
</div>

@endsection