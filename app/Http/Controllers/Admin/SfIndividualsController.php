<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroySfIndividualRequest;
use App\Http\Requests\StoreSfIndividualRequest;
use App\Http\Requests\UpdateSfIndividualRequest;
use App\Models\CfPurpose;
use App\Models\MembershipsIndividual;
use App\Models\SfIndividual;
use App\Models\SupportFund;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SfIndividualsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('sf_individual_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sfIndividuals = SfIndividual::with(['fund_name', 'member_no', 'purpose'])->get();

        $support_funds = SupportFund::get();

        $memberships_individuals = MembershipsIndividual::get();

        $cf_purposes = CfPurpose::get();

        return view('admin.sfIndividuals.index', compact('sfIndividuals', 'support_funds', 'memberships_individuals', 'cf_purposes'));
    }

    public function create()
    {
        abort_if(Gate::denies('sf_individual_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $fund_names = SupportFund::pluck('fund_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $member_nos = MembershipsIndividual::pluck('member_no', 'id')->prepend(trans('global.pleaseSelect'), '');

        $purposes = CfPurpose::pluck('purpose_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.sfIndividuals.create', compact('fund_names', 'member_nos', 'purposes'));
    }

    public function store(StoreSfIndividualRequest $request)
    {
        $sfIndividual = SfIndividual::create($request->all());

        return redirect()->route('admin.sf-individuals.index');
    }

    public function edit(SfIndividual $sfIndividual)
    {
        abort_if(Gate::denies('sf_individual_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $fund_names = SupportFund::pluck('fund_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $member_nos = MembershipsIndividual::pluck('member_no', 'id')->prepend(trans('global.pleaseSelect'), '');

        $purposes = CfPurpose::pluck('purpose_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $sfIndividual->load('fund_name', 'member_no', 'purpose');

        return view('admin.sfIndividuals.edit', compact('fund_names', 'member_nos', 'purposes', 'sfIndividual'));
    }

    public function update(UpdateSfIndividualRequest $request, SfIndividual $sfIndividual)
    {
        $sfIndividual->update($request->all());

        return redirect()->route('admin.sf-individuals.index');
    }

    public function show(SfIndividual $sfIndividual)
    {
        abort_if(Gate::denies('sf_individual_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sfIndividual->load('fund_name', 'member_no', 'purpose');

        return view('admin.sfIndividuals.show', compact('sfIndividual'));
    }

    public function destroy(SfIndividual $sfIndividual)
    {
        abort_if(Gate::denies('sf_individual_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sfIndividual->delete();

        return back();
    }

    public function massDestroy(MassDestroySfIndividualRequest $request)
    {
        SfIndividual::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
