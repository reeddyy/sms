<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCfPurposeRequest;
use App\Http\Requests\StoreCfPurposeRequest;
use App\Http\Requests\UpdateCfPurposeRequest;
use App\Models\CfPurpose;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CfPurposesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('cf_purpose_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $cfPurposes = CfPurpose::all();

        return view('admin.cfPurposes.index', compact('cfPurposes'));
    }

    public function create()
    {
        abort_if(Gate::denies('cf_purpose_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.cfPurposes.create');
    }

    public function store(StoreCfPurposeRequest $request)
    {
        $cfPurpose = CfPurpose::create($request->all());

        return redirect()->route('admin.cf-purposes.index');
    }

    public function edit(CfPurpose $cfPurpose)
    {
        abort_if(Gate::denies('cf_purpose_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.cfPurposes.edit', compact('cfPurpose'));
    }

    public function update(UpdateCfPurposeRequest $request, CfPurpose $cfPurpose)
    {
        $cfPurpose->update($request->all());

        return redirect()->route('admin.cf-purposes.index');
    }

    public function show(CfPurpose $cfPurpose)
    {
        abort_if(Gate::denies('cf_purpose_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $cfPurpose->load('purposeTcIndividuals', 'purposeSfIndividuals');

        return view('admin.cfPurposes.show', compact('cfPurpose'));
    }

    public function destroy(CfPurpose $cfPurpose)
    {
        abort_if(Gate::denies('cf_purpose_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $cfPurpose->delete();

        return back();
    }

    public function massDestroy(MassDestroyCfPurposeRequest $request)
    {
        CfPurpose::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
