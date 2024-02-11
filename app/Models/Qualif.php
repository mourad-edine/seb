<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qualif extends Model
{
    use HasFactory;
    protected $fillable = ['util_id','nom_qualification'];
    public function util()
    {
        return $this->belongsTo(Util::class);
    }
}
