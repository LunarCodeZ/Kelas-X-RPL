<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'image_url',
        'live_link',
        'github_link',
        'tech_stack'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
