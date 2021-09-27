@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.facilitator.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.facilitators.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.facilitator.fields.id') }}
                        </th>
                        <td>
                            {{ $facilitator->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.facilitator.fields.facilitator_title') }}
                        </th>
                        <td>
                            {{ App\Models\Facilitator::FACILITATOR_TITLE_SELECT[$facilitator->facilitator_title] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.facilitator.fields.facilitator_name') }}
                        </th>
                        <td>
                            {{ $facilitator->facilitator_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.facilitator.fields.note') }}
                        </th>
                        <td>
                            {{ $facilitator->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.facilitators.index') }}">
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
            <a class="nav-link" href="#facilitator_name_admissions_edps" role="tab" data-toggle="tab">
                {{ trans('cruds.admissionsEdp.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="facilitator_name_admissions_edps">
            @includeIf('admin.facilitators.relationships.facilitatorNameAdmissionsEdps', ['admissionsEdps' => $facilitator->facilitatorNameAdmissionsEdps])
        </div>
    </div>
</div>

@endsection