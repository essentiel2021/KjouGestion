<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnalyseTransfert extends Model
{
    use HasFactory;
    public $table = "analysetransferts";
    public function lots(){
        return $this->hasMany(Lot::class);
    }
    protected $guarded = ['etat'];
}
