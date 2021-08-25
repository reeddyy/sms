@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.membership.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.memberships.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.membership.fields.id') }}
                        </th>
                        <td>
                            {{ $membership->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.membership.fields.membership_no') }}
                        </th>
                        <td>
                            {{ $membership->membership_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.membership.fields.member_name') }}
                        </th>
                        <td>
                            {{ $membership->member_name->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.membership.fields.member_class') }}
                        </th>
                        <td>
                            {{ App\Models\Membership::MEMBER_CLASS_RADIO[$membership->member_class] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.membership.fields.membership_start_date') }}
                        </th>
                        <td>
                            {{ $membership->membership_start_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.membership.fields.membership_expiry_date') }}
                        </th>
                        <td>
                            {{ $membership->membership_expiry_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.membership.fields.membership_validity') }}
                        </th>
                        <td>
                            {{ App\Models\Membership::MEMBERSHIP_VALIDITY_RADIO[$membership->membership_validity] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.membership.fields.no_of_renewal') }}
                        </th>
                        <td>
                            {{ $membership->no_of_renewal }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.membership.fields.payment_amount') }}
                        </th>
                        <td>
                            {{ $membership->payment_amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.membership.fields.payment_date') }}
                        </th>
                        <td>
                            {{ $membership->payment_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.membership.fields.payment_receipt_no') }}
                        </th>
                        <td>
                            {{ $membership->payment_receipt_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.membership.fields.payment_note') }}
                        </th>
                        <td>
                            {{ $membership->payment_note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.memberships.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection