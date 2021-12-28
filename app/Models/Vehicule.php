<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory,HasSlug;
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('matricule')
            ->saveSlugsTo('slug');
    }
    public function lots(){
        return $this->hasMany(Lot::class);
    }
    protected $fillable = ['matricule'];
}
