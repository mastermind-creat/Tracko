<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Milestone extends Model
{
    protected $fillable = [
        'project_id', 'name', 'description', 'due_date', 'status', 'completed_at', 'document_path'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
