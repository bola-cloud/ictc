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
        $scope = Scope::whereRaw("LOWER(?) = REPLACE(LOWER(en_title), ' ', '-')", [Str::slug($scopeSlug)])->firstOrFail();
        $project = Project::where('scope_id', $scope->id)
                         ->whereRaw("LOWER(?) = REPLACE(LOWER(en_name), ' ', '-')", [Str::slug($projectSlug)])
                         ->firstOrFail();

        return view('front.project-details', compact('project', 'scope'));
    }
}
