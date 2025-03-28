<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'gyarto', 'tipus', 'ar', 'kepek'
    ];

    protected $casts = [
        'kepek' => 'array'
    ];

    public function rentals()
    {
        return $this->hasMany(Rental::class, 'jarmu_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'jarmu_id');
    }
}