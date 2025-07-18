<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'status', 'latitude', 'longitude', 'budget_allocated', 'budget_used', // add other fields as needed
    ];
} 