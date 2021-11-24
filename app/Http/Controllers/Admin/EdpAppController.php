<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyEdpAppRequest;
use App\Http\Requests\StoreEdpAppRequest;
use App\Http\Requests\UpdateEdpAppRequest;
use App\Models\EdpApp;
use App\Models\StatusApp;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EdpAppController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('edp_app_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $edpApps = EdpApp::with(['statuses'])->get();

        $status_apps = StatusApp::get();

        return view('admin.edpApps.index', compact('edpApps', 'status_apps'));
    }

    public function create()
    {
        abort_if(Gate::denies('edp_app_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statuses = StatusApp::pluck('status_name', 'id');

        return view('admin.edpApps.create', compact('statuses'));
    }

    public function store(StoreEdpAppRequest $request)
    {
        $edpApp = EdpApp::create($request->all());
        $edpApp->statuses()->sync($request->input('statuses', []));

        return redirect()->route('admin.edp-apps.index');
    }

    public function edit(EdpApp $edpApp)
    {
        abort_if(Gate::denies('edp_app_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statuses = StatusApp::pluck('status_name', 'id');

        $edpApp->load('statuses');

        return view('admin.edpApps.edit', compact('statuses', 'edpApp'));
    }

    public function update(UpdateEdpAppRequest $request, EdpApp $edpApp)
    {
        $edpApp->update($request->all());
        $edpApp->statuses()->sync($request->input('statuses', []));

        return redirect()->route('admin.edp-apps.index');
    }

    public function show(EdpApp $edpApp)
    {
        abort_if(Gate::denies('edp_app_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $edpApp->load('statuses');

        return view('admin.edpApps.show', compact('edpApp'));
    }

    public function destroy(EdpApp $edpApp)
    {
        abort_if(Gate::denies('edp_app_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $edpApp->delete();

        return back();
    }

    public function massDestroy(MassDestroyEdpAppRequest $request)
    {
        EdpApp::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
