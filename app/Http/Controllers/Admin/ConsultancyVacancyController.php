<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vacancy;

class ConsultancyVacancyController extends Controller
{
    public function index()
    {
        $vacancies = Vacancy::where('type', 'Consultancy')->latest()->paginate(10);
        return view('admin.vacancies.consultancy.index', compact('vacancies'));
    }

    public function create()
    {
        return view('admin.vacancies.consultancy.create');
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
            'type' => 'Consultancy',
        ]);

        return redirect()->route('admin.consultancies.index')->with('success', __('lang.consultancy_vacancy_created'));
    }

    public function edit(Vacancy $consultancy)
    {
        return view('admin.vacancies.consultancy.edit', compact('consultancy'));
    }

    public function update(Request $request, Vacancy $consultancy)
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

        $consultancy->update([
            'en_title' => $request->en_title,
            'ar_title' => $request->ar_title,
            'location' => $request->location,
            'job_type' => $request->job_type,
            'deadline' => $request->deadline,
            'en_description' => $request->en_description,
            'ar_description' => $request->ar_description,
        ]);

        return redirect()->route('admin.consultancies.index')->with('success', __('lang.vacancy_updated'));
    }

    public function destroy(Vacancy $vacancy)
    {
        $vacancy->delete();
        return back()->with('success', 'Vacancy deleted.');
    }
}
