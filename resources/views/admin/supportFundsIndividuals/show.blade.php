@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.supportFundsIndividual.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.support-funds-individuals.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.supportFundsIndividual.fields.id') }}
                        </th>
                        <td>
                            {{ $supportFundsIndividual->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.supportFundsIndividual.fields.member_no') }}
                        </th>
                        <td>
                            {{ $supportFundsIndividual->member_no->member_no ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.supportFundsIndividual.fields.fund_name') }}
                        </th>
                        <td>
                            {{ $supportFundsIndividual->fund_name->fund_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.supportFundsIndividual.fields.amount') }}
                        </th>
                        <td>
                            {{ $supportFundsIndividual->amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.supportFundsIndividual.fields.date') }}
                        </th>
                        <td>
                            {{ $supportFundsIndividual->date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.supportFundsIndividual.fields.invoice_no') }}
                        </th>
                        <td>
                            {{ $supportFundsIndividual->invoice_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.supportFundsIndividual.fields.purpose') }}
                        </th>
                        <td>
                            {{ $supportFundsIndividual->purpose->purpose_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.supportFundsIndividual.fields.note') }}
                        </th>
                        <td>
                            {{ $supportFundsIndividual->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.support-funds-individuals.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection