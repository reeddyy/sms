<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyResultsModuleRequest;
use App\Http\Requests\StoreResultsModuleRequest;
use App\Http\Requests\UpdateResultsModuleRequest;
use App\Models\EnrolmentsQualification;
use App\Models\Grade;
use App\Models\Module;
use App\Models\ResultsModule;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ResultsModulesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('results_module_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $resultsModules = ResultsModule::with(['enrolment_no', 'module', 'grade'])->get();

        $enrolments_qualifications = EnrolmentsQualification::get();

        $modules = Module::get();

        $grades = Grade::get();

        return view('admin.resultsModules.index', compact('resultsModules', 'enrolments_qualifications', 'modules', 'grades'));
    }

    public function create()
    {
        abort_if(Gate::denies('results_module_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $enrolment_nos = EnrolmentsQualification::pluck('enrolment_no', 'id')->prepend(trans('global.pleaseSelect'), '');

        $modules = Module::pluck('module_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $grades = Grade::pluck('grade_letter', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.resultsModules.create', compact('enrolment_nos', 'modules', 'grades'));
    }

    public function store(StoreResultsModuleRequest $request)
    {
        $resultsModule = ResultsModule::create($request->all());

        return redirect()->route('admin.results-modules.index');
    }

    public function edit(ResultsModule $resultsModule)
    {
        abort_if(Gate::denies('results_module_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $enrolment_nos = EnrolmentsQualification::pluck('enrolment_no', 'id')->prepend(trans('global.pleaseSelect'), '');

        $modules = Module::pluck('module_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $grades = Grade::pluck('grade_letter', 'id')->prepend(trans('global.pleaseSelect'), '');

        $resultsModule->load('enrolment_no', 'module', 'grade');

        return view('admin.resultsModules.edit', compact('enrolment_nos', 'modules', 'grades', 'resultsModule'));
    }

    public function update(UpdateResultsModuleRequest $request, ResultsModule $resultsModule)
    {
        $resultsModule->update($request->all());

        return redirect()->route('admin.results-modules.index');
    }

    public function show(ResultsModule $resultsModule)
    {
        abort_if(Gate::denies('results_module_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $resultsModule->load('enrolment_no', 'module', 'grade');

        return view('admin.resultsModules.show', compact('resultsModule'));
    }

    public function destroy(ResultsModule $resultsModule)
    {
        abort_if(Gate::denies('results_module_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $resultsModule->delete();

        return back();
    }

    public function massDestroy(MassDestroyResultsModuleRequest $request)
    {
        ResultsModule::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
