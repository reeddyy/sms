<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyAdaAppRequest;
use App\Http\Requests\StoreAdaAppRequest;
use App\Http\Requests\UpdateAdaAppRequest;
use App\Models\AdaApp;
use App\Models\StatusApp;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdaAppController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('ada_app_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $adaApps = AdaApp::with(['statuses'])->get();

        $status_apps = StatusApp::get();

        return view('admin.adaApps.index', compact('adaApps', 'status_apps'));
    }

    public function create()
    {
        abort_if(Gate::denies('ada_app_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statuses = StatusApp::pluck('status_name', 'id');

        return view('admin.adaApps.create', compact('statuses'));
    }

    public function store(StoreAdaAppRequest $request)
    {
        $adaApp = AdaApp::create($request->all());
        $adaApp->statuses()->sync($request->input('statuses', []));

        return redirect()->route('admin.ada-apps.index');
    }

    public function edit(AdaApp $adaApp)
    {
        abort_if(Gate::denies('ada_app_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statuses = StatusApp::pluck('status_name', 'id');

        $adaApp->load('statuses');

        return view('admin.adaApps.edit', compact('statuses', 'adaApp'));
    }

    public function update(UpdateAdaAppRequest $request, AdaApp $adaApp)
    {
        $adaApp->update($request->all());
        $adaApp->statuses()->sync($request->input('statuses', []));

        return redirect()->route('admin.ada-apps.index');
    }

    public function show(AdaApp $adaApp)
    {
        abort_if(Gate::denies('ada_app_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $adaApp->load('statuses', 'applicationNoApplicantsAdas');

        return view('admin.adaApps.show', compact('adaApp'));
    }

    public function destroy(AdaApp $adaApp)
    {
        abort_if(Gate::denies('ada_app_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $adaApp->delete();

        return back();
    }

    public function massDestroy(MassDestroyAdaAppRequest $request)
    {
        AdaApp::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
