<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sac extends Model
{
    use HasFactory;
    public function fournisseur(){
        return $this->belongsTo(Fournisseur::class);
    }
}
