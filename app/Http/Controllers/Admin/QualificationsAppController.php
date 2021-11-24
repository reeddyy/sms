<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyQualificationsAppRequest;
use App\Http\Requests\StoreQualificationsAppRequest;
use App\Http\Requests\UpdateQualificationsAppRequest;
use App\Models\QualificationsApp;
use App\Models\StatusApp;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class QualificationsAppController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('qualifications_app_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $qualificationsApps = QualificationsApp::with(['statuses'])->get();

        $status_apps = StatusApp::get();

        return view('admin.qualificationsApps.index', compact('qualificationsApps', 'status_apps'));
    }

    public function create()
    {
        abort_if(Gate::denies('qualifications_app_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statuses = StatusApp::pluck('status_name', 'id');

        return view('admin.qualificationsApps.create', compact('statuses'));
    }

    public function store(StoreQualificationsAppRequest $request)
    {
        $qualificationsApp = QualificationsApp::create($request->all());
        $qualificationsApp->statuses()->sync($request->input('statuses', []));

        return redirect()->route('admin.qualifications-apps.index');
    }

    public function edit(QualificationsApp $qualificationsApp)
    {
        abort_if(Gate::denies('qualifications_app_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statuses = StatusApp::pluck('status_name', 'id');

        $qualificationsApp->load('statuses');

        return view('admin.qualificationsApps.edit', compact('statuses', 'qualificationsApp'));
    }

    public function update(UpdateQualificationsAppRequest $request, QualificationsApp $qualificationsApp)
    {
        $qualificationsApp->update($request->all());
        $qualificationsApp->statuses()->sync($request->input('statuses', []));

        return redirect()->route('admin.qualifications-apps.index');
    }

    public function show(QualificationsApp $qualificationsApp)
    {
        abort_if(Gate::denies('qualifications_app_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $qualificationsApp->load('statuses', 'applicationNoEnrolmentsQualifications');

        return view('admin.qualificationsApps.show', compact('qualificationsApp'));
    }

    public function destroy(QualificationsApp $qualificationsApp)
    {
        abort_if(Gate::denies('qualifications_app_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $qualificationsApp->delete();

        return back();
    }

    public function massDestroy(MassDestroyQualificationsAppRequest $request)
    {
        QualificationsApp::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
