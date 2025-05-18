<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeamSection;

class TeamSectionController extends Controller
{
    public function index()
    {
        $sections = TeamSection::orderBy('id', 'desc')->get();
        return view('admin.our-team.team_sections', compact('sections'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'en_title' => 'required|string|max:255',
            'ar_title' => 'required|string|max:255',
            'layout'   => 'required|in:grid,pyramid',
        ]);

        TeamSection::create($request->only('en_title', 'ar_title', 'layout'));

        return redirect()->back()->with('success', __('lang.section_created'));
    }

    public function update(Request $request, TeamSection $teamSection)
    {
        $request->validate([
            'en_title' => 'required|string|max:255',
            'ar_title' => 'required|string|max:255',
            'layout'   => 'required|in:grid,pyramid',
        ]);

        $teamSection->update($request->only('en_title', 'ar_title', 'layout'));

        return redirect()->back()->with('success', __('lang.section_updated'));
    }

    public function destroy(TeamSection $teamSection)
    {
        $teamSection->delete();

        return redirect()->back()->with('success', __('lang.section_deleted'));
    }

}
