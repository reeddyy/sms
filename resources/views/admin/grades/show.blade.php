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
                            {{ trans('cruds.grade.fields.grade') }}
                        </th>
                        <td>
                            {{ App\Models\Grade::GRADE_SELECT[$grade->grade] ?? '' }}
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
                            {{ trans('cruds.grade.fields.grade_point') }}
                        </th>
                        <td>
                            {{ $grade->grade_point }}
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