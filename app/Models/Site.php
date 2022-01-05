<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory,HasSlug;
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('libelle')
            ->saveSlugsTo('slug');
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function lots(){
        return $this->hasMany(Lot::class);
    }

    public function transferts(){
        return $this->hasMany(Transfert::class);
    }
    protected $guarded = [];
}
