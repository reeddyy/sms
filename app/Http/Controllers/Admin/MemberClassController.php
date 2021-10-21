<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyMemberClassRequest;
use App\Http\Requests\StoreMemberClassRequest;
use App\Http\Requests\UpdateMemberClassRequest;
use App\Models\MemberClass;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MemberClassController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('member_class_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $memberClasses = MemberClass::all();

        return view('admin.memberClasses.index', compact('memberClasses'));
    }

    public function create()
    {
        abort_if(Gate::denies('member_class_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.memberClasses.create');
    }

    public function store(StoreMemberClassRequest $request)
    {
        $memberClass = MemberClass::create($request->all());

        return redirect()->route('admin.member-classes.index');
    }

    public function edit(MemberClass $memberClass)
    {
        abort_if(Gate::denies('member_class_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.memberClasses.edit', compact('memberClass'));
    }

    public function update(UpdateMemberClassRequest $request, MemberClass $memberClass)
    {
        $memberClass->update($request->all());

        return redirect()->route('admin.member-classes.index');
    }

    public function show(MemberClass $memberClass)
    {
        abort_if(Gate::denies('member_class_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $memberClass->load('memberClassMembershipsIndividuals', 'memberClassMembershipsCorporates');

        return view('admin.memberClasses.show', compact('memberClass'));
    }

    public function destroy(MemberClass $memberClass)
    {
        abort_if(Gate::denies('member_class_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $memberClass->delete();

        return back();
    }

    public function massDestroy(MassDestroyMemberClassRequest $request)
    {
        MemberClass::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
