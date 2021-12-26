<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['name','track_id'];

    public function track()
    {
        return $this->belongsTo(Track::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
