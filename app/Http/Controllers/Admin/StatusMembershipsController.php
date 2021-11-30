<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyStatusMembershipRequest;
use App\Http\Requests\StoreStatusMembershipRequest;
use App\Http\Requests\UpdateStatusMembershipRequest;
use App\Models\StatusMembership;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StatusMembershipsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('status_membership_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statusMemberships = StatusMembership::all();

        return view('admin.statusMemberships.index', compact('statusMemberships'));
    }

    public function create()
    {
        abort_if(Gate::denies('status_membership_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.statusMemberships.create');
    }

    public function store(StoreStatusMembershipRequest $request)
    {
        $statusMembership = StatusMembership::create($request->all());

        return redirect()->route('admin.status-memberships.index');
    }

    public function edit(StatusMembership $statusMembership)
    {
        abort_if(Gate::denies('status_membership_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.statusMemberships.edit', compact('statusMembership'));
    }

    public function update(UpdateStatusMembershipRequest $request, StatusMembership $statusMembership)
    {
        $statusMembership->update($request->all());

        return redirect()->route('admin.status-memberships.index');
    }

    public function show(StatusMembership $statusMembership)
    {
        abort_if(Gate::denies('status_membership_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statusMembership->load('statusMembershipsCorporates', 'statusMembershipsIndividuals');

        return view('admin.statusMemberships.show', compact('statusMembership'));
    }

    public function destroy(StatusMembership $statusMembership)
    {
        abort_if(Gate::denies('status_membership_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statusMembership->delete();

        return back();
    }

    public function massDestroy(MassDestroyStatusMembershipRequest $request)
    {
        StatusMembership::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
