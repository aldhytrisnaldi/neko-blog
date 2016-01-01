<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{
    protected $fillable = [
        'specialist_name'
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];
}
