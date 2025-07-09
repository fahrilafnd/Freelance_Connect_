<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Freelancer extends Model
{
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'experience',
        'skill',
        'bio',
        'rekening',
        'bank'
    ];
    
    public function projects()
    {
        return $this->belongsToMany(Project::class, 'detail_projects', 'freelancer_id', 'project_id');
    }

    public function detailProject()
    {
        return $this->hasOne(DetailProject::class);
    }
    
}
