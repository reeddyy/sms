<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyTrainingCreditRequest;
use App\Http\Requests\StoreTrainingCreditRequest;
use App\Http\Requests\UpdateTrainingCreditRequest;
use App\Models\Membership;
use App\Models\TrainingCredit;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrainingCreditsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('training_credit_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $trainingCredits = TrainingCredit::with(['membership_no'])->get();

        return view('admin.trainingCredits.index', compact('trainingCredits'));
    }

    public function create()
    {
        abort_if(Gate::denies('training_credit_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $membership_nos = Membership::pluck('membership_no', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.trainingCredits.create', compact('membership_nos'));
    }

    public function store(StoreTrainingCreditRequest $request)
    {
        $trainingCredit = TrainingCredit::create($request->all());

        return redirect()->route('admin.training-credits.index');
    }

    public function edit(TrainingCredit $trainingCredit)
    {
        abort_if(Gate::denies('training_credit_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $membership_nos = Membership::pluck('membership_no', 'id')->prepend(trans('global.pleaseSelect'), '');

        $trainingCredit->load('membership_no');

        return view('admin.trainingCredits.edit', compact('membership_nos', 'trainingCredit'));
    }

    public function update(UpdateTrainingCreditRequest $request, TrainingCredit $trainingCredit)
    {
        $trainingCredit->update($request->all());

        return redirect()->route('admin.training-credits.index');
    }

    public function show(TrainingCredit $trainingCredit)
    {
        abort_if(Gate::denies('training_credit_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $trainingCredit->load('membership_no');

        return view('admin.trainingCredits.show', compact('trainingCredit'));
    }

    public function destroy(TrainingCredit $trainingCredit)
    {
        abort_if(Gate::denies('training_credit_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $trainingCredit->delete();

        return back();
    }

    public function massDestroy(MassDestroyTrainingCreditRequest $request)
    {
        TrainingCredit::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
