<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyCorporateRequest;
use App\Http\Requests\StoreCorporateRequest;
use App\Http\Requests\UpdateCorporateRequest;
use App\Models\Corporate;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CorporatesController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('corporate_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $corporates = Corporate::all();

        return view('admin.corporates.index', compact('corporates'));
    }

    public function create()
    {
        abort_if(Gate::denies('corporate_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.corporates.create');
    }

    public function store(StoreCorporateRequest $request)
    {
        $corporate = Corporate::create($request->all());

        return redirect()->route('admin.corporates.index');
    }

    public function edit(Corporate $corporate)
    {
        abort_if(Gate::denies('corporate_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.corporates.edit', compact('corporate'));
    }

    public function update(UpdateCorporateRequest $request, Corporate $corporate)
    {
        $corporate->update($request->all());

        return redirect()->route('admin.corporates.index');
    }

    public function show(Corporate $corporate)
    {
        abort_if(Gate::denies('corporate_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $corporate->load('companyNameMembershipsCorporates');

        return view('admin.corporates.show', compact('corporate'));
    }

    public function destroy(Corporate $corporate)
    {
        abort_if(Gate::denies('corporate_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $corporate->delete();

        return back();
    }

    public function massDestroy(MassDestroyCorporateRequest $request)
    {
        Corporate::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
