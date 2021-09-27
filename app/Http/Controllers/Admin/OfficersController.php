<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyOfficerRequest;
use App\Http\Requests\StoreOfficerRequest;
use App\Http\Requests\UpdateOfficerRequest;
use App\Models\Officer;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OfficersController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('officer_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $officers = Officer::all();

        return view('admin.officers.index', compact('officers'));
    }

    public function create()
    {
        abort_if(Gate::denies('officer_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.officers.create');
    }

    public function store(StoreOfficerRequest $request)
    {
        $officer = Officer::create($request->all());

        return redirect()->route('admin.officers.index');
    }

    public function edit(Officer $officer)
    {
        abort_if(Gate::denies('officer_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.officers.edit', compact('officer'));
    }

    public function update(UpdateOfficerRequest $request, Officer $officer)
    {
        $officer->update($request->all());

        return redirect()->route('admin.officers.index');
    }

    public function show(Officer $officer)
    {
        abort_if(Gate::denies('officer_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $officer->load('officerNameEnrolmentsQualifications', 'officerNameAdmissionsEdps');

        return view('admin.officers.show', compact('officer'));
    }

    public function destroy(Officer $officer)
    {
        abort_if(Gate::denies('officer_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $officer->delete();

        return back();
    }

    public function massDestroy(MassDestroyOfficerRequest $request)
    {
        Officer::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
