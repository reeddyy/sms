@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.trainingCreditsIndividual.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.training-credits-individuals.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.trainingCreditsIndividual.fields.id') }}
                        </th>
                        <td>
                            {{ $trainingCreditsIndividual->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trainingCreditsIndividual.fields.member_no') }}
                        </th>
                        <td>
                            {{ $trainingCreditsIndividual->member_no->member_no ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trainingCreditsIndividual.fields.amount') }}
                        </th>
                        <td>
                            {{ $trainingCreditsIndividual->amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trainingCreditsIndividual.fields.date') }}
                        </th>
                        <td>
                            {{ $trainingCreditsIndividual->date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trainingCreditsIndividual.fields.invoice_no') }}
                        </th>
                        <td>
                            {{ $trainingCreditsIndividual->invoice_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trainingCreditsIndividual.fields.purpose') }}
                        </th>
                        <td>
                            {{ $trainingCreditsIndividual->purpose->purpose_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trainingCreditsIndividual.fields.note') }}
                        </th>
                        <td>
                            {{ $trainingCreditsIndividual->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.training-credits-individuals.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection