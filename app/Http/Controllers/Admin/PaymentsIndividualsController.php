<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPaymentsIndividualRequest;
use App\Http\Requests\StorePaymentsIndividualRequest;
use App\Http\Requests\UpdatePaymentsIndividualRequest;
use App\Models\MembershipsIndividual;
use App\Models\PaymentsIndividual;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PaymentsIndividualsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('payments_individual_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $paymentsIndividuals = PaymentsIndividual::with(['member_no'])->get();

        $memberships_individuals = MembershipsIndividual::get();

        return view('admin.paymentsIndividuals.index', compact('paymentsIndividuals', 'memberships_individuals'));
    }

    public function create()
    {
        abort_if(Gate::denies('payments_individual_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $member_nos = MembershipsIndividual::pluck('member_no', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.paymentsIndividuals.create', compact('member_nos'));
    }

    public function store(StorePaymentsIndividualRequest $request)
    {
        $paymentsIndividual = PaymentsIndividual::create($request->all());

        return redirect()->route('admin.payments-individuals.index');
    }

    public function edit(PaymentsIndividual $paymentsIndividual)
    {
        abort_if(Gate::denies('payments_individual_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $member_nos = MembershipsIndividual::pluck('member_no', 'id')->prepend(trans('global.pleaseSelect'), '');

        $paymentsIndividual->load('member_no');

        return view('admin.paymentsIndividuals.edit', compact('member_nos', 'paymentsIndividual'));
    }

    public function update(UpdatePaymentsIndividualRequest $request, PaymentsIndividual $paymentsIndividual)
    {
        $paymentsIndividual->update($request->all());

        return redirect()->route('admin.payments-individuals.index');
    }

    public function show(PaymentsIndividual $paymentsIndividual)
    {
        abort_if(Gate::denies('payments_individual_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $paymentsIndividual->load('member_no');

        return view('admin.paymentsIndividuals.show', compact('paymentsIndividual'));
    }

    public function destroy(PaymentsIndividual $paymentsIndividual)
    {
        abort_if(Gate::denies('payments_individual_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $paymentsIndividual->delete();

        return back();
    }

    public function massDestroy(MassDestroyPaymentsIndividualRequest $request)
    {
        PaymentsIndividual::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
