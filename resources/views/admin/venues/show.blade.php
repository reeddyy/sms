@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.venue.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.venues.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.venue.fields.id') }}
                        </th>
                        <td>
                            {{ $venue->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.venue.fields.venue_name') }}
                        </th>
                        <td>
                            {{ $venue->venue_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.venue.fields.note') }}
                        </th>
                        <td>
                            {{ $venue->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.venues.index') }}">
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
            <a class="nav-link" href="#venue_admissions_edps" role="tab" data-toggle="tab">
                {{ trans('cruds.admissionsEdp.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="venue_admissions_edps">
            @includeIf('admin.venues.relationships.venueAdmissionsEdps', ['admissionsEdps' => $venue->venueAdmissionsEdps])
        </div>
    </div>
</div>

@endsection