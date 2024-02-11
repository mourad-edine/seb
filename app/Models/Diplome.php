<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diplome extends Model
{
    protected $fillable = ['util_id','nom_diplome','id_candidat', 'date_debut', 'date_fin'];
    use HasFactory;

    public function util()
    {
        return $this->belongsTo(Util::class);
    }
}
