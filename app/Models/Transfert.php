<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfert extends Model
{
    use HasFactory;
    public function lots(){
        return $this->hasMany(Lot::class);
    }
    public function client(){
        return $this->belongsTo(Client::class);
    }
    public function fournisseur(){
        return $this->belongsTo(Fournisseur::class);
    }
    public function vehicule(){
        return $this->belongsTo(vehicule::class);
    } 

    public function chauffeur(){
        return $this->belongsTo(Site::class);
    }
    public function produit(){
        return $this->belongsTo(Produit::class);
    }
    public function provenance(){
        return $this->belongsTo(Provenance::class);
    }
    protected $guarded = [];
}
