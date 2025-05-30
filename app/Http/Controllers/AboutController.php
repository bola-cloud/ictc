<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scope;
use App\Models\TeamSection;
use App\Models\Service;


class AboutController extends Controller
{
    public function index()
    {
        $scopes = Scope::all();
        $teamSections = TeamSection::with('members')->orderBy('id')->get();
        $services = Service::all();

        return view('front.about', compact('scopes', 'teamSections', 'services'));
    }
}
