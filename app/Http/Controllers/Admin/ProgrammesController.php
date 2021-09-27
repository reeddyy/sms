<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyProgrammeRequest;
use App\Http\Requests\StoreProgrammeRequest;
use App\Http\Requests\UpdateProgrammeRequest;
use App\Models\Level;
use App\Models\Programme;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProgrammesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('programme_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $programmes = Programme::with(['level'])->get();

        $levels = Level::get();

        return view('admin.programmes.index', compact('programmes', 'levels'));
    }

    public function create()
    {
        abort_if(Gate::denies('programme_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $levels = Level::pluck('level_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.programmes.create', compact('levels'));
    }

    public function store(StoreProgrammeRequest $request)
    {
        $programme = Programme::create($request->all());

        return redirect()->route('admin.programmes.index');
    }

    public function edit(Programme $programme)
    {
        abort_if(Gate::denies('programme_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $levels = Level::pluck('level_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $programme->load('level');

        return view('admin.programmes.edit', compact('levels', 'programme'));
    }

    public function update(UpdateProgrammeRequest $request, Programme $programme)
    {
        $programme->update($request->all());

        return redirect()->route('admin.programmes.index');
    }

    public function show(Programme $programme)
    {
        abort_if(Gate::denies('programme_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $programme->load('level', 'edpTitleAdmissionsEdps');

        return view('admin.programmes.show', compact('programme'));
    }

    public function destroy(Programme $programme)
    {
        abort_if(Gate::denies('programme_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $programme->delete();

        return back();
    }

    public function massDestroy(MassDestroyProgrammeRequest $request)
    {
        Programme::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
