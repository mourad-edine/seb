<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Util extends Model
{
    protected $fillable = ['nom', 'email', 'code', 'phone', 'cv'];

    use HasFactory;
    public function etudes()
    {
        return $this->hasMany(Etude::class);
    }

    public function qualifs()
    {
        return $this->hasMany(Qualif::class);
    }

    public function diplomes()
    {
        return $this->hasMany(Diplome::class);
    }
}
