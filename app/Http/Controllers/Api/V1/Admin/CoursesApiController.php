<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCourseRequest;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\ClassIntake;
use App\Http\Resources\Admin\CourseResource;
use App\Models\Course;
use App\Models\Level;
use App\Models\Module;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CoursesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('course_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CourseResource(Course::with(['level', 'module_s', 'classes'])->get());
    }

    public function show(Course $course)
    {
        abort_if(Gate::denies('course_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CourseResource($course->load(['level', 'module_s', 'classes']));
    }
}
