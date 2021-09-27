<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCourseRequest;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Course;
use App\Models\DigitalModule;
use App\Models\Level;
use App\Models\Module;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CoursesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('course_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $courses = Course::with(['level', 'module_s', 'digital_module_s'])->get();

        $levels = Level::get();

        $modules = Module::get();

        $digital_modules = DigitalModule::get();

        return view('admin.courses.index', compact('courses', 'levels', 'modules', 'digital_modules'));
    }

    public function create()
    {
        abort_if(Gate::denies('course_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $levels = Level::pluck('level_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $module_s = Module::pluck('module_name', 'id');

        $digital_module_s = DigitalModule::pluck('module_name', 'id');

        return view('admin.courses.create', compact('levels', 'module_s', 'digital_module_s'));
    }

    public function store(StoreCourseRequest $request)
    {
        $course = Course::create($request->all());
        $course->module_s()->sync($request->input('module_s', []));
        $course->digital_module_s()->sync($request->input('digital_module_s', []));

        return redirect()->route('admin.courses.index');
    }

    public function edit(Course $course)
    {
        abort_if(Gate::denies('course_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $levels = Level::pluck('level_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $module_s = Module::pluck('module_name', 'id');

        $digital_module_s = DigitalModule::pluck('module_name', 'id');

        $course->load('level', 'module_s', 'digital_module_s');

        return view('admin.courses.edit', compact('levels', 'module_s', 'digital_module_s', 'course'));
    }

    public function update(UpdateCourseRequest $request, Course $course)
    {
        $course->update($request->all());
        $course->module_s()->sync($request->input('module_s', []));
        $course->digital_module_s()->sync($request->input('digital_module_s', []));

        return redirect()->route('admin.courses.index');
    }

    public function show(Course $course)
    {
        abort_if(Gate::denies('course_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $course->load('level', 'module_s', 'digital_module_s', 'courseTitleEnrolmentsQualifications');

        return view('admin.courses.show', compact('course'));
    }

    public function destroy(Course $course)
    {
        abort_if(Gate::denies('course_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $course->delete();

        return back();
    }

    public function massDestroy(MassDestroyCourseRequest $request)
    {
        Course::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
