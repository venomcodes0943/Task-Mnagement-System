<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'color'];
    protected $with = ['schedule'];
    public function schedule()
    {
        return $this->hasMany(Schedule::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
