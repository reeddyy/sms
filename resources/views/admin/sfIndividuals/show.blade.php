@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.sfIndividual.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.sf-individuals.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.sfIndividual.fields.id') }}
                        </th>
                        <td>
                            {{ $sfIndividual->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sfIndividual.fields.member_no') }}
                        </th>
                        <td>
                            {{ $sfIndividual->member_no->member_no ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sfIndividual.fields.fund_name') }}
                        </th>
                        <td>
                            {{ $sfIndividual->fund_name->fund_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sfIndividual.fields.amount') }}
                        </th>
                        <td>
                            {{ $sfIndividual->amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sfIndividual.fields.date') }}
                        </th>
                        <td>
                            {{ $sfIndividual->date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sfIndividual.fields.invoice_no') }}
                        </th>
                        <td>
                            {{ $sfIndividual->invoice_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sfIndividual.fields.purpose') }}
                        </th>
                        <td>
                            {{ $sfIndividual->purpose->purpose_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sfIndividual.fields.note') }}
                        </th>
                        <td>
                            {{ $sfIndividual->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.sf-individuals.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection