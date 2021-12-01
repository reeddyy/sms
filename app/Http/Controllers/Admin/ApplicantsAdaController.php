<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyApplicantsAdaRequest;
use App\Http\Requests\StoreApplicantsAdaRequest;
use App\Http\Requests\UpdateApplicantsAdaRequest;
use App\Models\AdaApp;
use App\Models\ApplicantsAda;
use App\Models\Award;
use App\Models\Individual;
use App\Models\StatusAda;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApplicantsAdaController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('applicants_ada_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $applicantsAdas = ApplicantsAda::with(['statuses', 'application_no', 'award_name', 'applicant_name'])->get();

        $status_adas = StatusAda::get();

        $ada_apps = AdaApp::get();

        $awards = Award::get();

        $individuals = Individual::get();

        return view('admin.applicantsAdas.index', compact('applicantsAdas', 'status_adas', 'ada_apps', 'awards', 'individuals'));
    }

    public function create()
    {
        abort_if(Gate::denies('applicants_ada_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statuses = StatusAda::pluck('status_name', 'id');

        $application_nos = AdaApp::pluck('application_no', 'id')->prepend(trans('global.pleaseSelect'), '');

        $award_names = Award::pluck('award_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $applicant_names = Individual::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.applicantsAdas.create', compact('statuses', 'application_nos', 'award_names', 'applicant_names'));
    }

    public function store(StoreApplicantsAdaRequest $request)
    {
        $applicantsAda = ApplicantsAda::create($request->all());
        $applicantsAda->statuses()->sync($request->input('statuses', []));

        return redirect()->route('admin.applicants-adas.index');
    }

    public function edit(ApplicantsAda $applicantsAda)
    {
        abort_if(Gate::denies('applicants_ada_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statuses = StatusAda::pluck('status_name', 'id');

        $application_nos = AdaApp::pluck('application_no', 'id')->prepend(trans('global.pleaseSelect'), '');

        $award_names = Award::pluck('award_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $applicant_names = Individual::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $applicantsAda->load('statuses', 'application_no', 'award_name', 'applicant_name');

        return view('admin.applicantsAdas.edit', compact('statuses', 'application_nos', 'award_names', 'applicant_names', 'applicantsAda'));
    }

    public function update(UpdateApplicantsAdaRequest $request, ApplicantsAda $applicantsAda)
    {
        $applicantsAda->update($request->all());
        $applicantsAda->statuses()->sync($request->input('statuses', []));

        return redirect()->route('admin.applicants-adas.index');
    }

    public function show(ApplicantsAda $applicantsAda)
    {
        abort_if(Gate::denies('applicants_ada_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $applicantsAda->load('ada_statusstatuses', 'application_no', 'award_name', 'applicant_name');

        return view('admin.applicantsAdas.show', compact('applicantsAda'));
    }

    public function destroy(ApplicantsAda $applicantsAda)
    {
        abort_if(Gate::denies('applicants_ada_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $applicantsAda->delete();

        return back();
    }

    public function massDestroy(MassDestroyApplicantsAdaRequest $request)
    {
        ApplicantsAda::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
