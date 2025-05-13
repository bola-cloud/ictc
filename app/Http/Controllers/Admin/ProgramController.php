<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\Scope;

class ProgramController extends Controller
{
    public function index(Scope $scope)
    {
        $programs = $scope->programs; // Get related programs
        return view('admin.programs.index', compact('programs', 'scope'));
    }

    public function create(Scope $scope)
    {
        return view('admin.programs.create', compact('scope'));
    }

    public function store(Request $request, Scope $scope)
    {
        $request->validate([
            'en_title' => 'required|string|max:255',
            'ar_title' => 'required|string|max:255',
            'en_description' => 'required|string',
            'ar_description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $program = new Program($request->all());
        $program->scope()->associate($scope);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('programs', 'public');
            $program->image = $path;
        }

        $program->save();

        return redirect()->route('admin.scopes.show', $scope->id)->with('success', __('lang.program_added'));
    }

    public function show(Scope $scope, Program $program)
    {
        return view('admin.programs.show', compact('scope', 'program'));
    }

    public function edit(Scope $scope, Program $program)
    {
        return view('admin.programs.edit', compact('scope', 'program'));
    }

    public function update(Request $request, Scope $scope, Program $program)
    {
        $request->validate([
            'en_title' => 'required|string|max:255',
            'ar_title' => 'required|string|max:255',
            'en_description' => 'required|string',
            'ar_description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $program->update($request->all());

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('programs', 'public');
            $program->image = $path;
        }

        $program->save();

        return redirect()->route('admin.scopes.show', $scope->id)->with('success', __('lang.program_updated'));
    }

    public function destroy(Scope $scope, Program $program)
    {
        $program->delete();
        return redirect()->route('admin.scopes.show', $scope->id)->with('success', __('lang.program_deleted'));
    }
}
