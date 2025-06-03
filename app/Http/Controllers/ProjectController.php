<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Scope;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function show($scopeSlug, $projectSlug)
    {
        $scope = Scope::whereRaw("LOWER(?) = ?", [Str::slug($scopeSlug), Str::slug($scope->en_title)])->firstOrFail();
        $project = Project::where('scope_id', $scope->id)
                         ->whereRaw("LOWER(?) = ?", [Str::slug($projectSlug), Str::slug($project->en_name)])
                         ->firstOrFail();

        return view('front.project-details', compact('project', 'scope'));
    }
}
