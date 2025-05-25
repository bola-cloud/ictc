<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vacancy;

class JobVacancyController extends Controller
{
    public function index()
    {
        $vacancies = Vacancy::where('type', 'Job')->latest()->paginate(10);
        return view('admin.vacancies.job.index', compact('vacancies'));
    }

    public function create()
    {
        return view('admin.vacancies.job.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'en_title' => 'required|string',
            'ar_title' => 'required|string',
            'location' => 'nullable|string',
            'job_type' => 'nullable|string',
            'deadline' => 'nullable|date',
            'en_description' => 'required|string',
            'ar_description' => 'required|string',
        ]);

        Vacancy::create([
            'en_title' => $request->en_title,
            'ar_title' => $request->ar_title,
            'location' => $request->location,
            'job_type' => $request->job_type,
            'deadline' => $request->deadline,
            'en_description' => $request->en_description,
            'ar_description' => $request->ar_description,
            'type' => 'Job',
        ]);

        return redirect()->route('admin.jobs.index')->with('success', __('lang.job_vacancy_created'));
    }

    public function edit(Vacancy $job)
    {
        return view('admin.vacancies.job.edit', compact('job'));
    }

    public function update(Request $request, Vacancy $job)
    {
        $request->validate([
            'en_title' => 'required|string',
            'ar_title' => 'required|string',
            'location' => 'nullable|string',
            'job_type' => 'nullable|string',
            'deadline' => 'nullable|date',
            'en_description' => 'required|string',
            'ar_description' => 'required|string',
        ]);

        $job->update([
            'en_title' => $request->en_title,
            'ar_title' => $request->ar_title,
            'location' => $request->location,
            'job_type' => $request->job_type,
            'deadline' => $request->deadline,
            'en_description' => $request->en_description,
            'ar_description' => $request->ar_description,
        ]);

        return redirect()->route('admin.jobs.index')->with('success', __('lang.job_vacancy_updated'));
    }

    public function destroy(Vacancy $vacancy)
    {
        $vacancy->delete();
        return back()->with('success', __('lang.job_vacancy_deleted'));
    }
}
