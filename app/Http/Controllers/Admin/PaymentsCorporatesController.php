<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPaymentsCorporateRequest;
use App\Http\Requests\StorePaymentsCorporateRequest;
use App\Http\Requests\UpdatePaymentsCorporateRequest;
use App\Models\MembershipsCorporate;
use App\Models\PaymentsCorporate;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PaymentsCorporatesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('payments_corporate_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $paymentsCorporates = PaymentsCorporate::with(['member_no'])->get();

        $memberships_corporates = MembershipsCorporate::get();

        return view('admin.paymentsCorporates.index', compact('paymentsCorporates', 'memberships_corporates'));
    }

    public function create()
    {
        abort_if(Gate::denies('payments_corporate_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $member_nos = MembershipsCorporate::pluck('member_no', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.paymentsCorporates.create', compact('member_nos'));
    }

    public function store(StorePaymentsCorporateRequest $request)
    {
        $paymentsCorporate = PaymentsCorporate::create($request->all());

        return redirect()->route('admin.payments-corporates.index');
    }

    public function edit(PaymentsCorporate $paymentsCorporate)
    {
        abort_if(Gate::denies('payments_corporate_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $member_nos = MembershipsCorporate::pluck('member_no', 'id')->prepend(trans('global.pleaseSelect'), '');

        $paymentsCorporate->load('member_no');

        return view('admin.paymentsCorporates.edit', compact('member_nos', 'paymentsCorporate'));
    }

    public function update(UpdatePaymentsCorporateRequest $request, PaymentsCorporate $paymentsCorporate)
    {
        $paymentsCorporate->update($request->all());

        return redirect()->route('admin.payments-corporates.index');
    }

    public function show(PaymentsCorporate $paymentsCorporate)
    {
        abort_if(Gate::denies('payments_corporate_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $paymentsCorporate->load('member_no');

        return view('admin.paymentsCorporates.show', compact('paymentsCorporate'));
    }

    public function destroy(PaymentsCorporate $paymentsCorporate)
    {
        abort_if(Gate::denies('payments_corporate_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $paymentsCorporate->delete();

        return back();
    }

    public function massDestroy(MassDestroyPaymentsCorporateRequest $request)
    {
        PaymentsCorporate::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
