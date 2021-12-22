<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyIndividualsAppRequest;
use App\Http\Requests\StoreIndividualsAppRequest;
use App\Http\Requests\UpdateIndividualsAppRequest;
use App\Models\IndividualsApp;
use App\Models\StatusApp;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Helpers\ApplicationNoHelper;

class IndividualsAppController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('individuals_app_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $individualsApps = IndividualsApp::with(['statuses'])->get();

        $status_apps = StatusApp::get();

        return view('admin.individualsApps.index', compact('individualsApps', 'status_apps'));
    }

    public function create()
    {
        abort_if(Gate::denies('individuals_app_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statuses = StatusApp::pluck('status_name', 'id');

        return view('admin.individualsApps.create', compact('statuses'));
    }

    public function store(StoreIndividualsAppRequest $request)
    {
        $individualsApp = IndividualsApp::create(array_merge($request->except(['application_no']), ['application_no'=> ApplicationNoHelper::getAppNo('IndividualsApp')]));
        $individualsApp->statuses()->sync($request->input('statuses', []));

        return redirect()->route('admin.individuals-apps.index');
    }

    public function edit(IndividualsApp $individualsApp)
    {
        abort_if(Gate::denies('individuals_app_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statuses = StatusApp::pluck('status_name', 'id');

        $individualsApp->load('statuses');

        return view('admin.individualsApps.edit', compact('statuses', 'individualsApp'));
    }

    public function update(UpdateIndividualsAppRequest $request, IndividualsApp $individualsApp)
    {
        $individualsApp->update($request->except(['application_no']));
        $individualsApp->statuses()->sync($request->input('statuses', []));

        return redirect()->route('admin.individuals-apps.index');
    }

    public function show(IndividualsApp $individualsApp)
    {
        abort_if(Gate::denies('individuals_app_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $individualsApp->load('statuses', 'applicationNoMembershipsIndividuals');

        return view('admin.individualsApps.show', compact('individualsApp'));
    }

    public function destroy(IndividualsApp $individualsApp)
    {
        abort_if(Gate::denies('individuals_app_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $individualsApp->delete();

        return back();
    }

    public function massDestroy(MassDestroyIndividualsAppRequest $request)
    {
        IndividualsApp::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
