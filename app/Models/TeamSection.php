<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'ar_title',
        'en_title',
        'layout', // 'grid' or 'pyramid'
    ];

    public function members()
    {
        return $this->hasMany(TeamMember::class)->orderBy('order');
    }
}
