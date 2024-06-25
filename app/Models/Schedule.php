<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;


    protected $fillable = ['project_id', 'title'];
    protected $casts = [
        'dueDate' => 'datetime',
    ];
    protected $with = ['task'];
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
    public function task()
    {
        return $this->hasMany(Task::class);
    }
}
