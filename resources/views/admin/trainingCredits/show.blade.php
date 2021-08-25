@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.trainingCredit.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.training-credits.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.trainingCredit.fields.id') }}
                        </th>
                        <td>
                            {{ $trainingCredit->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trainingCredit.fields.membership_no') }}
                        </th>
                        <td>
                            {{ $trainingCredit->membership_no->membership_no ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trainingCredit.fields.tc_brought_forward') }}
                        </th>
                        <td>
                            {{ $trainingCredit->tc_brought_forward }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trainingCredit.fields.training_credit') }}
                        </th>
                        <td>
                            {{ $trainingCredit->training_credit }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trainingCredit.fields.digital_resisilience_fund') }}
                        </th>
                        <td>
                            {{ $trainingCredit->digital_resisilience_fund }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trainingCredit.fields.digital_enabler_fund') }}
                        </th>
                        <td>
                            {{ $trainingCredit->digital_enabler_fund }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trainingCredit.fields.cf_used') }}
                        </th>
                        <td>
                            {{ $trainingCredit->cf_used }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trainingCredit.fields.cf_avaliable') }}
                        </th>
                        <td>
                            {{ $trainingCredit->cf_avaliable }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trainingCredit.fields.valid_till') }}
                        </th>
                        <td>
                            {{ $trainingCredit->valid_till }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.training-credits.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection