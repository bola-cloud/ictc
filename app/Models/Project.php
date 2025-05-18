<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'scope_id',
        'ar_name',
        'en_name',
        'ar_description',
        'en_description',
        'image',
    ];

    // Relationship with Scope
    public function scope() {
        return $this->belongsTo(Scope::class, 'scope_id');
    }

    // Image Accessor (Optional)
    public function getImageUrlAttribute() {
        return $this->image ? asset('storage/' . $this->image) : asset('img/default-project.png');
    }

    public function getSlugUrlAttribute()
    {
        return route('frontend.project.show', [
            'scopeSlug' => Str::slug($this->scope->en_title),
            'projectSlug' => Str::slug($this->en_name),
        ]);
    }
}
