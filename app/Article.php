<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use Blameable;

    protected $fillable = [
        'article_title',
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
}
