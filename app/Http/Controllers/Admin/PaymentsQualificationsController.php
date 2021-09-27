<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPaymentsQualificationRequest;
use App\Http\Requests\StorePaymentsQualificationRequest;
use App\Http\Requests\UpdatePaymentsQualificationRequest;
use App\Models\EnrolmentsQualification;
use App\Models\PaymentSource;
use App\Models\PaymentsQualification;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PaymentsQualificationsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('payments_qualification_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $paymentsQualifications = PaymentsQualification::with(['enrolment_no', 'payment_source'])->get();

        $enrolments_qualifications = EnrolmentsQualification::get();

        $payment_sources = PaymentSource::get();

        return view('admin.paymentsQualifications.index', compact('paymentsQualifications', 'enrolments_qualifications', 'payment_sources'));
    }

    public function create()
    {
        abort_if(Gate::denies('payments_qualification_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $enrolment_nos = EnrolmentsQualification::pluck('enrolment_no', 'id')->prepend(trans('global.pleaseSelect'), '');

        $payment_sources = PaymentSource::pluck('payment_source_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.paymentsQualifications.create', compact('enrolment_nos', 'payment_sources'));
    }

    public function store(StorePaymentsQualificationRequest $request)
    {
        $paymentsQualification = PaymentsQualification::create($request->all());

        return redirect()->route('admin.payments-qualifications.index');
    }

    public function edit(PaymentsQualification $paymentsQualification)
    {
        abort_if(Gate::denies('payments_qualification_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $enrolment_nos = EnrolmentsQualification::pluck('enrolment_no', 'id')->prepend(trans('global.pleaseSelect'), '');

        $payment_sources = PaymentSource::pluck('payment_source_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $paymentsQualification->load('enrolment_no', 'payment_source');

        return view('admin.paymentsQualifications.edit', compact('enrolment_nos', 'payment_sources', 'paymentsQualification'));
    }

    public function update(UpdatePaymentsQualificationRequest $request, PaymentsQualification $paymentsQualification)
    {
        $paymentsQualification->update($request->all());

        return redirect()->route('admin.payments-qualifications.index');
    }

    public function show(PaymentsQualification $paymentsQualification)
    {
        abort_if(Gate::denies('payments_qualification_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $paymentsQualification->load('enrolment_no', 'payment_source');

        return view('admin.paymentsQualifications.show', compact('paymentsQualification'));
    }

    public function destroy(PaymentsQualification $paymentsQualification)
    {
        abort_if(Gate::denies('payments_qualification_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $paymentsQualification->delete();

        return back();
    }

    public function massDestroy(MassDestroyPaymentsQualificationRequest $request)
    {
        PaymentsQualification::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
