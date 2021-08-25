@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.individual.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.individuals.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.individual.fields.id') }}
                        </th>
                        <td>
                            {{ $individual->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individual.fields.title') }}
                        </th>
                        <td>
                            {{ App\Models\Individual::TITLE_SELECT[$individual->title] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individual.fields.name') }}
                        </th>
                        <td>
                            {{ $individual->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individual.fields.nric_fin') }}
                        </th>
                        <td>
                            {{ $individual->nric_fin }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individual.fields.email_address') }}
                        </th>
                        <td>
                            {{ $individual->email_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.individual.fields.note') }}
                        </th>
                        <td>
                            {{ $individual->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.individuals.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection