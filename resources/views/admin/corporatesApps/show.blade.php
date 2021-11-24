@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.corporatesApp.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.corporates-apps.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.id') }}
                        </th>
                        <td>
                            {{ $corporatesApp->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.status') }}
                        </th>
                        <td>
                            @foreach($corporatesApp->statuses as $key => $status)
                                <span class="label label-info">{{ $status->status_name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.application_no') }}
                        </th>
                        <td>
                            {{ $corporatesApp->application_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.member_class') }}
                        </th>
                        <td>
                            {{ $corporatesApp->member_class }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.company_name') }}
                        </th>
                        <td>
                            {{ $corporatesApp->company_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.business_reg_no') }}
                        </th>
                        <td>
                            {{ $corporatesApp->business_reg_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.company_address') }}
                        </th>
                        <td>
                            {{ $corporatesApp->company_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.country') }}
                        </th>
                        <td>
                            {{ $corporatesApp->country }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.corporatesApp.fields.postal_code') }}
                        </th>
                        <td>
                            {{ $corporatesApp->postal_code }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.corporates-apps.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection