<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyEdpReqRequest;
use App\Http\Requests\StoreEdpReqRequest;
use App\Http\Requests\UpdateEdpReqRequest;
use App\Models\EdpReq;
use App\Models\StatusLead;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EdpReqController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('edp_req_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $edpReqs = EdpReq::with(['statuses'])->get();

        $status_leads = StatusLead::get();

        return view('admin.edpReqs.index', compact('edpReqs', 'status_leads'));
    }

    public function create()
    {
        abort_if(Gate::denies('edp_req_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statuses = StatusLead::pluck('status_name', 'id');

        return view('admin.edpReqs.create', compact('statuses'));
    }

    public function store(StoreEdpReqRequest $request)
    {
        $edpReq = EdpReq::create($request->all());
        $edpReq->statuses()->sync($request->input('statuses', []));

        return redirect()->route('admin.edp-reqs.index');
    }

    public function edit(EdpReq $edpReq)
    {
        abort_if(Gate::denies('edp_req_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statuses = StatusLead::pluck('status_name', 'id');

        $edpReq->load('statuses');

        return view('admin.edpReqs.edit', compact('statuses', 'edpReq'));
    }

    public function update(UpdateEdpReqRequest $request, EdpReq $edpReq)
    {
        $edpReq->update($request->all());
        $edpReq->statuses()->sync($request->input('statuses', []));

        return redirect()->route('admin.edp-reqs.index');
    }

    public function show(EdpReq $edpReq)
    {
        abort_if(Gate::denies('edp_req_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $edpReq->load('statuses');

        return view('admin.edpReqs.show', compact('edpReq'));
    }

    public function destroy(EdpReq $edpReq)
    {
        abort_if(Gate::denies('edp_req_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $edpReq->delete();

        return back();
    }

    public function massDestroy(MassDestroyEdpReqRequest $request)
    {
        EdpReq::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
