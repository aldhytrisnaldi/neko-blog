<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Category extends Model
{
    use Blameable, HasSlug;

    protected $fillable = [
        'category_name',
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

    public function artikel()
    {
        return $this->belongsTo(Article::class, 'id');
    }

    public function categories()
    {
        return $this->hasMany(Article::class, 'article_category');
    }

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('category_name')
            ->saveSlugsTo('category_slug')
            ->usingSeparator('-');
    }
}
