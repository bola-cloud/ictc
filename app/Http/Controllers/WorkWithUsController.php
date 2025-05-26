<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmploymentInterest;
use Illuminate\Support\Facades\Storage;
use App\Models\Vacancy;

class WorkWithUsController extends Controller
{
    public function index()
    {
        return view('front.work-withus');
    }

    public function employment()
    {
        return view('front.employment_opportunities');
    }

    public function consultancy()
    {
        return view('front.consultancy');
    }

    public function internship()
    {
        return view('front.internship');
    }

    public function employInterest()
    {
        return view('front.interests.job-interest');
    }

    public function submitExpressInterest(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'field' => 'required|string|max:255',
            'brief' => 'required|string',
            'cv' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $cvPath = $request->file('cv')->store('cvs', 'public');

        \App\Models\Interest::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'field' => $request->field,
            'brief' => $request->brief,
            'cv_path' => $cvPath,
            'type' => 'Job',
        ]);

        return back()->with('success', __('lang.application_received'));
    }

    public function internshipInterest()
    {
        return view('front.interests.internship-interest');
    }

    public function submitInternshipInterest(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'field' => 'required|string|max:255',
            'brief' => 'required|string',
            'cv' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $cvPath = $request->file('cv')->store('cvs', 'public');

        \App\Models\Interest::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'field' => $request->field,
            'brief' => $request->brief,
            'cv_path' => $cvPath,
            'type' => 'Internships',
        ]);

        return back()->with('success', __('lang.application_received'));
    }

    public function consultancyInterest()
    {
        return view('front.interests.consultancy-interest');
    }

    public function submitConsultancyInterest(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'field' => 'required|string|max:255',
            'brief' => 'required|string',
            'cv' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $cvPath = $request->file('cv')->store('cvs', 'public');

        \App\Models\Interest::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'field' => $request->field,
            'brief' => $request->brief,
            'cv_path' => $cvPath,
            'type' => 'Consultancy',
        ]);

        return back()->with('success', __('lang.application_received'));
    }

    public function showJobs()
    {
        $vacancies = Vacancy::where('type', 'Job')->latest()->get();
        return view('front.vacancies.job-announcement', compact('vacancies'));
    }

    public function showConsultancies()
    {
        $vacancies = \App\Models\Vacancy::where('type', 'Consultancy')->latest()->get();
        return view('front.vacancies.consultancy-announcement', compact('vacancies'));
    }

    public function showInternships()
    {
        $vacancies = \App\Models\Vacancy::where('type', 'Internships')->latest()->get();
        return view('front.vacancies.internship-announcement', compact('vacancies'));
    }


}
