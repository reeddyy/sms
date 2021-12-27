<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyClassIntakeRequest;
use App\Http\Requests\StoreClassIntakeRequest;
use App\Http\Requests\UpdateClassIntakeRequest;
use App\Models\ClassIntake;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ClassIntakesController extends Controller
{
    use CsvImportTrait;
    
    public function index()
    {
        abort_if(Gate::denies('class_intake_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $classIntakes = ClassIntake::all();

        return view('admin.classIntakes.index', compact('classIntakes'));
    }

    public function create()
    {
        abort_if(Gate::denies('class_intake_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.classIntakes.create');
    }

    public function store(StoreClassIntakeRequest $request)
    {
        $classIntake = ClassIntake::create($request->all());

        return redirect()->route('admin.class-intakes.index');
    }

    public function edit(ClassIntake $classIntake)
    {
        abort_if(Gate::denies('class_intake_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.classIntakes.edit', compact('classIntake'));
    }

    public function update(UpdateClassIntakeRequest $request, ClassIntake $classIntake)
    {
        $classIntake->update($request->all());

        return redirect()->route('admin.class-intakes.index');
    }

    public function show(ClassIntake $classIntake)
    {
        abort_if(Gate::denies('class_intake_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $classIntake->load('classesEnrolmentsQualifications');

        return view('admin.classIntakes.show', compact('classIntake'));
    }

    public function destroy(ClassIntake $classIntake)
    {
        abort_if(Gate::denies('class_intake_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $classIntake->delete();

        return back();
    }

    public function massDestroy(MassDestroyClassIntakeRequest $request)
    {
        ClassIntake::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
