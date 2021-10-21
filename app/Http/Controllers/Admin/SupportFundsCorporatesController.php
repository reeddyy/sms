<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroySupportFundsCorporateRequest;
use App\Http\Requests\StoreSupportFundsCorporateRequest;
use App\Http\Requests\UpdateSupportFundsCorporateRequest;
use App\Models\CreditsFundsPurpose;
use App\Models\MembershipsCorporate;
use App\Models\SupportFund;
use App\Models\SupportFundsCorporate;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SupportFundsCorporatesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('support_funds_corporate_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $supportFundsCorporates = SupportFundsCorporate::with(['member_no', 'fund_name', 'purpose'])->get();

        $memberships_corporates = MembershipsCorporate::get();

        $support_funds = SupportFund::get();

        $credits_funds_purposes = CreditsFundsPurpose::get();

        return view('admin.supportFundsCorporates.index', compact('supportFundsCorporates', 'memberships_corporates', 'support_funds', 'credits_funds_purposes'));
    }

    public function create()
    {
        abort_if(Gate::denies('support_funds_corporate_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $member_nos = MembershipsCorporate::pluck('member_no', 'id')->prepend(trans('global.pleaseSelect'), '');

        $fund_names = SupportFund::pluck('fund_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $purposes = CreditsFundsPurpose::pluck('purpose_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.supportFundsCorporates.create', compact('member_nos', 'fund_names', 'purposes'));
    }

    public function store(StoreSupportFundsCorporateRequest $request)
    {
        $supportFundsCorporate = SupportFundsCorporate::create($request->all());

        return redirect()->route('admin.support-funds-corporates.index');
    }

    public function edit(SupportFundsCorporate $supportFundsCorporate)
    {
        abort_if(Gate::denies('support_funds_corporate_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $member_nos = MembershipsCorporate::pluck('member_no', 'id')->prepend(trans('global.pleaseSelect'), '');

        $fund_names = SupportFund::pluck('fund_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $purposes = CreditsFundsPurpose::pluck('purpose_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $supportFundsCorporate->load('member_no', 'fund_name', 'purpose');

        return view('admin.supportFundsCorporates.edit', compact('member_nos', 'fund_names', 'purposes', 'supportFundsCorporate'));
    }

    public function update(UpdateSupportFundsCorporateRequest $request, SupportFundsCorporate $supportFundsCorporate)
    {
        $supportFundsCorporate->update($request->all());

        return redirect()->route('admin.support-funds-corporates.index');
    }

    public function show(SupportFundsCorporate $supportFundsCorporate)
    {
        abort_if(Gate::denies('support_funds_corporate_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $supportFundsCorporate->load('member_no', 'fund_name', 'purpose');

        return view('admin.supportFundsCorporates.show', compact('supportFundsCorporate'));
    }

    public function destroy(SupportFundsCorporate $supportFundsCorporate)
    {
        abort_if(Gate::denies('support_funds_corporate_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $supportFundsCorporate->delete();

        return back();
    }

    public function massDestroy(MassDestroySupportFundsCorporateRequest $request)
    {
        SupportFundsCorporate::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
