<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;

class Cooperative extends Model
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
            // ->doNotGenerateSlugsOnUpdate()
            ;
    }
    public function lots(){
        return $this->hasMany(Lot::class);
    }
    protected $guarded = [];
}
