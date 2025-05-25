<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;
    protected $fillable = [
        'en_title',
        'ar_title',
        'en_description',
        'ar_description',
        'location',
        'job_type',
        'type',
        'deadline',
    ];

    protected $casts = [
        'deadline' => 'date',
    ];

    public function getTitleAttribute()
    {
        return app()->getLocale() === 'ar' ? $this->ar_title : $this->en_title;
    }

    public function getDescriptionAttribute()
    {
        return app()->getLocale() === 'ar' ? $this->ar_description : $this->en_description;
    }
}
