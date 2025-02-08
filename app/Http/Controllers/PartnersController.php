<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;

class PartnersController extends Controller
{
    public function index()
    {
        $partners = Partner::all()->groupBy('category'); // Group partners by category
        return view('front.partners', compact('partners'));
    }
}
