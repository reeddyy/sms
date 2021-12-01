<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyStatusEdpRequest;
use App\Http\Requests\StoreStatusEdpRequest;
use App\Http\Requests\UpdateStatusEdpRequest;
use App\Models\StatusEdp;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StatusEdpController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('status_edp_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statusEdps = StatusEdp::all();

        return view('admin.statusEdps.index', compact('statusEdps'));
    }

    public function create()
    {
        abort_if(Gate::denies('status_edp_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.statusEdps.create');
    }

    public function store(StoreStatusEdpRequest $request)
    {
        $statusEdp = StatusEdp::create($request->all());

        return redirect()->route('admin.status-edps.index');
    }

    public function edit(StatusEdp $statusEdp)
    {
        abort_if(Gate::denies('status_edp_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.statusEdps.edit', compact('statusEdp'));
    }

    public function update(UpdateStatusEdpRequest $request, StatusEdp $statusEdp)
    {
        $statusEdp->update($request->all());

        return redirect()->route('admin.status-edps.index');
    }

    public function show(StatusEdp $statusEdp)
    {
        abort_if(Gate::denies('status_edp_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statusEdp->load('statusAdmissionsEdps');

        return view('admin.statusEdps.show', compact('statusEdp'));
    }

    public function destroy(StatusEdp $statusEdp)
    {
        abort_if(Gate::denies('status_edp_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statusEdp->delete();

        return back();
    }

    public function massDestroy(MassDestroyStatusEdpRequest $request)
    {
        StatusEdp::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
