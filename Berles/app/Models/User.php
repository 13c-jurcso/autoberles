<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'felhasznalonev', 'nev', 'email', 'jogositvany_datum', 'szamlazasi_cim', 'jelszo'
    ];

    protected $hidden = [
        'jelszo',
    ];

    public function rentals()
    {
        return $this->hasMany(Rental::class, 'felhasznalo');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'felhasznalo');
    }
}