@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.tcIndividual.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.tc-individuals.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.tcIndividual.fields.id') }}
                        </th>
                        <td>
                            {{ $tcIndividual->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.tcIndividual.fields.member_no') }}
                        </th>
                        <td>
                            {{ $tcIndividual->member_no->member_no ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.tcIndividual.fields.amount') }}
                        </th>
                        <td>
                            {{ $tcIndividual->amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.tcIndividual.fields.date') }}
                        </th>
                        <td>
                            {{ $tcIndividual->date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.tcIndividual.fields.invoice_no') }}
                        </th>
                        <td>
                            {{ $tcIndividual->invoice_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.tcIndividual.fields.purpose') }}
                        </th>
                        <td>
                            {{ $tcIndividual->purpose->purpose_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.tcIndividual.fields.note') }}
                        </th>
                        <td>
                            {{ $tcIndividual->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.tc-individuals.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection