<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyTcIndividualRequest;
use App\Http\Requests\StoreTcIndividualRequest;
use App\Http\Requests\UpdateTcIndividualRequest;
use App\Models\CfPurpose;
use App\Models\MembershipsIndividual;
use App\Models\TcIndividual;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TcIndividualsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('tc_individual_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tcIndividuals = TcIndividual::with(['member_no', 'purpose'])->get();

        $memberships_individuals = MembershipsIndividual::get();

        $cf_purposes = CfPurpose::get();

        return view('admin.tcIndividuals.index', compact('tcIndividuals', 'memberships_individuals', 'cf_purposes'));
    }

    public function create()
    {
        abort_if(Gate::denies('tc_individual_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $member_nos = MembershipsIndividual::pluck('member_no', 'id')->prepend(trans('global.pleaseSelect'), '');

        $purposes = CfPurpose::pluck('purpose_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.tcIndividuals.create', compact('member_nos', 'purposes'));
    }

    public function store(StoreTcIndividualRequest $request)
    {
        $tcIndividual = TcIndividual::create($request->all());

        return redirect()->route('admin.tc-individuals.index');
    }

    public function edit(TcIndividual $tcIndividual)
    {
        abort_if(Gate::denies('tc_individual_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $member_nos = MembershipsIndividual::pluck('member_no', 'id')->prepend(trans('global.pleaseSelect'), '');

        $purposes = CfPurpose::pluck('purpose_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $tcIndividual->load('member_no', 'purpose');

        return view('admin.tcIndividuals.edit', compact('member_nos', 'purposes', 'tcIndividual'));
    }

    public function update(UpdateTcIndividualRequest $request, TcIndividual $tcIndividual)
    {
        $tcIndividual->update($request->all());

        return redirect()->route('admin.tc-individuals.index');
    }

    public function show(TcIndividual $tcIndividual)
    {
        abort_if(Gate::denies('tc_individual_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tcIndividual->load('member_no', 'purpose');

        return view('admin.tcIndividuals.show', compact('tcIndividual'));
    }

    public function destroy(TcIndividual $tcIndividual)
    {
        abort_if(Gate::denies('tc_individual_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tcIndividual->delete();

        return back();
    }

    public function massDestroy(MassDestroyTcIndividualRequest $request)
    {
        TcIndividual::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
