@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.statusAda.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.status-adas.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.statusAda.fields.id') }}
                        </th>
                        <td>
                            {{ $statusAda->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.statusAda.fields.status_name') }}
                        </th>
                        <td>
                            {{ $statusAda->status_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.statusAda.fields.note') }}
                        </th>
                        <td>
                            {{ $statusAda->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.status-adas.index') }}">
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
            <a class="nav-link" href="#status_applicants_adas" role="tab" data-toggle="tab">
                {{ trans('cruds.applicantsAda.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="status_applicants_adas">
            @includeIf('admin.statusAdas.relationships.statusApplicantsAdas', ['applicantsAdas' => $statusAda->statusApplicantsAdas])
        </div>
    </div>
</div>

@endsection