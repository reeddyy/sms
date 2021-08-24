@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.course.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.courses.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.id') }}
                        </th>
                        <td>
                            {{ $course->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.course_name') }}
                        </th>
                        <td>
                            {{ $course->course_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.course_abbr') }}
                        </th>
                        <td>
                            {{ $course->course_abbr }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.course_level') }}
                        </th>
                        <td>
                            {{ App\Models\Course::COURSE_LEVEL_RADIO[$course->course_level] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.course_modules') }}
                        </th>
                        <td>
                            @foreach($course->course_modules as $key => $course_modules)
                                <span class="label label-info">{{ $course_modules->module_name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.course_duration') }}
                        </th>
                        <td>
                            {{ $course->course_duration }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.course_total_fee') }}
                        </th>
                        <td>
                            {{ $course->course_total_fee }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.course_fee') }}
                        </th>
                        <td>
                            {{ $course->course_fee }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.m_el_fee') }}
                        </th>
                        <td>
                            {{ $course->m_el_fee }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.examination_fee') }}
                        </th>
                        <td>
                            {{ $course->examination_fee }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.registration_fee') }}
                        </th>
                        <td>
                            {{ $course->registration_fee }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.no_of_instalment') }}
                        </th>
                        <td>
                            {{ $course->no_of_instalment }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.instalment_1_fee') }}
                        </th>
                        <td>
                            {{ $course->instalment_1_fee }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.instalment_2_fee') }}
                        </th>
                        <td>
                            {{ $course->instalment_2_fee }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.instalment_3_fee') }}
                        </th>
                        <td>
                            {{ $course->instalment_3_fee }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.courses.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection