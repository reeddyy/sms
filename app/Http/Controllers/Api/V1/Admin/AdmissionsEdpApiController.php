<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdmissionsEdpRequest;
use App\Http\Requests\UpdateAdmissionsEdpRequest;
use App\Http\Resources\Admin\AdmissionsEdpResource;
use App\Models\AdmissionsEdp;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdmissionsEdpApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('admissions_edp_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AdmissionsEdpResource(AdmissionsEdp::with(['admission_status', 'edp_title', 'facilitator_name', 'venue', 'participant_name', 'officer_name'])->get());
    }

    public function store(StoreAdmissionsEdpRequest $request)
    {
        $admissionsEdp = AdmissionsEdp::create($request->all());

        return (new AdmissionsEdpResource($admissionsEdp))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(AdmissionsEdp $admissionsEdp)
    {
        abort_if(Gate::denies('admissions_edp_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AdmissionsEdpResource($admissionsEdp->load(['admission_status', 'edp_title', 'facilitator_name', 'venue', 'participant_name', 'officer_name']));
    }

    public function update(UpdateAdmissionsEdpRequest $request, AdmissionsEdp $admissionsEdp)
    {
        $admissionsEdp->update($request->all());

        return (new AdmissionsEdpResource($admissionsEdp))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(AdmissionsEdp $admissionsEdp)
    {
        abort_if(Gate::denies('admissions_edp_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $admissionsEdp->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
