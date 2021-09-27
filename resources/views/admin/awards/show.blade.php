@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.award.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.awards.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.award.fields.id') }}
                        </th>
                        <td>
                            {{ $award->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.award.fields.award_name') }}
                        </th>
                        <td>
                            {{ $award->award_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.award.fields.award_abbr') }}
                        </th>
                        <td>
                            {{ $award->award_abbr }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.award.fields.validity_year') }}
                        </th>
                        <td>
                            {{ $award->validity_year }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.award.fields.award_fees') }}
                        </th>
                        <td>
                            {{ $award->award_fees }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.award.fields.note') }}
                        </th>
                        <td>
                            {{ $award->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.awards.index') }}">
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
            <a class="nav-link" href="#award_name_applicants_adas" role="tab" data-toggle="tab">
                {{ trans('cruds.applicantsAda.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="award_name_applicants_adas">
            @includeIf('admin.awards.relationships.awardNameApplicantsAdas', ['applicantsAdas' => $award->awardNameApplicantsAdas])
        </div>
    </div>
</div>

@endsection