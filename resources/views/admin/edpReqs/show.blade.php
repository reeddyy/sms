@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.edpReq.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.edp-reqs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.edpReq.fields.id') }}
                        </th>
                        <td>
                            {{ $edpReq->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpReq.fields.status') }}
                        </th>
                        <td>
                            @foreach($edpReq->statuses as $key => $status)
                                <span class="label label-info">{{ $status->status_name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpReq.fields.programme') }}
                        </th>
                        <td>
                            {{ $edpReq->programme }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpReq.fields.level') }}
                        </th>
                        <td>
                            {{ $edpReq->level }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpReq.fields.hear_about_us') }}
                        </th>
                        <td>
                            {{ $edpReq->hear_about_us }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpReq.fields.name') }}
                        </th>
                        <td>
                            {{ $edpReq->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpReq.fields.designation') }}
                        </th>
                        <td>
                            {{ $edpReq->designation }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpReq.fields.job_function') }}
                        </th>
                        <td>
                            {{ $edpReq->job_function }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpReq.fields.company_name') }}
                        </th>
                        <td>
                            {{ $edpReq->company_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpReq.fields.industry') }}
                        </th>
                        <td>
                            {{ $edpReq->industry }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpReq.fields.contact_no') }}
                        </th>
                        <td>
                            {{ $edpReq->contact_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpReq.fields.email') }}
                        </th>
                        <td>
                            {{ $edpReq->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.edpReq.fields.note') }}
                        </th>
                        <td>
                            {{ $edpReq->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.edp-reqs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection