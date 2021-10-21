@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.classIntake.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.class-intakes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.classIntake.fields.id') }}
                        </th>
                        <td>
                            {{ $classIntake->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.classIntake.fields.class_name') }}
                        </th>
                        <td>
                            {{ $classIntake->class_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.classIntake.fields.note') }}
                        </th>
                        <td>
                            {{ $classIntake->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.class-intakes.index') }}">
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
            <a class="nav-link" href="#classes_enrolments_qualifications" role="tab" data-toggle="tab">
                {{ trans('cruds.enrolmentsQualification.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="classes_enrolments_qualifications">
            @includeIf('admin.classIntakes.relationships.classesEnrolmentsQualifications', ['enrolmentsQualifications' => $classIntake->classesEnrolmentsQualifications])
        </div>
    </div>
</div>

@endsection