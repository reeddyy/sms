<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroySupportFundRequest;
use App\Http\Requests\StoreSupportFundRequest;
use App\Http\Requests\UpdateSupportFundRequest;
use App\Models\SupportFund;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SupportFundsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('support_fund_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $supportFunds = SupportFund::all();

        return view('admin.supportFunds.index', compact('supportFunds'));
    }

    public function create()
    {
        abort_if(Gate::denies('support_fund_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.supportFunds.create');
    }

    public function store(StoreSupportFundRequest $request)
    {
        $supportFund = SupportFund::create($request->all());

        return redirect()->route('admin.support-funds.index');
    }

    public function edit(SupportFund $supportFund)
    {
        abort_if(Gate::denies('support_fund_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.supportFunds.edit', compact('supportFund'));
    }

    public function update(UpdateSupportFundRequest $request, SupportFund $supportFund)
    {
        $supportFund->update($request->all());

        return redirect()->route('admin.support-funds.index');
    }

    public function show(SupportFund $supportFund)
    {
        abort_if(Gate::denies('support_fund_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $supportFund->load('fundNameSfIndividuals');

        return view('admin.supportFunds.show', compact('supportFund'));
    }

    public function destroy(SupportFund $supportFund)
    {
        abort_if(Gate::denies('support_fund_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $supportFund->delete();

        return back();
    }

    public function massDestroy(MassDestroySupportFundRequest $request)
    {
        SupportFund::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
