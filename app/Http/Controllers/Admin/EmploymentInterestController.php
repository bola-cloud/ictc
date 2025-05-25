<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Interest;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EmploymentInterestsExport;

class EmploymentInterestController extends Controller
{
    public function listJobInterests(Request $request)
    {
        $query = Interest::where('type', 'Job');

        if ($search = $request->input('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('full_name', 'like', "%$search%")
                  ->orWhere('email', 'like', "%$search%")
                  ->orWhere('field', 'like', "%$search%");
            });
        }

        $interests = $query->latest()->paginate(15);

        return view('admin.interests.jobs', compact('interests', 'search'));
    }

    public function exportJobInterests()
    {
        $data = Interest::where('type', 'Job')->get([
            'full_name', 'email', 'field', 'brief', 'cv_path', 'created_at'
        ]);

        return Excel::download(new EmploymentInterestsExport($data), 'job_interests.xlsx');
    }

    public function listConsultancyInterests(Request $request)
    {
        $query = Interest::where('type', 'Consultancy');

        if ($search = $request->input('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('full_name', 'like', "%$search%")
                  ->orWhere('email', 'like', "%$search%")
                  ->orWhere('field', 'like', "%$search%");
            });
        }

        $interests = $query->latest()->paginate(15);

        return view('admin.interests.consultancies', compact('interests', 'search'));
    }

    public function exportConsultancyInterests()
    {
        $data = Interest::where('type', 'Consultancy')->get([
            'full_name', 'email', 'field', 'brief', 'cv_path', 'created_at'
        ]);

        return Excel::download(new EmploymentInterestsExport($data), 'consultancy_interests.xlsx');
    }

    public function listInternshipInterests(Request $request)
    {
        $query = Interest::where('type', 'Internships');

        if ($search = $request->input('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('full_name', 'like', "%$search%")
                  ->orWhere('email', 'like', "%$search%")
                  ->orWhere('field', 'like', "%$search%");
            });
        }

        $interests = $query->latest()->paginate(15);

        return view('admin.interests.internships', compact('interests', 'search'));
    }

    public function exportInternshipInterests()
    {
        $data = Interest::where('type', 'Internships')->get([
            'full_name', 'email', 'field', 'brief', 'cv_path', 'created_at'
        ]);

        return Excel::download(new EmploymentInterestsExport($data), 'internship_interests.xlsx');
    }
}
