<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCreditsFundsPurposeRequest;
use App\Http\Requests\StoreCreditsFundsPurposeRequest;
use App\Http\Requests\UpdateCreditsFundsPurposeRequest;
use App\Models\CreditsFundsPurpose;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CreditsFundsPurposesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('credits_funds_purpose_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $creditsFundsPurposes = CreditsFundsPurpose::all();

        return view('admin.creditsFundsPurposes.index', compact('creditsFundsPurposes'));
    }

    public function create()
    {
        abort_if(Gate::denies('credits_funds_purpose_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.creditsFundsPurposes.create');
    }

    public function store(StoreCreditsFundsPurposeRequest $request)
    {
        $creditsFundsPurpose = CreditsFundsPurpose::create($request->all());

        return redirect()->route('admin.credits-funds-purposes.index');
    }

    public function edit(CreditsFundsPurpose $creditsFundsPurpose)
    {
        abort_if(Gate::denies('credits_funds_purpose_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.creditsFundsPurposes.edit', compact('creditsFundsPurpose'));
    }

    public function update(UpdateCreditsFundsPurposeRequest $request, CreditsFundsPurpose $creditsFundsPurpose)
    {
        $creditsFundsPurpose->update($request->all());

        return redirect()->route('admin.credits-funds-purposes.index');
    }

    public function show(CreditsFundsPurpose $creditsFundsPurpose)
    {
        abort_if(Gate::denies('credits_funds_purpose_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $creditsFundsPurpose->load('purposeTrainingCreditsIndividuals', 'purposeSupportFundsIndividuals', 'purposeTrainingCreditsCorporates', 'purposeSupportFundsCorporates');

        return view('admin.creditsFundsPurposes.show', compact('creditsFundsPurpose'));
    }

    public function destroy(CreditsFundsPurpose $creditsFundsPurpose)
    {
        abort_if(Gate::denies('credits_funds_purpose_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $creditsFundsPurpose->delete();

        return back();
    }

    public function massDestroy(MassDestroyCreditsFundsPurposeRequest $request)
    {
        CreditsFundsPurpose::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
