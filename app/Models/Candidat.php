<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    protected $fillable = ['nom','email','code','phone','status','cv_path',];
    use HasFactory;
}
