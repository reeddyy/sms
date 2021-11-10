<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyIndividualRequest;
use App\Http\Requests\StoreIndividualRequest;
use App\Http\Requests\UpdateIndividualRequest;
use App\Models\Individual;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IndividualsController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('individual_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $individuals = Individual::all();

        return view('admin.individuals.index', compact('individuals'));
    }

    public function create()
    {
        abort_if(Gate::denies('individual_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.individuals.create');
    }

    public function store(StoreIndividualRequest $request)
    {

        $related_work_exp = $request->duration_of_year_s_1 + $request->duration_of_year_s_2 + $request->duration_of_year_s_3;
        $request['total_year_s_related_work_exp'] = $related_work_exp;

        $individual = Individual::create($request->all());

        return redirect()->route('admin.individuals.index');
    }

    public function edit(Individual $individual)
    {
        abort_if(Gate::denies('individual_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.individuals.edit', compact('individual'));
    }

    public function update(UpdateIndividualRequest $request, Individual $individual)
    {

        $related_work_exp = $request->duration_of_year_s_1 + $request->duration_of_year_s_2 + $request->duration_of_year_s_3;
        $request['total_year_s_related_work_exp'] = $related_work_exp;
       
        $individual->update($request->all());

        return redirect()->route('admin.individuals.index');
    }

    public function show(Individual $individual)
    {
        abort_if(Gate::denies('individual_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $individual->load('memberNameMembershipsIndividuals', 'recipientNameCertificates', 'studentNameEnrolmentsQualifications', 'participantNameAdmissionsEdps', 'applicantNameApplicantsAdas');

        return view('admin.individuals.show', compact('individual'));
    }

    public function destroy(Individual $individual)
    {
        abort_if(Gate::denies('individual_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $individual->delete();

        return back();
    }

    public function massDestroy(MassDestroyIndividualRequest $request)
    {
        Individual::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
