<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    protected $fillable = [
        'jarmu_id', 'kedvezmeny_szazalek', 'kezdet', 'veg'
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'jarmu_id');
    }
}