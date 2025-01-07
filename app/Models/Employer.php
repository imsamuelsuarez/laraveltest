<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Car;



class Employer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function cars() {
        return $this->hasMany(Car::class);
    }
    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }
}
