<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyFacilitatorRequest;
use App\Http\Requests\StoreFacilitatorRequest;
use App\Http\Requests\UpdateFacilitatorRequest;
use App\Models\Facilitator;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FacilitatorsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('facilitator_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $facilitators = Facilitator::all();

        return view('admin.facilitators.index', compact('facilitators'));
    }

    public function create()
    {
        abort_if(Gate::denies('facilitator_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.facilitators.create');
    }

    public function store(StoreFacilitatorRequest $request)
    {
        $facilitator = Facilitator::create($request->all());

        return redirect()->route('admin.facilitators.index');
    }

    public function edit(Facilitator $facilitator)
    {
        abort_if(Gate::denies('facilitator_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.facilitators.edit', compact('facilitator'));
    }

    public function update(UpdateFacilitatorRequest $request, Facilitator $facilitator)
    {
        $facilitator->update($request->all());

        return redirect()->route('admin.facilitators.index');
    }

    public function show(Facilitator $facilitator)
    {
        abort_if(Gate::denies('facilitator_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $facilitator->load('facilitatorNameAdmissionsEdps');

        return view('admin.facilitators.show', compact('facilitator'));
    }

    public function destroy(Facilitator $facilitator)
    {
        abort_if(Gate::denies('facilitator_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $facilitator->delete();

        return back();
    }

    public function massDestroy(MassDestroyFacilitatorRequest $request)
    {
        Facilitator::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
