<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMembershipsCorporateRequest;
use App\Http\Requests\UpdateMembershipsCorporateRequest;
use App\Http\Resources\Admin\MembershipsCorporateResource;
use App\Models\MembershipsCorporate;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MembershipsCorporatesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('memberships_corporate_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MembershipsCorporateResource(MembershipsCorporate::with(['statuses', 'application_no', 'member_class', 'company_name', 'support_funds'])->get());
    }

    public function store(StoreMembershipsCorporateRequest $request)
    {
        $membershipsCorporate = MembershipsCorporate::create($request->all());
        $membershipsCorporate->statuses()->sync($request->input('statuses', []));
        $membershipsCorporate->support_funds()->sync($request->input('support_funds', []));

        return (new MembershipsCorporateResource($membershipsCorporate))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(MembershipsCorporate $membershipsCorporate)
    {
        abort_if(Gate::denies('memberships_corporate_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MembershipsCorporateResource($membershipsCorporate->load(['statuses', 'application_no', 'member_class', 'company_name', 'support_funds']));
    }

    public function update(UpdateMembershipsCorporateRequest $request, MembershipsCorporate $membershipsCorporate)
    {
        $membershipsCorporate->update($request->all());
        $membershipsCorporate->statuses()->sync($request->input('statuses', []));
        $membershipsCorporate->support_funds()->sync($request->input('support_funds', []));

        return (new MembershipsCorporateResource($membershipsCorporate))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(MembershipsCorporate $membershipsCorporate)
    {
        abort_if(Gate::denies('memberships_corporate_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $membershipsCorporate->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
