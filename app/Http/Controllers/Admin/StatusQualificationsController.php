<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyStatusQualificationRequest;
use App\Http\Requests\StoreStatusQualificationRequest;
use App\Http\Requests\UpdateStatusQualificationRequest;
use App\Models\StatusQualification;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StatusQualificationsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('status_qualification_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statusQualifications = StatusQualification::all();

        return view('admin.statusQualifications.index', compact('statusQualifications'));
    }

    public function create()
    {
        abort_if(Gate::denies('status_qualification_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.statusQualifications.create');
    }

    public function store(StoreStatusQualificationRequest $request)
    {
        $statusQualification = StatusQualification::create($request->all());

        return redirect()->route('admin.status-qualifications.index');
    }

    public function edit(StatusQualification $statusQualification)
    {
        abort_if(Gate::denies('status_qualification_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.statusQualifications.edit', compact('statusQualification'));
    }

    public function update(UpdateStatusQualificationRequest $request, StatusQualification $statusQualification)
    {
        $statusQualification->update($request->all());

        return redirect()->route('admin.status-qualifications.index');
    }

    public function show(StatusQualification $statusQualification)
    {
        abort_if(Gate::denies('status_qualification_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statusQualification->load('statusEnrolmentsQualifications');

        return view('admin.statusQualifications.show', compact('statusQualification'));
    }

    public function destroy(StatusQualification $statusQualification)
    {
        abort_if(Gate::denies('status_qualification_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statusQualification->delete();

        return back();
    }

    public function massDestroy(MassDestroyStatusQualificationRequest $request)
    {
        StatusQualification::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
