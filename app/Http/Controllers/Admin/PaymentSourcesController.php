<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPaymentSourceRequest;
use App\Http\Requests\StorePaymentSourceRequest;
use App\Http\Requests\UpdatePaymentSourceRequest;
use App\Models\PaymentSource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PaymentSourcesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('payment_source_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $paymentSources = PaymentSource::all();

        return view('admin.paymentSources.index', compact('paymentSources'));
    }

    public function create()
    {
        abort_if(Gate::denies('payment_source_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.paymentSources.create');
    }

    public function store(StorePaymentSourceRequest $request)
    {
        $paymentSource = PaymentSource::create($request->all());

        return redirect()->route('admin.payment-sources.index');
    }

    public function edit(PaymentSource $paymentSource)
    {
        abort_if(Gate::denies('payment_source_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.paymentSources.edit', compact('paymentSource'));
    }

    public function update(UpdatePaymentSourceRequest $request, PaymentSource $paymentSource)
    {
        $paymentSource->update($request->all());

        return redirect()->route('admin.payment-sources.index');
    }

    public function show(PaymentSource $paymentSource)
    {
        abort_if(Gate::denies('payment_source_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $paymentSource->load('paymentSourcePaymentsQualifications', 'paymentSourcePaymentsEdps');

        return view('admin.paymentSources.show', compact('paymentSource'));
    }

    public function destroy(PaymentSource $paymentSource)
    {
        abort_if(Gate::denies('payment_source_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $paymentSource->delete();

        return back();
    }

    public function massDestroy(MassDestroyPaymentSourceRequest $request)
    {
        PaymentSource::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
