<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyQualificationRequest;
use App\Http\Requests\StoreQualificationRequest;
use App\Http\Requests\UpdateQualificationRequest;
use App\Models\Course;
use App\Models\Grade;
use App\Models\Individual;
use App\Models\Module;
use App\Models\Qualification;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class QualificationsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('qualification_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $qualifications = Qualification::with(['student_name', 'course_name', 'module_name', 'module_grade'])->get();

        return view('admin.qualifications.index', compact('qualifications'));
    }

    public function create()
    {
        abort_if(Gate::denies('qualification_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $student_names = Individual::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $course_names = Course::pluck('course_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $module_names = Module::pluck('module_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $module_grades = Grade::pluck('grade', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.qualifications.create', compact('student_names', 'course_names', 'module_names', 'module_grades'));
    }

    public function store(StoreQualificationRequest $request)
    {
        $qualification = Qualification::create($request->all());

        return redirect()->route('admin.qualifications.index');
    }

    public function edit(Qualification $qualification)
    {
        abort_if(Gate::denies('qualification_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $student_names = Individual::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $course_names = Course::pluck('course_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $module_names = Module::pluck('module_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $module_grades = Grade::pluck('grade', 'id')->prepend(trans('global.pleaseSelect'), '');

        $qualification->load('student_name', 'course_name', 'module_name', 'module_grade');

        return view('admin.qualifications.edit', compact('student_names', 'course_names', 'module_names', 'module_grades', 'qualification'));
    }

    public function update(UpdateQualificationRequest $request, Qualification $qualification)
    {
        $qualification->update($request->all());

        return redirect()->route('admin.qualifications.index');
    }

    public function show(Qualification $qualification)
    {
        abort_if(Gate::denies('qualification_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $qualification->load('student_name', 'course_name', 'module_name', 'module_grade');

        return view('admin.qualifications.show', compact('qualification'));
    }

    public function destroy(Qualification $qualification)
    {
        abort_if(Gate::denies('qualification_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $qualification->delete();

        return back();
    }

    public function massDestroy(MassDestroyQualificationRequest $request)
    {
        Qualification::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
