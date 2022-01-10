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

        $admission_nos = AdmissionsEdp::where('outstanding_balance', '!=', 0)->pluck('admission_no', 'id')->prepend(trans('global.pleaseSelect'), '');

        $payment_sources = PaymentSource::pluck('payment_source_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.paymentsEdps.create', compact('admission_nos', 'payment_sources'));
    }

    public function store(StorePaymentsEdpRequest $request)
    {
        $paymentsEdp = PaymentsEdp::create($request->all());

        $admission_no = (isset($request->admission_no_id)) ? $request->admission_no_id : '';

        if($admission_no && $admission_no!=''){
            
            $paid_amount = PaymentsEdp::where('deleted_at', null)->where('admission_no_id', $admission_no)->sum('payment_amount');

            $admissionsEdp = AdmissionsEdp::find($admission_no);

            $admissionsEdp->amount_paid = $paid_amount;

            $outstanding_balance = round($admissionsEdp->total_fees, 2) - round($paid_amount,2);

            $admissionsEdp->outstanding_balance = round($outstanding_balance, 2);

            $admissionsEdp->save();

        }

        return redirect()->route('admin.payments-edps.index');
    }

    public function edit(PaymentsEdp $paymentsEdp)
    {
        abort_if(Gate::denies('payments_edp_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $admission_nos = AdmissionsEdp::where('outstanding_balance', '=', 0)->orWhere('id', $paymentsEdp->admission_no_id)->pluck('admission_no', 'id')->prepend(trans('global.pleaseSelect'), '');

        $payment_sources = PaymentSource::pluck('payment_source_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $paymentsEdp->load('admission_no', 'payment_source');

        return view('admin.paymentsEdps.edit', compact('admission_nos', 'payment_sources', 'paymentsEdp'));
    }

    public function update(UpdatePaymentsEdpRequest $request, PaymentsEdp $paymentsEdp)
    {
        $paymentsEdp->update($request->all());

        // update paid amounts sum for the enrolment as per enrolment id
        $admission_no = (isset($request->admission_no_id)) ? $request->admission_no_id : '';
        if($admission_no && $admission_no != ''){
            $paid_amount = PaymentsEdp::where('admission_no_id', $admission_no)->sum('payment_amount');

            $admissionsEdp = AdmissionsEdp::find($admission_no);
            
            $outstanding_balance = round($admissionsEdp->total_fees, 2) - round($paid_amount,2);
            $admissionsEdp->outstanding_balance = round($outstanding_balance, 2);

            $admissionsEdp->save();
        }

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

        $payments = PaymentsEdp::where('admission_no_id', $paymentsEdp->admission_no_id);

        if($payments->count()){
            $admissionsEdp = AdmissionsEdp::find($paymentsEdp->admission_no_id);
            
            //update amount paid by deducting the deleted amount
            $admissionsEdp->amount_paid = $admissionsEdp->amount_paid - $paymentsEdp->payment_amount;
            $admissionsEdp->outstanding_balance = $admissionsEdp->outstanding_balance + $paymentsEdp->payment_amount;

            $admissionsEdp->save();
        }

        $paymentsEdp->delete();

        return back();
    }

    public function massDestroy(MassDestroyPaymentsEdpRequest $request)
    {
        PaymentsEdp::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
