<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyTrainingCreditsCorporateRequest;
use App\Http\Requests\StoreTrainingCreditsCorporateRequest;
use App\Http\Requests\UpdateTrainingCreditsCorporateRequest;
use App\Models\CreditsFundsPurpose;
use App\Models\MembershipsCorporate;
use App\Models\TrainingCreditsCorporate;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrainingCreditsCorporatesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('training_credits_corporate_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $trainingCreditsCorporates = TrainingCreditsCorporate::with(['member_no', 'purpose'])->get();

        $memberships_corporates = MembershipsCorporate::get();

        $credits_funds_purposes = CreditsFundsPurpose::get();

        return view('admin.trainingCreditsCorporates.index', compact('trainingCreditsCorporates', 'memberships_corporates', 'credits_funds_purposes'));
    }

    public function create()
    {
        abort_if(Gate::denies('training_credits_corporate_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $member_nos = MembershipsCorporate::pluck('member_no', 'id')->prepend(trans('global.pleaseSelect'), '');

        $purposes = CreditsFundsPurpose::pluck('purpose_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.trainingCreditsCorporates.create', compact('member_nos', 'purposes'));
    }

    public function store(StoreTrainingCreditsCorporateRequest $request)
    {
        $trainingCreditsCorporate = TrainingCreditsCorporate::create($request->all());

        return redirect()->route('admin.training-credits-corporates.index');
    }

    public function edit(TrainingCreditsCorporate $trainingCreditsCorporate)
    {
        abort_if(Gate::denies('training_credits_corporate_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $member_nos = MembershipsCorporate::pluck('member_no', 'id')->prepend(trans('global.pleaseSelect'), '');

        $purposes = CreditsFundsPurpose::pluck('purpose_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $trainingCreditsCorporate->load('member_no', 'purpose');

        return view('admin.trainingCreditsCorporates.edit', compact('member_nos', 'purposes', 'trainingCreditsCorporate'));
    }

    public function update(UpdateTrainingCreditsCorporateRequest $request, TrainingCreditsCorporate $trainingCreditsCorporate)
    {
        $trainingCreditsCorporate->update($request->all());

        return redirect()->route('admin.training-credits-corporates.index');
    }

    public function show(TrainingCreditsCorporate $trainingCreditsCorporate)
    {
        abort_if(Gate::denies('training_credits_corporate_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $trainingCreditsCorporate->load('member_no', 'purpose');

        return view('admin.trainingCreditsCorporates.show', compact('trainingCreditsCorporate'));
    }

    public function destroy(TrainingCreditsCorporate $trainingCreditsCorporate)
    {
        abort_if(Gate::denies('training_credits_corporate_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $trainingCreditsCorporate->delete();

        return back();
    }

    public function massDestroy(MassDestroyTrainingCreditsCorporateRequest $request)
    {
        TrainingCreditsCorporate::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
