<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    protected $fillable = [
        'jarmu_id', 'felhasznalo', 'kezdet', 'veg', 'kifizetve'
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'jarmu_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'felhasznalo');
    }
}