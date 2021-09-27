<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyResultsDigitalModuleRequest;
use App\Http\Requests\StoreResultsDigitalModuleRequest;
use App\Http\Requests\UpdateResultsDigitalModuleRequest;
use App\Models\DigitalModule;
use App\Models\EnrolmentsQualification;
use App\Models\Grade;
use App\Models\ResultsDigitalModule;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ResultsDigitalModulesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('results_digital_module_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $resultsDigitalModules = ResultsDigitalModule::with(['enrolment_no', 'module', 'grade'])->get();

        $enrolments_qualifications = EnrolmentsQualification::get();

        $digital_modules = DigitalModule::get();

        $grades = Grade::get();

        return view('admin.resultsDigitalModules.index', compact('resultsDigitalModules', 'enrolments_qualifications', 'digital_modules', 'grades'));
    }

    public function create()
    {
        abort_if(Gate::denies('results_digital_module_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $enrolment_nos = EnrolmentsQualification::pluck('enrolment_no', 'id')->prepend(trans('global.pleaseSelect'), '');

        $modules = DigitalModule::pluck('module_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $grades = Grade::pluck('grade_letter', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.resultsDigitalModules.create', compact('enrolment_nos', 'modules', 'grades'));
    }

    public function store(StoreResultsDigitalModuleRequest $request)
    {
        $resultsDigitalModule = ResultsDigitalModule::create($request->all());

        return redirect()->route('admin.results-digital-modules.index');
    }

    public function edit(ResultsDigitalModule $resultsDigitalModule)
    {
        abort_if(Gate::denies('results_digital_module_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $enrolment_nos = EnrolmentsQualification::pluck('enrolment_no', 'id')->prepend(trans('global.pleaseSelect'), '');

        $modules = DigitalModule::pluck('module_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $grades = Grade::pluck('grade_letter', 'id')->prepend(trans('global.pleaseSelect'), '');

        $resultsDigitalModule->load('enrolment_no', 'module', 'grade');

        return view('admin.resultsDigitalModules.edit', compact('enrolment_nos', 'modules', 'grades', 'resultsDigitalModule'));
    }

    public function update(UpdateResultsDigitalModuleRequest $request, ResultsDigitalModule $resultsDigitalModule)
    {
        $resultsDigitalModule->update($request->all());

        return redirect()->route('admin.results-digital-modules.index');
    }

    public function show(ResultsDigitalModule $resultsDigitalModule)
    {
        abort_if(Gate::denies('results_digital_module_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $resultsDigitalModule->load('enrolment_no', 'module', 'grade');

        return view('admin.resultsDigitalModules.show', compact('resultsDigitalModule'));
    }

    public function destroy(ResultsDigitalModule $resultsDigitalModule)
    {
        abort_if(Gate::denies('results_digital_module_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $resultsDigitalModule->delete();

        return back();
    }

    public function massDestroy(MassDestroyResultsDigitalModuleRequest $request)
    {
        ResultsDigitalModule::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
