<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyCorporatesAppRequest;
use App\Http\Requests\StoreCorporatesAppRequest;
use App\Http\Requests\UpdateCorporatesAppRequest;
use App\Models\CorporatesApp;
use App\Models\StatusApp;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Helpers\ApplicationNoHelper;

class CorporatesAppController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('corporates_app_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $corporatesApps = CorporatesApp::with(['statuses'])->get();

        $status_apps = StatusApp::get();

        return view('admin.corporatesApps.index', compact('corporatesApps', 'status_apps'));
    }

    public function create()
    {
        abort_if(Gate::denies('corporates_app_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statuses = StatusApp::pluck('status_name', 'id');

        return view('admin.corporatesApps.create', compact('statuses'));
    }

    public function store(StoreCorporatesAppRequest $request)
    {
        $corporatesApp = CorporatesApp::create([$request->except(['application_no']), 'application_no'=> ApplicationNoHelper::getAppNo('CorporatesApp')]);
        $corporatesApp->statuses()->sync($request->input('statuses', []));

        return redirect()->route('admin.corporates-apps.index');
    }

    public function edit(CorporatesApp $corporatesApp)
    {
        abort_if(Gate::denies('corporates_app_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statuses = StatusApp::pluck('status_name', 'id');

        $corporatesApp->load('statuses');

        return view('admin.corporatesApps.edit', compact('statuses', 'corporatesApp'));
    }

    public function update(UpdateCorporatesAppRequest $request, CorporatesApp $corporatesApp)
    {
        $corporatesApp->update($request->except(['application_no']));
        $corporatesApp->statuses()->sync($request->input('statuses', []));

        return redirect()->route('admin.corporates-apps.index');
    }

    public function show(CorporatesApp $corporatesApp)
    {
        abort_if(Gate::denies('corporates_app_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $corporatesApp->load('statuses', 'applicationNoMembershipsCorporates');

        return view('admin.corporatesApps.show', compact('corporatesApp'));
    }

    public function destroy(CorporatesApp $corporatesApp)
    {
        abort_if(Gate::denies('corporates_app_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $corporatesApp->delete();

        return back();
    }

    public function massDestroy(MassDestroyCorporatesAppRequest $request)
    {
        CorporatesApp::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
