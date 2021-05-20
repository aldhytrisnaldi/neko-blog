<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Promotion extends Model
{
    use Blameable, HasSlug;

    protected $fillable = [
        'promotion_name',
        'promotion_images',
        'promotion_slug',
        'promotion_description',
        'created_by',
        'updated_by'
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('promotion_name')
            ->saveSlugsTo('promotion_slug')
            ->usingSeparator('-');
    }
}
