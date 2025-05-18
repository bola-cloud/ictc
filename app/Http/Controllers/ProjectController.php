<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Scope;

class ProjectController extends Controller
{
    public function show($scopeSlug, $projectSlug)
    {
        $scope = Scope::whereRaw("REPLACE(LOWER(en_title), ' ', '-') = ?", [$scopeSlug])->firstOrFail();
        $project = Project::where('scope_id', $scope->id)
                        ->whereRaw("REPLACE(LOWER(en_name), ' ', '-') = ?", [$projectSlug])
                        ->firstOrFail();

        return view('front.project-details', compact('project', 'scope'));
    }
}
