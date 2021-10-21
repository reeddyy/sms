@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.trainingCreditsCorporate.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.training-credits-corporates.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.trainingCreditsCorporate.fields.id') }}
                        </th>
                        <td>
                            {{ $trainingCreditsCorporate->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trainingCreditsCorporate.fields.member_no') }}
                        </th>
                        <td>
                            {{ $trainingCreditsCorporate->member_no->member_no ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trainingCreditsCorporate.fields.amount') }}
                        </th>
                        <td>
                            {{ $trainingCreditsCorporate->amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trainingCreditsCorporate.fields.date') }}
                        </th>
                        <td>
                            {{ $trainingCreditsCorporate->date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trainingCreditsCorporate.fields.invoice_no') }}
                        </th>
                        <td>
                            {{ $trainingCreditsCorporate->invoice_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trainingCreditsCorporate.fields.purpose') }}
                        </th>
                        <td>
                            {{ $trainingCreditsCorporate->purpose->purpose_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trainingCreditsCorporate.fields.note') }}
                        </th>
                        <td>
                            {{ $trainingCreditsCorporate->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.training-credits-corporates.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection