<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    /** @use HasFactory<\Database\Factories\CarFactory> */
    use HasFactory;

    protected $fillable = ['car_name', 'employer_id', 'user_id'];

    public function employer() {
        return $this->belongsTo(Employer::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
