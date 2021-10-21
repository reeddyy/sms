<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAchievementRequest;
use App\Http\Requests\StoreAchievementRequest;
use App\Http\Requests\UpdateAchievementRequest;
use App\Models\Achievement;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AchievementsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('achievement_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $achievements = Achievement::all();

        return view('admin.achievements.index', compact('achievements'));
    }

    public function create()
    {
        abort_if(Gate::denies('achievement_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.achievements.create');
    }

    public function store(StoreAchievementRequest $request)
    {
        $achievement = Achievement::create($request->all());

        return redirect()->route('admin.achievements.index');
    }

    public function edit(Achievement $achievement)
    {
        abort_if(Gate::denies('achievement_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.achievements.edit', compact('achievement'));
    }

    public function update(UpdateAchievementRequest $request, Achievement $achievement)
    {
        $achievement->update($request->all());

        return redirect()->route('admin.achievements.index');
    }

    public function show(Achievement $achievement)
    {
        abort_if(Gate::denies('achievement_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $achievement->load('achievementTitleResultsModules');

        return view('admin.achievements.show', compact('achievement'));
    }

    public function destroy(Achievement $achievement)
    {
        abort_if(Gate::denies('achievement_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $achievement->delete();

        return back();
    }

    public function massDestroy(MassDestroyAchievementRequest $request)
    {
        Achievement::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
