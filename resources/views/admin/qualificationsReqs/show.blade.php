@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.qualificationsReq.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.qualifications-reqs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsReq.fields.id') }}
                        </th>
                        <td>
                            {{ $qualificationsReq->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsReq.fields.status') }}
                        </th>
                        <td>
                            @foreach($qualificationsReq->statuses as $key => $status)
                                <span class="label label-info">{{ $status->status_name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsReq.fields.course') }}
                        </th>
                        <td>
                            {{ $qualificationsReq->course }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsReq.fields.level') }}
                        </th>
                        <td>
                            {{ $qualificationsReq->level }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsReq.fields.hear_about_us') }}
                        </th>
                        <td>
                            {{ $qualificationsReq->hear_about_us }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsReq.fields.name') }}
                        </th>
                        <td>
                            {{ $qualificationsReq->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsReq.fields.designation') }}
                        </th>
                        <td>
                            {{ $qualificationsReq->designation }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsReq.fields.job_function') }}
                        </th>
                        <td>
                            {{ $qualificationsReq->job_function }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsReq.fields.company_name') }}
                        </th>
                        <td>
                            {{ $qualificationsReq->company_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsReq.fields.industry') }}
                        </th>
                        <td>
                            {{ $qualificationsReq->industry }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsReq.fields.contact_no') }}
                        </th>
                        <td>
                            {{ $qualificationsReq->contact_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsReq.fields.email') }}
                        </th>
                        <td>
                            {{ $qualificationsReq->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.qualificationsReq.fields.note') }}
                        </th>
                        <td>
                            {{ $qualificationsReq->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.qualifications-reqs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection