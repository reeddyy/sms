<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAdmissionsEdpRequest;
use App\Http\Requests\StoreAdmissionsEdpRequest;
use App\Http\Requests\UpdateAdmissionsEdpRequest;
use App\Models\AdmissionsEdp;
use App\Models\Facilitator;
use App\Models\Individual;
use App\Models\Officer;
use App\Models\Programme;
use App\Models\Status;
use App\Models\Venue;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdmissionsEdpController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('admissions_edp_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $admissionsEdps = AdmissionsEdp::with(['admission_status', 'edp_title', 'facilitator_name', 'venue', 'participant_name', 'officer_name'])->get();

        $statuses = Status::get();

        $programmes = Programme::get();

        $facilitators = Facilitator::get();

        $venues = Venue::get();

        $individuals = Individual::get();

        $officers = Officer::get();

        return view('admin.admissionsEdps.index', compact('admissionsEdps', 'statuses', 'programmes', 'facilitators', 'venues', 'individuals', 'officers'));
    }

    public function create()
    {
        abort_if(Gate::denies('admissions_edp_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $admission_statuses = Status::pluck('status_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $edp_titles = Programme::pluck('edp_title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $facilitator_names = Facilitator::pluck('facilitator_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $venues = Venue::pluck('venue_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $participant_names = Individual::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $officer_names = Officer::pluck('officer_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.admissionsEdps.create', compact('admission_statuses', 'edp_titles', 'facilitator_names', 'venues', 'participant_names', 'officer_names'));
    }

    public function store(StoreAdmissionsEdpRequest $request)
    {
        $admissionsEdp = AdmissionsEdp::create($request->all());

        return redirect()->route('admin.admissions-edps.index');
    }

    public function edit(AdmissionsEdp $admissionsEdp)
    {
        abort_if(Gate::denies('admissions_edp_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $admission_statuses = Status::pluck('status_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $edp_titles = Programme::pluck('edp_title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $facilitator_names = Facilitator::pluck('facilitator_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $venues = Venue::pluck('venue_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $participant_names = Individual::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $officer_names = Officer::pluck('officer_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $admissionsEdp->load('admission_status', 'edp_title', 'facilitator_name', 'venue', 'participant_name', 'officer_name');

        return view('admin.admissionsEdps.edit', compact('admission_statuses', 'edp_titles', 'facilitator_names', 'venues', 'participant_names', 'officer_names', 'admissionsEdp'));
    }

    public function update(UpdateAdmissionsEdpRequest $request, AdmissionsEdp $admissionsEdp)
    {
        $admissionsEdp->update($request->all());

        return redirect()->route('admin.admissions-edps.index');
    }

    public function show(AdmissionsEdp $admissionsEdp)
    {
        abort_if(Gate::denies('admissions_edp_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $admissionsEdp->load('admission_status', 'edp_title', 'facilitator_name', 'venue', 'participant_name', 'officer_name', 'admissionNoPaymentsEdps');

        return view('admin.admissionsEdps.show', compact('admissionsEdp'));
    }

    public function destroy(AdmissionsEdp $admissionsEdp)
    {
        abort_if(Gate::denies('admissions_edp_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $admissionsEdp->delete();

        return back();
    }

    public function massDestroy(MassDestroyAdmissionsEdpRequest $request)
    {
        AdmissionsEdp::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
