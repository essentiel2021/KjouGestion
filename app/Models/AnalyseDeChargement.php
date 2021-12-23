<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnalyseDechargement extends Model
{
    use HasFactory;
    public $table = "analysedechargements";
    public function lots(){
        return $this->hasMany(Lot::class);
    }
    protected $guarded = ['etat'];
}
