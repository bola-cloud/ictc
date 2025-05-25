<?php

namespace App\Exports;

use App\Models\Interest;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Contracts\View\View;


class EmploymentInterestsExport implements FromCollection, WithHeadings
{
    protected $data;

    public function __construct($data = null)
    {
        $this->data = $data;
    }

    public function collection()
    {
        return $this->data ?: \App\Models\Interest::select(
            'full_name', 'email', 'field', 'brief', 'cv_path', 'created_at'
        )->get();
    }

    public function headings(): array
    {
        return ['Full Name', 'Email', 'Field', 'Brief', 'CV Path', 'Submitted At'];
    }
}
