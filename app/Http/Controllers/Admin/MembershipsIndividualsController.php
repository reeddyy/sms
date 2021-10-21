<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyMembershipsIndividualRequest;
use App\Http\Requests\StoreMembershipsIndividualRequest;
use App\Http\Requests\UpdateMembershipsIndividualRequest;
use App\Models\Individual;
use App\Models\MemberClass;
use App\Models\MembershipsIndividual;
use App\Models\Status;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MembershipsIndividualsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('memberships_individual_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $membershipsIndividuals = MembershipsIndividual::with(['member_status', 'member_class', 'member_name'])->get();

        $statuses = Status::get();

        $member_classes = MemberClass::get();

        $individuals = Individual::get();

        return view('admin.membershipsIndividuals.index', compact('membershipsIndividuals', 'statuses', 'member_classes', 'individuals'));
    }

    public function create()
    {
        abort_if(Gate::denies('memberships_individual_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $member_statuses = Status::pluck('status_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $member_classes = MemberClass::pluck('member_class_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $member_names = Individual::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.membershipsIndividuals.create', compact('member_statuses', 'member_classes', 'member_names'));
    }

    public function store(StoreMembershipsIndividualRequest $request)
    {
        $membershipsIndividual = MembershipsIndividual::create($request->all());

        return redirect()->route('admin.memberships-individuals.index');
    }

    public function edit(MembershipsIndividual $membershipsIndividual)
    {
        abort_if(Gate::denies('memberships_individual_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $member_statuses = Status::pluck('status_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $member_classes = MemberClass::pluck('member_class_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $member_names = Individual::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $membershipsIndividual->load('member_status', 'member_class', 'member_name');

        return view('admin.membershipsIndividuals.edit', compact('member_statuses', 'member_classes', 'member_names', 'membershipsIndividual'));
    }

    public function update(UpdateMembershipsIndividualRequest $request, MembershipsIndividual $membershipsIndividual)
    {
        $membershipsIndividual->update($request->all());

        return redirect()->route('admin.memberships-individuals.index');
    }

    public function show(MembershipsIndividual $membershipsIndividual)
    {
        abort_if(Gate::denies('memberships_individual_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $membershipsIndividual->load('member_status', 'member_class', 'member_name', 'memberNoPaymentsIndividuals', 'memberNoTrainingCreditsIndividuals', 'memberNoSupportFundsIndividuals');

        return view('admin.membershipsIndividuals.show', compact('membershipsIndividual'));
    }

    public function destroy(MembershipsIndividual $membershipsIndividual)
    {
        abort_if(Gate::denies('memberships_individual_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $membershipsIndividual->delete();

        return back();
    }

    public function massDestroy(MassDestroyMembershipsIndividualRequest $request)
    {
        MembershipsIndividual::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
