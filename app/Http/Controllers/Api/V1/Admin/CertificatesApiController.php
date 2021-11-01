<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCertificateRequest;
use App\Http\Requests\UpdateCertificateRequest;
use App\Http\Resources\Admin\CertificateResource;
use App\Models\Certificate;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CertificatesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('certificate_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CertificateResource(Certificate::with(['recipient_name'])->get());
    }

    public function store(StoreCertificateRequest $request)
    {
        $certificate = Certificate::create($request->all());

        return (new CertificateResource($certificate))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Certificate $certificate)
    {
        abort_if(Gate::denies('certificate_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CertificateResource($certificate->load(['recipient_name']));
    }

    public function update(UpdateCertificateRequest $request, Certificate $certificate)
    {
        $certificate->update($request->all());

        return (new CertificateResource($certificate))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Certificate $certificate)
    {
        abort_if(Gate::denies('certificate_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $certificate->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
