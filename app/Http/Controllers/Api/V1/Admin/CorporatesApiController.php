<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCorporateRequest;
use App\Http\Requests\UpdateCorporateRequest;
use App\Http\Resources\Admin\CorporateResource;
use App\Models\Corporate;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CorporatesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('corporate_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CorporateResource(Corporate::all());
    }

    public function store(StoreCorporateRequest $request)
    {
        $corporate = Corporate::create($request->all());

        return (new CorporateResource($corporate))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Corporate $corporate)
    {
        abort_if(Gate::denies('corporate_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CorporateResource($corporate);
    }

    public function update(UpdateCorporateRequest $request, Corporate $corporate)
    {
        $corporate->update($request->all());

        return (new CorporateResource($corporate))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Corporate $corporate)
    {
        abort_if(Gate::denies('corporate_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $corporate->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
