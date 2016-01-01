<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Article extends Model
{
    use Blameable, HasSlug;

    protected $fillable = [
        'article_title',
        'article_slug',
        'article_images',
        'article_description',
        'article_category',
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

    public function category()
    {
        return $this->belongsTo(Category::class, 'article_category');
    }

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('article_title')
            ->saveSlugsTo('article_slug')
            ->usingSeparator('-');
    }
}
