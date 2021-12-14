<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;


class Lot extends Model
{
    use HasFactory,HasSlug;

    public function getRouteKeyName()
    {
        return 'slug';
    }
    
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('nom')
            ->saveSlugsTo('slug')
            ->doNotGenerateSlugsOnUpdate();
    }
    public function campagne(){
        return $this->belongsTo(Campagne::class);
    }
    public function cooperative(){
        return $this->belongsTo(Cooperative::class);
    }
    public function fournisseur(){
        return $this->belongsTo(Fournisseur::class);
    }
    public function pil(){
        return $this->belongsTo(Pil::class);
    }
    public function chauffeur(){
        return $this->belongsTo(Chauffeur::class);
    }
    public function produit(){
        return $this->belongsTo(Produit::class);
    }
    public function client(){
        return $this->belongsTo(Client::class);
    }
    public function vehicule(){
        return $this->belongsTo(Vehicule::class);
    }
    public function provenance(){
        return $this->belongsTo(Provenance::class);
    }
    public function remorque(){
        return $this->belongsTo(Remorque::class);
    }
    public function site(){
        return $this->belongsTo(Site::class);
    }

    public function transfert(){
        return $this->belongsTo(Transfert::class);
    }
    public function analyseDechargement(){
        return $this->belongsTo(AnalyseDechargement::class);
    }
    public function analyseTransfert(){
        return $this->belongsTo(AnalyseTransfert::class);
    }
}
