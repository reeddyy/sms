<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyStatusLeadRequest;
use App\Http\Requests\StoreStatusLeadRequest;
use App\Http\Requests\UpdateStatusLeadRequest;
use App\Models\StatusLead;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StatusLeadsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('status_lead_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statusLeads = StatusLead::all();

        return view('admin.statusLeads.index', compact('statusLeads'));
    }

    public function create()
    {
        abort_if(Gate::denies('status_lead_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.statusLeads.create');
    }

    public function store(StoreStatusLeadRequest $request)
    {
        $statusLead = StatusLead::create($request->all());

        return redirect()->route('admin.status-leads.index');
    }

    public function edit(StatusLead $statusLead)
    {
        abort_if(Gate::denies('status_lead_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.statusLeads.edit', compact('statusLead'));
    }

    public function update(UpdateStatusLeadRequest $request, StatusLead $statusLead)
    {
        $statusLead->update($request->all());

        return redirect()->route('admin.status-leads.index');
    }

    public function show(StatusLead $statusLead)
    {
        abort_if(Gate::denies('status_lead_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statusLead->load('statusQualificationsReqs', 'statusEdpReqs');

        return view('admin.statusLeads.show', compact('statusLead'));
    }

    public function destroy(StatusLead $statusLead)
    {
        abort_if(Gate::denies('status_lead_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statusLead->delete();

        return back();
    }

    public function massDestroy(MassDestroyStatusLeadRequest $request)
    {
        StatusLead::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
