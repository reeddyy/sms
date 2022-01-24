<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAdmissionsEdpRequest;
use App\Http\Requests\StoreAdmissionsEdpRequest;
use App\Http\Requests\UpdateAdmissionsEdpRequest;
use App\Models\AdmissionsEdp;
use App\Models\EdpApp;
use App\Models\Facilitator;
use App\Models\Individual;
use App\Models\Officer;
use App\Models\Programme;
use App\Models\StatusEdp;
use App\Models\Venue;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdmissionsEdpController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('admissions_edp_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $admissionsEdps = AdmissionsEdp::with(['statuses', 'application_no', 'edp_title', 'facilitator_name', 'venue', 'participant_name', 'officer_name'])->get();

        $status_edps = StatusEdp::get();

        $edp_apps = EdpApp::get();

        $programmes = Programme::get();

        $facilitators = Facilitator::get();

        $venues = Venue::get();

        $individuals = Individual::get();

        $officers = Officer::get();

        return view('admin.admissionsEdps.index', compact('admissionsEdps', 'status_edps', 'edp_apps', 'programmes', 'facilitators', 'venues', 'individuals', 'officers'));
    }

    public function create()
    {
        abort_if(Gate::denies('admissions_edp_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statuses = StatusEdp::pluck('status_name', 'id');

        $application_nos = EdpApp::pluck('application_no', 'id')->prepend(trans('global.pleaseSelect'), '');

        $edp_titles = Programme::pluck('edp_title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $facilitator_names = Facilitator::pluck('facilitator_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $venues = Venue::pluck('venue_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $participant_names = Individual::select('name', 'id', 'id_no')->get();

        $officer_names = Officer::pluck('officer_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.admissionsEdps.create', compact('statuses', 'application_nos', 'edp_titles', 'facilitator_names', 'venues', 'participant_names', 'officer_names'));
    }

    public function store(StoreAdmissionsEdpRequest $request)
    {
        $admissionsEdp = AdmissionsEdp::create($request->all());
        $admissionsEdp->statuses()->sync($request->input('statuses', []));

        return redirect()->route('admin.admissions-edps.index');
    }

    public function edit(AdmissionsEdp $admissionsEdp)
    {
        abort_if(Gate::denies('admissions_edp_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statuses = StatusEdp::pluck('status_name', 'id');

        $application_nos = EdpApp::pluck('application_no', 'id')->prepend(trans('global.pleaseSelect'), '');

        $edp_titles = Programme::pluck('edp_title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $facilitator_names = Facilitator::pluck('facilitator_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $venues = Venue::pluck('venue_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $participant_names = Individual::select('name', 'id', 'id_no')->get();

        $officer_names = Officer::pluck('officer_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $admissionsEdp->load('statuses', 'application_no', 'edp_title', 'facilitator_name', 'venue', 'participant_name', 'officer_name');

        return view('admin.admissionsEdps.edit', compact('statuses', 'application_nos', 'edp_titles', 'facilitator_names', 'venues', 'participant_names', 'officer_names', 'admissionsEdp'));
    }

    public function update(UpdateAdmissionsEdpRequest $request, AdmissionsEdp $admissionsEdp)
    {
        $admissionsEdp->update($request->all());
        $admissionsEdp->statuses()->sync($request->input('statuses', []));

        return redirect()->route('admin.admissions-edps.index');
    }

    public function getApplicationDetails($id = null)
    {
        if($id != null){
            $admissionsEdp = EdpApp::where('id', $id)->with(['statuses', 'applicationNoAdmissionsEdps'])->first();
            //dd($admissionsEdp);
            return $admissionsEdp;
        }
    }

    public function show(AdmissionsEdp $admissionsEdp)
    {
        abort_if(Gate::denies('admissions_edp_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $admissionsEdp->load('statuses', 'application_no', 'edp_title', 'facilitator_name', 'venue', 'participant_name', 'officer_name', 'admissionNoPaymentsEdps');

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

    public function getEDPFees($edp_title_id)
    {
        abort_if(Gate::denies('admissions_edp_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $public_rate = 0;    
        $edp = Programme::where('id', $edp_title_id)->firstOrFail();

        if(!empty($edp)){    
            $public_rate = $edp->public_rate;
        }

        return json_encode(array(
            "edp_fees" => $public_rate
        ));


    }
}
