<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyDigitalModuleRequest;
use App\Http\Requests\StoreDigitalModuleRequest;
use App\Http\Requests\UpdateDigitalModuleRequest;
use App\Models\DigitalModule;
use App\Models\Level;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DigitalModulesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('digital_module_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $digitalModules = DigitalModule::with(['level'])->get();

        $levels = Level::get();

        return view('admin.digitalModules.index', compact('digitalModules', 'levels'));
    }

    public function create()
    {
        abort_if(Gate::denies('digital_module_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $levels = Level::pluck('level_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.digitalModules.create', compact('levels'));
    }

    public function store(StoreDigitalModuleRequest $request)
    {
        $digitalModule = DigitalModule::create($request->all());

        return redirect()->route('admin.digital-modules.index');
    }

    public function edit(DigitalModule $digitalModule)
    {
        abort_if(Gate::denies('digital_module_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $levels = Level::pluck('level_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $digitalModule->load('level');

        return view('admin.digitalModules.edit', compact('levels', 'digitalModule'));
    }

    public function update(UpdateDigitalModuleRequest $request, DigitalModule $digitalModule)
    {
        $digitalModule->update($request->all());

        return redirect()->route('admin.digital-modules.index');
    }

    public function show(DigitalModule $digitalModule)
    {
        abort_if(Gate::denies('digital_module_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $digitalModule->load('level', 'moduleResultsDigitalModules', 'digitalModuleSCourses');

        return view('admin.digitalModules.show', compact('digitalModule'));
    }

    public function destroy(DigitalModule $digitalModule)
    {
        abort_if(Gate::denies('digital_module_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $digitalModule->delete();

        return back();
    }

    public function massDestroy(MassDestroyDigitalModuleRequest $request)
    {
        DigitalModule::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
