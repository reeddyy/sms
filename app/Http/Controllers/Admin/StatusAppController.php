<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyStatusAppRequest;
use App\Http\Requests\StoreStatusAppRequest;
use App\Http\Requests\UpdateStatusAppRequest;
use App\Models\StatusApp;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StatusAppController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('status_app_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statusApps = StatusApp::all();

        return view('admin.statusApps.index', compact('statusApps'));
    }

    public function create()
    {
        abort_if(Gate::denies('status_app_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.statusApps.create');
    }

    public function store(StoreStatusAppRequest $request)
    {
        $statusApp = StatusApp::create($request->all());

        return redirect()->route('admin.status-apps.index');
    }

    public function edit(StatusApp $statusApp)
    {
        abort_if(Gate::denies('status_app_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.statusApps.edit', compact('statusApp'));
    }

    public function update(UpdateStatusAppRequest $request, StatusApp $statusApp)
    {
        $statusApp->update($request->all());

        return redirect()->route('admin.status-apps.index');
    }

    public function show(StatusApp $statusApp)
    {
        abort_if(Gate::denies('status_app_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statusApp->load('statusQualificationsApps', 'statusEdpApps', 'statusCorporatesApps', 'statusIndividualsApps', 'statusAdaApps');

        return view('admin.statusApps.show', compact('statusApp'));
    }

    public function destroy(StatusApp $statusApp)
    {
        abort_if(Gate::denies('status_app_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statusApp->delete();

        return back();
    }

    public function massDestroy(MassDestroyStatusAppRequest $request)
    {
        StatusApp::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
