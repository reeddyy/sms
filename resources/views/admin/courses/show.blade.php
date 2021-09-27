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
                            {{ trans('cruds.course.fields.course_title') }}
                        </th>
                        <td>
                            {{ $course->course_title }}
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
                            {{ trans('cruds.course.fields.duration_month') }}
                        </th>
                        <td>
                            {{ $course->duration_month }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.level') }}
                        </th>
                        <td>
                            {{ $course->level->level_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.module_s') }}
                        </th>
                        <td>
                            @foreach($course->module_s as $key => $module_s)
                                <span class="label label-info">{{ $module_s->module_name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.digital_module_s') }}
                        </th>
                        <td>
                            @foreach($course->digital_module_s as $key => $digital_module_s)
                                <span class="label label-info">{{ $digital_module_s->module_name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.member_rate') }}
                        </th>
                        <td>
                            {{ $course->member_rate }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.public_rate') }}
                        </th>
                        <td>
                            {{ $course->public_rate }}
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
                            {{ trans('cruds.course.fields.instalment_fee_1st') }}
                        </th>
                        <td>
                            {{ $course->instalment_fee_1st }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.instalment_fee_2nd') }}
                        </th>
                        <td>
                            {{ $course->instalment_fee_2nd }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.instalment_fee_3rd') }}
                        </th>
                        <td>
                            {{ $course->instalment_fee_3rd }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.course_status') }}
                        </th>
                        <td>
                            {{ App\Models\Course::COURSE_STATUS_RADIO[$course->course_status] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.note') }}
                        </th>
                        <td>
                            {{ $course->note }}
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

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#course_title_enrolments_qualifications" role="tab" data-toggle="tab">
                {{ trans('cruds.enrolmentsQualification.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="course_title_enrolments_qualifications">
            @includeIf('admin.courses.relationships.courseTitleEnrolmentsQualifications', ['enrolmentsQualifications' => $course->courseTitleEnrolmentsQualifications])
        </div>
    </div>
</div>

@endsection