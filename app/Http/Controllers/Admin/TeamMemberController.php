<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeamMember;
use App\Models\TeamSection;

class TeamMemberController extends Controller
{
    public function index()
    {
        $members = TeamMember::with('section')->orderBy('order')->get();
        $sections = TeamSection::all();
        return view('admin.our-team.team_members', compact('members', 'sections'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'team_section_id' => 'required|exists:team_sections,id',
            'en_name' => 'required|string|max:255',
            'ar_name' => 'required|string|max:255',
            'en_position' => 'required|string|max:255',
            'ar_position' => 'required|string|max:255',
            'order' => 'nullable|integer|min:0',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->only(['team_section_id', 'en_name', 'ar_name', 'en_position', 'ar_position', 'order']);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('team_members', 'public');
        }

        TeamMember::create($data);

        return redirect()->back()->with('success', __('lang.member_created'));
    }

    public function update(Request $request, TeamMember $teamMember)
    {
        $request->validate([
            'team_section_id' => 'required|exists:team_sections,id',
            'en_name' => 'required|string|max:255',
            'ar_name' => 'required|string|max:255',
            'en_position' => 'required|string|max:255',
            'ar_position' => 'required|string|max:255',
            'order' => 'nullable|integer|min:0',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->only(['team_section_id', 'en_name', 'ar_name', 'en_position', 'ar_position', 'order']);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('team_members', 'public');
        }

        $teamMember->update($data);

        return redirect()->back()->with('success', __('lang.member_updated'));
    }

    public function destroy(TeamMember $teamMember)
    {
        if ($teamMember->image) {
            \Storage::disk('public')->delete($teamMember->image);
        }

        $teamMember->delete();

        return redirect()->back()->with('success', __('lang.member_deleted'));
    }


}
