@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.creditsFundsPurpose.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.credits-funds-purposes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.creditsFundsPurpose.fields.id') }}
                        </th>
                        <td>
                            {{ $creditsFundsPurpose->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.creditsFundsPurpose.fields.purpose_name') }}
                        </th>
                        <td>
                            {{ $creditsFundsPurpose->purpose_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.creditsFundsPurpose.fields.note') }}
                        </th>
                        <td>
                            {{ $creditsFundsPurpose->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.credits-funds-purposes.index') }}">
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
            <a class="nav-link" href="#purpose_training_credits_individuals" role="tab" data-toggle="tab">
                {{ trans('cruds.trainingCreditsIndividual.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#purpose_support_funds_individuals" role="tab" data-toggle="tab">
                {{ trans('cruds.supportFundsIndividual.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#purpose_training_credits_corporates" role="tab" data-toggle="tab">
                {{ trans('cruds.trainingCreditsCorporate.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#purpose_support_funds_corporates" role="tab" data-toggle="tab">
                {{ trans('cruds.supportFundsCorporate.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="purpose_training_credits_individuals">
            @includeIf('admin.creditsFundsPurposes.relationships.purposeTrainingCreditsIndividuals', ['trainingCreditsIndividuals' => $creditsFundsPurpose->purposeTrainingCreditsIndividuals])
        </div>
        <div class="tab-pane" role="tabpanel" id="purpose_support_funds_individuals">
            @includeIf('admin.creditsFundsPurposes.relationships.purposeSupportFundsIndividuals', ['supportFundsIndividuals' => $creditsFundsPurpose->purposeSupportFundsIndividuals])
        </div>
        <div class="tab-pane" role="tabpanel" id="purpose_training_credits_corporates">
            @includeIf('admin.creditsFundsPurposes.relationships.purposeTrainingCreditsCorporates', ['trainingCreditsCorporates' => $creditsFundsPurpose->purposeTrainingCreditsCorporates])
        </div>
        <div class="tab-pane" role="tabpanel" id="purpose_support_funds_corporates">
            @includeIf('admin.creditsFundsPurposes.relationships.purposeSupportFundsCorporates', ['supportFundsCorporates' => $creditsFundsPurpose->purposeSupportFundsCorporates])
        </div>
    </div>
</div>

@endsection