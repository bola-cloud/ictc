<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MainBanner;
use App\Models\News;

class HomeController extends Controller
{
    public function index()
    {
        $mainBanner = MainBanner::where('flag',true)->first();
        $news = News::where('flag',true)->first();
        return view('front.home',[
            'mainBanner'=>$mainBanner,
            'news'=>$news,
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
}
