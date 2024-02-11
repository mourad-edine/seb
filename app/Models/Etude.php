<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etude extends Model
{
    protected $fillable = ['util_id','nom_etude', 'date_debut', 'date_fin'];
    use HasFactory;
    public function util()
    {
        return $this->belongsTo(Util::class);
    }
}
