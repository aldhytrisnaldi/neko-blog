<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Blameable;

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
}
