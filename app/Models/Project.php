<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Tambahkan ini agar kolom tech_stack otomatis jadi Array
    protected $casts = [
        'tech_stack' => 'array',
        'images'=>'array',
        'features' => 'array',
    ];
}