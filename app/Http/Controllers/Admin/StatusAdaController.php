<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyStatusAdaRequest;
use App\Http\Requests\StoreStatusAdaRequest;
use App\Http\Requests\UpdateStatusAdaRequest;
use App\Models\StatusAda;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StatusAdaController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('status_ada_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statusAdas = StatusAda::all();

        return view('admin.statusAdas.index', compact('statusAdas'));
    }

    public function create()
    {
        abort_if(Gate::denies('status_ada_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.statusAdas.create');
    }

    public function store(StoreStatusAdaRequest $request)
    {
        $statusAda = StatusAda::create($request->all());

        return redirect()->route('admin.status-adas.index');
    }

    public function edit(StatusAda $statusAda)
    {
        abort_if(Gate::denies('status_ada_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.statusAdas.edit', compact('statusAda'));
    }

    public function update(UpdateStatusAdaRequest $request, StatusAda $statusAda)
    {
        $statusAda->update($request->all());

        return redirect()->route('admin.status-adas.index');
    }

    public function show(StatusAda $statusAda)
    {
        abort_if(Gate::denies('status_ada_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statusAda->load('statusApplicantsAdas');

        return view('admin.statusAdas.show', compact('statusAda'));
    }

    public function destroy(StatusAda $statusAda)
    {
        abort_if(Gate::denies('status_ada_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statusAda->delete();

        return back();
    }

    public function massDestroy(MassDestroyStatusAdaRequest $request)
    {
        StatusAda::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
