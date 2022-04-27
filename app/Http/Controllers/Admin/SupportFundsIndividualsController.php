<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroySupportFundsIndividualRequest;
use App\Http\Requests\StoreSupportFundsIndividualRequest;
use App\Http\Requests\UpdateSupportFundsIndividualRequest;
use App\Models\CreditsFundsPurpose;
use App\Models\MembershipsIndividual;
use App\Models\SupportFund;
use App\Models\SupportFundsIndividual;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SupportFundsIndividualsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('support_funds_individual_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $supportFundsIndividuals = SupportFundsIndividual::with(['member_no', 'fund_name', 'purpose'])->get();

        $memberships_individuals = MembershipsIndividual::get();

        $support_funds = SupportFund::get();

        $credits_funds_purposes = CreditsFundsPurpose::get();

        return view('admin.supportFundsIndividuals.index', compact('supportFundsIndividuals', 'memberships_individuals', 'support_funds', 'credits_funds_purposes'));
    }

    public function create()
    {
        abort_if(Gate::denies('support_funds_individual_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $member_nos = MembershipsIndividual::select('member_no', 'id', 'member_name_id')->get();

        $fund_names = SupportFund::pluck('fund_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $purposes = CreditsFundsPurpose::pluck('purpose_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.supportFundsIndividuals.create', compact('member_nos', 'fund_names', 'purposes'));
    }

    public function store(StoreSupportFundsIndividualRequest $request)
    {
        $supportFundsIndividual = SupportFundsIndividual::create($request->all());

        return redirect()->route('admin.support-funds-individuals.index');
    }

    public function edit(SupportFundsIndividual $supportFundsIndividual)
    {
        abort_if(Gate::denies('support_funds_individual_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $member_nos = MembershipsIndividual::select('member_no', 'id', 'member_name_id')->get();

        $fund_names = SupportFund::pluck('fund_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $purposes = CreditsFundsPurpose::pluck('purpose_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $supportFundsIndividual->load('member_no', 'fund_name', 'purpose');

        return view('admin.supportFundsIndividuals.edit', compact('member_nos', 'fund_names', 'purposes', 'supportFundsIndividual'));
    }

    public function update(UpdateSupportFundsIndividualRequest $request, SupportFundsIndividual $supportFundsIndividual)
    {
        $supportFundsIndividual->update($request->all());

        return redirect()->route('admin.support-funds-individuals.index');
    }

    public function show(SupportFundsIndividual $supportFundsIndividual)
    {
        abort_if(Gate::denies('support_funds_individual_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $supportFundsIndividual->load('member_no', 'fund_name', 'purpose');

        return view('admin.supportFundsIndividuals.show', compact('supportFundsIndividual'));
    }

    public function destroy(SupportFundsIndividual $supportFundsIndividual)
    {
        abort_if(Gate::denies('support_funds_individual_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $supportFundsIndividual->delete();

        return back();
    }

    public function massDestroy(MassDestroySupportFundsIndividualRequest $request)
    {
        SupportFundsIndividual::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
