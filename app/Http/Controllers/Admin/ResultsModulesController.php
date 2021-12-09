<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyResultsModuleRequest;
use App\Http\Requests\StoreResultsModuleRequest;
use App\Http\Requests\UpdateResultsModuleRequest;
use App\Models\Achievement;
use App\Models\EnrolmentsQualification;
use App\Models\Grade;
use App\Models\Module;
use App\Models\ResultsModule;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ResultsModulesController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('results_module_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $resultsModules = ResultsModule::with(['enrolment_no', 'module_1', 'grade_1', 'module_2', 'grade_2', 'module_3', 'grade_3', 'module_4', 'grade_4', 'module_5', 'grade_5', 'module_6', 'grade_6', 'achievement_title'])->get();

        $enrolments_qualifications = EnrolmentsQualification::get();

        $modules = Module::get();

        $grades = Grade::get();

        $achievements = Achievement::get();

        return view('admin.resultsModules.index', compact('resultsModules', 'enrolments_qualifications', 'modules', 'grades', 'achievements'));
    }

    public function create()
    {
        abort_if(Gate::denies('results_module_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $enrolment_nos = EnrolmentsQualification::select('id', 'enrolment_no', 'student_name_id')->get();

        $module_1s = Module::pluck('module_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $grade_1s = Grade::pluck('grade_letter', 'id')->prepend(trans('global.pleaseSelect'), '');

        $module_2s = Module::pluck('module_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $grade_2s = Grade::pluck('grade_letter', 'id')->prepend(trans('global.pleaseSelect'), '');

        $module_3s = Module::pluck('module_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $grade_3s = Grade::pluck('grade_letter', 'id')->prepend(trans('global.pleaseSelect'), '');

        $module_4s = Module::pluck('module_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $grade_4s = Grade::pluck('grade_letter', 'id')->prepend(trans('global.pleaseSelect'), '');

        $module_5s = Module::pluck('module_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $grade_5s = Grade::pluck('grade_letter', 'id')->prepend(trans('global.pleaseSelect'), '');

        $module_6s = Module::pluck('module_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $grade_6s = Grade::pluck('grade_letter', 'id')->prepend(trans('global.pleaseSelect'), '');

        $grade_points = Grade::select('id', 'grade_letter', 'grade_point_s')->get();

        $achievement_titles = Achievement::pluck('achievement_title', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.resultsModules.create', compact('enrolment_nos', 'module_1s', 'grade_points', 'grade_1s', 'module_2s', 'grade_2s', 'module_3s', 'grade_3s', 'module_4s', 'grade_4s', 'module_5s', 'grade_5s', 'module_6s', 'grade_6s', 'achievement_titles'));
    }

    public function store(StoreResultsModuleRequest $request)
    {
        $grades = Grade::all();

        $g1 = $request->grade_1_id ? ($grades->where('id', $request->grade_1_id)->first())->grade_point_s : 0;
        $g2 = $request->grade_2_id ? ($grades->where('id', $request->grade_2_id)->first())->grade_point_s : 0;
        $g3 = $request->grade_3_id ? ($grades->where('id', $request->grade_3_id)->first())->grade_point_s : 0;
        $g4 = $request->grade_4_id ? ($grades->where('id', $request->grade_4_id)->first())->grade_point_s : 0;
        $g5 = $request->grade_5_id ? ($grades->where('id', $request->grade_5_id)->first())->grade_point_s : 0;
        $g6 = $request->grade_6_id ? ($grades->where('id', $request->grade_6_id)->first())->grade_point_s : 0;

        $total_points = $g1 + $g2 + $g3 + $g4 + $g5 + $g6;

        $request->request->add(['total_result_points' => $total_points]);

        $resultsModule = ResultsModule::create($request->all());

        return redirect()->route('admin.results-modules.index');
    }

    public function edit(ResultsModule $resultsModule)
    {
        abort_if(Gate::denies('results_module_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $enrolment_nos = EnrolmentsQualification::select('id', 'enrolment_no', 'student_name_id')->get();

        $module_1s = Module::pluck('module_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $grade_1s = Grade::pluck('grade_letter', 'id')->prepend(trans('global.pleaseSelect'), '');

        $module_2s = Module::pluck('module_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $grade_2s = Grade::pluck('grade_letter', 'id')->prepend(trans('global.pleaseSelect'), '');

        $module_3s = Module::pluck('module_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $grade_3s = Grade::pluck('grade_letter', 'id')->prepend(trans('global.pleaseSelect'), '');

        $module_4s = Module::pluck('module_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $grade_4s = Grade::pluck('grade_letter', 'id')->prepend(trans('global.pleaseSelect'), '');

        $module_5s = Module::pluck('module_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $grade_5s = Grade::pluck('grade_letter', 'id')->prepend(trans('global.pleaseSelect'), '');

        $module_6s = Module::pluck('module_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $grade_6s = Grade::pluck('grade_letter', 'id')->prepend(trans('global.pleaseSelect'), '');

        $grade_points = Grade::select('id', 'grade_letter', 'grade_point_s')->get();

        $achievement_titles = Achievement::pluck('achievement_title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $resultsModule->load('enrolment_no', 'module_1', 'grade_1', 'module_2', 'grade_2', 'module_3', 'grade_3', 'module_4', 'grade_4', 'module_5', 'grade_5', 'module_6', 'grade_6', 'achievement_title');

        return view('admin.resultsModules.edit', compact('grade_points', 'enrolment_nos', 'module_1s', 'grade_1s', 'module_2s', 'grade_2s', 'module_3s', 'grade_3s', 'module_4s', 'grade_4s', 'module_5s', 'grade_5s', 'module_6s', 'grade_6s', 'achievement_titles', 'resultsModule'));
    }

    public function update(UpdateResultsModuleRequest $request, ResultsModule $resultsModule)
    {
        $grades = Grade::all();

        $g1 = $request->grade_1_id ? ($grades->where('id', $request->grade_1_id)->first())->grade_point_s : 0;
        $g2 = $request->grade_2_id ? ($grades->where('id', $request->grade_2_id)->first())->grade_point_s : 0;
        $g3 = $request->grade_3_id ? ($grades->where('id', $request->grade_3_id)->first())->grade_point_s : 0;
        $g4 = $request->grade_4_id ? ($grades->where('id', $request->grade_4_id)->first())->grade_point_s : 0;
        $g5 = $request->grade_5_id ? ($grades->where('id', $request->grade_5_id)->first())->grade_point_s : 0;
        $g6 = $request->grade_6_id ? ($grades->where('id', $request->grade_6_id)->first())->grade_point_s : 0;

        $total_points = $g1 + $g2 + $g3 + $g4 + $g5 + $g6;

        $request->request->add(['total_result_points' => $total_points]);

        $resultsModule->update($request->all());

        return redirect()->route('admin.results-modules.index');
    }

    public function show(ResultsModule $resultsModule)
    {
        abort_if(Gate::denies('results_module_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $resultsModule->load('enrolment_no', 'module_1', 'grade_1', 'module_2', 'grade_2', 'module_3', 'grade_3', 'module_4', 'grade_4', 'module_5', 'grade_5', 'module_6', 'grade_6', 'achievement_title');

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
