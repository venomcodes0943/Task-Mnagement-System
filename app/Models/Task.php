<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $with = ['comment', 'checkout'];
    public function schedule()
    {
        return $this->belongsTo(Project::class);
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function checkout()
    {
        return $this->hasMany(Checkout::class);
    }

}
