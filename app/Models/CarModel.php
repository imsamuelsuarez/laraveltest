<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Car;
use App\Models\CarBrand;

class CarModel extends Model
{
protected $guarded = [];

public function cars() 
{
    return $this->hasMany(Car::class);
}
public function brand() {
    return $this->belongsTo(CarBrand::class);
}
}
