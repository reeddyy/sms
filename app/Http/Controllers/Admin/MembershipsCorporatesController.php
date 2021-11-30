<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyMembershipsCorporateRequest;
use App\Http\Requests\StoreMembershipsCorporateRequest;
use App\Http\Requests\UpdateMembershipsCorporateRequest;
use App\Models\Corporate;
use App\Models\CorporatesApp;
use App\Models\MemberClass;
use App\Models\MembershipsCorporate;
use App\Models\StatusMembership;
use App\Models\SupportFund;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MembershipsCorporatesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('memberships_corporate_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $membershipsCorporates = MembershipsCorporate::with(['statuses', 'application_no', 'member_class', 'company_name', 'support_funds'])->get();

        $status_memberships = StatusMembership::get();

        $corporates_apps = CorporatesApp::get();

        $member_classes = MemberClass::get();

        $corporates = Corporate::get();

        $support_funds = SupportFund::get();

        return view('admin.membershipsCorporates.index', compact('membershipsCorporates', 'status_memberships', 'corporates_apps', 'member_classes', 'corporates', 'support_funds'));
    }

    public function create()
    {
        abort_if(Gate::denies('memberships_corporate_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statuses = StatusMembership::pluck('status_name', 'id');

        $application_nos = CorporatesApp::pluck('application_no', 'id')->prepend(trans('global.pleaseSelect'), '');

        $member_classes = MemberClass::pluck('member_class_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $company_names = Corporate::pluck('company_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $support_funds = SupportFund::pluck('fund_name', 'id');

        return view('admin.membershipsCorporates.create', compact('statuses', 'application_nos', 'member_classes', 'company_names', 'support_funds'));
    }

    public function store(StoreMembershipsCorporateRequest $request)
    {
        $membershipsCorporate = MembershipsCorporate::create($request->all());
        $membershipsCorporate->statuses()->sync($request->input('statuses', []));
        $membershipsCorporate->support_funds()->sync($request->input('support_funds', []));

        return redirect()->route('admin.memberships-corporates.index');
    }

    public function edit(MembershipsCorporate $membershipsCorporate)
    {
        abort_if(Gate::denies('memberships_corporate_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statuses = StatusMembership::pluck('status_name', 'id');

        $application_nos = CorporatesApp::pluck('application_no', 'id')->prepend(trans('global.pleaseSelect'), '');

        $member_classes = MemberClass::pluck('member_class_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $company_names = Corporate::pluck('company_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $support_funds = SupportFund::pluck('fund_name', 'id');

        $membershipsCorporate->load('statuses', 'application_no', 'member_class', 'company_name', 'support_funds');

        return view('admin.membershipsCorporates.edit', compact('statuses', 'application_nos', 'member_classes', 'company_names', 'support_funds', 'membershipsCorporate'));
    }

    public function update(UpdateMembershipsCorporateRequest $request, MembershipsCorporate $membershipsCorporate)
    {
        $membershipsCorporate->update($request->all());
        $membershipsCorporate->statuses()->sync($request->input('statuses', []));
        $membershipsCorporate->support_funds()->sync($request->input('support_funds', []));

        return redirect()->route('admin.memberships-corporates.index');
    }

    public function show(MembershipsCorporate $membershipsCorporate)
    {
        abort_if(Gate::denies('memberships_corporate_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $membershipsCorporate->load('statuses', 'application_no', 'member_class', 'company_name', 'support_funds', 'memberNoPaymentsCorporates', 'memberNoTrainingCreditsCorporates', 'memberNoSupportFundsCorporates');

        return view('admin.membershipsCorporates.show', compact('membershipsCorporate'));
    }

    public function destroy(MembershipsCorporate $membershipsCorporate)
    {
        abort_if(Gate::denies('memberships_corporate_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $membershipsCorporate->delete();

        return back();
    }

    public function massDestroy(MassDestroyMembershipsCorporateRequest $request)
    {
        MembershipsCorporate::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
