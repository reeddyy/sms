<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyQualificationsReqRequest;
use App\Http\Requests\StoreQualificationsReqRequest;
use App\Http\Requests\UpdateQualificationsReqRequest;
use App\Models\QualificationsReq;
use App\Models\StatusLead;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class QualificationsReqController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('qualifications_req_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $qualificationsReqs = QualificationsReq::with(['statuses'])->get();

        $status_leads = StatusLead::get();

        return view('admin.qualificationsReqs.index', compact('qualificationsReqs', 'status_leads'));
    }

    public function create()
    {
        abort_if(Gate::denies('qualifications_req_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statuses = StatusLead::pluck('status_name', 'id');

        return view('admin.qualificationsReqs.create', compact('statuses'));
    }

    public function store(StoreQualificationsReqRequest $request)
    {
        $qualificationsReq = QualificationsReq::create($request->all());
        $qualificationsReq->statuses()->sync($request->input('statuses', []));

        return redirect()->route('admin.qualifications-reqs.index');
    }

    public function edit(QualificationsReq $qualificationsReq)
    {
        abort_if(Gate::denies('qualifications_req_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statuses = StatusLead::pluck('status_name', 'id');

        $qualificationsReq->load('statuses');

        return view('admin.qualificationsReqs.edit', compact('statuses', 'qualificationsReq'));
    }

    public function update(UpdateQualificationsReqRequest $request, QualificationsReq $qualificationsReq)
    {
        $qualificationsReq->update($request->all());
        $qualificationsReq->statuses()->sync($request->input('statuses', []));

        return redirect()->route('admin.qualifications-reqs.index');
    }

    public function show(QualificationsReq $qualificationsReq)
    {
        abort_if(Gate::denies('qualifications_req_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $qualificationsReq->load('statuses');

        return view('admin.qualificationsReqs.show', compact('qualificationsReq'));
    }

    public function destroy(QualificationsReq $qualificationsReq)
    {
        abort_if(Gate::denies('qualifications_req_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $qualificationsReq->delete();

        return back();
    }

    public function massDestroy(MassDestroyQualificationsReqRequest $request)
    {
        QualificationsReq::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
