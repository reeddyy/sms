@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.statusQualification.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.status-qualifications.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.statusQualification.fields.id') }}
                        </th>
                        <td>
                            {{ $statusQualification->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.statusQualification.fields.status_name') }}
                        </th>
                        <td>
                            {{ $statusQualification->status_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.statusQualification.fields.note') }}
                        </th>
                        <td>
                            {{ $statusQualification->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.status-qualifications.index') }}">
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
            <a class="nav-link" href="#status_enrolments_qualifications" role="tab" data-toggle="tab">
                {{ trans('cruds.enrolmentsQualification.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="status_enrolments_qualifications">
            @includeIf('admin.statusQualifications.relationships.statusEnrolmentsQualifications', ['enrolmentsQualifications' => $statusQualification->statusEnrolmentsQualifications])
        </div>
    </div>
</div>

@endsection