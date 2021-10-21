<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyTrainingCreditsIndividualRequest;
use App\Http\Requests\StoreTrainingCreditsIndividualRequest;
use App\Http\Requests\UpdateTrainingCreditsIndividualRequest;
use App\Models\CreditsFundsPurpose;
use App\Models\MembershipsIndividual;
use App\Models\TrainingCreditsIndividual;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrainingCreditsIndividualsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('training_credits_individual_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $trainingCreditsIndividuals = TrainingCreditsIndividual::with(['member_no', 'purpose'])->get();

        $memberships_individuals = MembershipsIndividual::get();

        $credits_funds_purposes = CreditsFundsPurpose::get();

        return view('admin.trainingCreditsIndividuals.index', compact('trainingCreditsIndividuals', 'memberships_individuals', 'credits_funds_purposes'));
    }

    public function create()
    {
        abort_if(Gate::denies('training_credits_individual_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $member_nos = MembershipsIndividual::pluck('member_no', 'id')->prepend(trans('global.pleaseSelect'), '');

        $purposes = CreditsFundsPurpose::pluck('purpose_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.trainingCreditsIndividuals.create', compact('member_nos', 'purposes'));
    }

    public function store(StoreTrainingCreditsIndividualRequest $request)
    {
        $trainingCreditsIndividual = TrainingCreditsIndividual::create($request->all());

        return redirect()->route('admin.training-credits-individuals.index');
    }

    public function edit(TrainingCreditsIndividual $trainingCreditsIndividual)
    {
        abort_if(Gate::denies('training_credits_individual_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $member_nos = MembershipsIndividual::pluck('member_no', 'id')->prepend(trans('global.pleaseSelect'), '');

        $purposes = CreditsFundsPurpose::pluck('purpose_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $trainingCreditsIndividual->load('member_no', 'purpose');

        return view('admin.trainingCreditsIndividuals.edit', compact('member_nos', 'purposes', 'trainingCreditsIndividual'));
    }

    public function update(UpdateTrainingCreditsIndividualRequest $request, TrainingCreditsIndividual $trainingCreditsIndividual)
    {
        $trainingCreditsIndividual->update($request->all());

        return redirect()->route('admin.training-credits-individuals.index');
    }

    public function show(TrainingCreditsIndividual $trainingCreditsIndividual)
    {
        abort_if(Gate::denies('training_credits_individual_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $trainingCreditsIndividual->load('member_no', 'purpose');

        return view('admin.trainingCreditsIndividuals.show', compact('trainingCreditsIndividual'));
    }

    public function destroy(TrainingCreditsIndividual $trainingCreditsIndividual)
    {
        abort_if(Gate::denies('training_credits_individual_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $trainingCreditsIndividual->delete();

        return back();
    }

    public function massDestroy(MassDestroyTrainingCreditsIndividualRequest $request)
    {
        TrainingCreditsIndividual::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
