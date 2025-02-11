<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MainBanner;
use App\Models\News;
use App\Models\Partner;
use App\Models\Scope;

class HomeController extends Controller
{
    public function index()
    {
        $mainBanner = MainBanner::where('flag',true)->first();
        $news = News::where('flag',true)->first();
        $partners = Partner::all();
        $scopes = Scope::all();
        return view('front.home',[
            'mainBanner'=>$mainBanner,
            'news'=>$news,
            'partners'=>$partners,
            'scopes'=>$scopes,
        ]);
    }

    public function newsDetails($id)
    {
        $news = News::find($id);
        return view('front.news-details',[
            'news'=>$news,
        ]);
    }

    public function latestNews()
    {
        $news = News::all();
        return view('front.latest-news',[
            'news'=>$news,
        ]);
    }

    public function showScopeProjects($id) {
        $scope = Scope::findOrFail($id);
        $projects = $scope->projects ?? collect(); // Ensures an empty collection instead of null
        return view('front.projects', compact('scope', 'projects'));
    }
}
