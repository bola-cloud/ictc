<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Scope;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index()
    {
        // Retrieve all services from the database
        $services = Service::all();
        $scopes = Scope::all();

        // Return the services view with the data
        return view('front.services', compact('services', 'scopes'));
    }

    public function showProjects($slug)
    {
        // Always match against en_title
        $scope = Scope::all()->first(function ($scope) use ($slug) {
            return Str::slug($scope->en_title) === $slug;
        });

        if (!$scope) {
            abort(404);
        }

        $projects = $scope->projects;

        return view('front.scope-projects', compact('scope', 'projects'));
    }
}
