@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.applicantsAda.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.applicants-adas.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.applicantsAda.fields.id') }}
                        </th>
                        <td>
                            {{ $applicantsAda->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.applicantsAda.fields.ada_status') }}
                        </th>
                        <td>
                            {{ $applicantsAda->ada_status->status_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.applicantsAda.fields.award_name') }}
                        </th>
                        <td>
                            {{ $applicantsAda->award_name->award_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.applicantsAda.fields.validity_start') }}
                        </th>
                        <td>
                            {{ $applicantsAda->validity_start }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.applicantsAda.fields.validity_end') }}
                        </th>
                        <td>
                            {{ $applicantsAda->validity_end }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.applicantsAda.fields.ada_no') }}
                        </th>
                        <td>
                            {{ $applicantsAda->ada_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.applicantsAda.fields.applicant_name') }}
                        </th>
                        <td>
                            {{ $applicantsAda->applicant_name->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.applicantsAda.fields.amount_paid') }}
                        </th>
                        <td>
                            {{ $applicantsAda->amount_paid }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.applicantsAda.fields.payment_date') }}
                        </th>
                        <td>
                            {{ $applicantsAda->payment_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.applicantsAda.fields.invoice_no') }}
                        </th>
                        <td>
                            {{ $applicantsAda->invoice_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.applicantsAda.fields.note') }}
                        </th>
                        <td>
                            {{ $applicantsAda->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.applicants-adas.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection