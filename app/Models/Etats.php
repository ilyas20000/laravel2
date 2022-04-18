<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etats extends Model
{
    use HasFactory;
    protected $fillable=['nom','dossier_pedag','dossier_scient','dossier_administ'];
}


