<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use HasFactory;

    protected $fillable = ['team_section_id', 'ar_name', 'en_name', 'ar_position', 'en_position', 'image', 'order'];

    public function section()
    {
        return $this->belongsTo(TeamSection::class);
    }
}
