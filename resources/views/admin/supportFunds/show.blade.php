@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.supportFund.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.support-funds.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.supportFund.fields.id') }}
                        </th>
                        <td>
                            {{ $supportFund->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.supportFund.fields.fund_name') }}
                        </th>
                        <td>
                            {{ $supportFund->fund_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.supportFund.fields.note') }}
                        </th>
                        <td>
                            {{ $supportFund->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.support-funds.index') }}">
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
            <a class="nav-link" href="#fund_name_sf_individuals" role="tab" data-toggle="tab">
                {{ trans('cruds.sfIndividual.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="fund_name_sf_individuals">
            @includeIf('admin.supportFunds.relationships.fundNameSfIndividuals', ['sfIndividuals' => $supportFund->fundNameSfIndividuals])
        </div>
    </div>
</div>

@endsection