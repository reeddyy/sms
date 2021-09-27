<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPaymentsEdpRequest;
use App\Http\Requests\StorePaymentsEdpRequest;
use App\Http\Requests\UpdatePaymentsEdpRequest;
use App\Models\AdmissionsEdp;
use App\Models\PaymentsEdp;
use App\Models\PaymentSource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PaymentsEdpController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('payments_edp_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $paymentsEdps = PaymentsEdp::with(['admission_no', 'payment_source'])->get();

        $admissions_edps = AdmissionsEdp::get();

        $payment_sources = PaymentSource::get();

        return view('admin.paymentsEdps.index', compact('paymentsEdps', 'admissions_edps', 'payment_sources'));
    }

    public function create()
    {
        abort_if(Gate::denies('payments_edp_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $admission_nos = AdmissionsEdp::pluck('admission_no', 'id')->prepend(trans('global.pleaseSelect'), '');

        $payment_sources = PaymentSource::pluck('payment_source_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.paymentsEdps.create', compact('admission_nos', 'payment_sources'));
    }

    public function store(StorePaymentsEdpRequest $request)
    {
        $paymentsEdp = PaymentsEdp::create($request->all());

        return redirect()->route('admin.payments-edps.index');
    }

    public function edit(PaymentsEdp $paymentsEdp)
    {
        abort_if(Gate::denies('payments_edp_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $admission_nos = AdmissionsEdp::pluck('admission_no', 'id')->prepend(trans('global.pleaseSelect'), '');

        $payment_sources = PaymentSource::pluck('payment_source_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $paymentsEdp->load('admission_no', 'payment_source');

        return view('admin.paymentsEdps.edit', compact('admission_nos', 'payment_sources', 'paymentsEdp'));
    }

    public function update(UpdatePaymentsEdpRequest $request, PaymentsEdp $paymentsEdp)
    {
        $paymentsEdp->update($request->all());

        return redirect()->route('admin.payments-edps.index');
    }

    public function show(PaymentsEdp $paymentsEdp)
    {
        abort_if(Gate::denies('payments_edp_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $paymentsEdp->load('admission_no', 'payment_source');

        return view('admin.paymentsEdps.show', compact('paymentsEdp'));
    }

    public function destroy(PaymentsEdp $paymentsEdp)
    {
        abort_if(Gate::denies('payments_edp_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $paymentsEdp->delete();

        return back();
    }

    public function massDestroy(MassDestroyPaymentsEdpRequest $request)
    {
        PaymentsEdp::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
