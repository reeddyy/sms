@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.grade.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.grades.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.grade.fields.id') }}
                        </th>
                        <td>
                            {{ $grade->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.grade.fields.grade_letter') }}
                        </th>
                        <td>
                            {{ $grade->grade_letter }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.grade.fields.grade_description') }}
                        </th>
                        <td>
                            {{ $grade->grade_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.grade.fields.grade_point_s') }}
                        </th>
                        <td>
                            {{ $grade->grade_point_s }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.grade.fields.grade_marks') }}
                        </th>
                        <td>
                            {{ $grade->grade_marks }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.grade.fields.note') }}
                        </th>
                        <td>
                            {{ $grade->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.grades.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection