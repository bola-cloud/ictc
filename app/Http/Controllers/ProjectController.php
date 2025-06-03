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
        // Find the scope in memory using slug comparison
        $scope = Scope::all()->first(function ($s) use ($scopeSlug) {
            return Str::slug($s->en_title) === $scopeSlug;
        });

        abort_if(!$scope, 404);

        // Find the project within that scope, using slug logic
        $project = $scope->projects->first(function ($p) use ($projectSlug) {
            return Str::slug($p->en_name) === $projectSlug;
        });

        abort_if(!$project, 404);

        return view('front.project-details', compact('project', 'scope'));
    }
}
