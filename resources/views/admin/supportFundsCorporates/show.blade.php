@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.supportFundsCorporate.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.support-funds-corporates.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.supportFundsCorporate.fields.id') }}
                        </th>
                        <td>
                            {{ $supportFundsCorporate->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.supportFundsCorporate.fields.member_no') }}
                        </th>
                        <td>
                            {{ $supportFundsCorporate->member_no->member_no ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.supportFundsCorporate.fields.fund_name') }}
                        </th>
                        <td>
                            {{ $supportFundsCorporate->fund_name->fund_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.supportFundsCorporate.fields.amount') }}
                        </th>
                        <td>
                            {{ $supportFundsCorporate->amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.supportFundsCorporate.fields.date') }}
                        </th>
                        <td>
                            {{ $supportFundsCorporate->date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.supportFundsCorporate.fields.invoice_no') }}
                        </th>
                        <td>
                            {{ $supportFundsCorporate->invoice_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.supportFundsCorporate.fields.purpose') }}
                        </th>
                        <td>
                            {{ $supportFundsCorporate->purpose->purpose_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.supportFundsCorporate.fields.note') }}
                        </th>
                        <td>
                            {{ $supportFundsCorporate->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.support-funds-corporates.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection