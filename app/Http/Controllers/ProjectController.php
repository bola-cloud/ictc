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
        $scope = Scope::whereRaw("REGEXP_REPLACE(LOWER(en_title), '[^a-z0-9 ]', '') = ?", [str_replace('-', ' ', $scopeSlug)])
                      ->firstOrFail();
        $project = Project::where('scope_id', $scope->id)
                         ->whereRaw("REGEXP_REPLACE(LOWER(en_name), '[^a-z0-9 ]', '') = ?", [str_replace('-', ' ', $projectSlug)])
                         ->firstOrFail();

        return view('front.project-details', compact('project', 'scope'));
    }
}
