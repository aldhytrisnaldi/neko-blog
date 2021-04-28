<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Doctor extends Model
{
    use Blameable, HasSlug;

    protected $fillable = [
        'doctor_name',
        'doctor_slug',
        'doctor_images',
        'doctor_specialist',
        'monday',
        'tuesday',
        'wednesday',
        'thursday',
        'friday',
        'saturday',
        'sunday',
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

    public function specialist()
    {
        return $this->belongsTo(Specialist::class, 'doctor_specialist');
    }

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('doctor_name')
            ->saveSlugsTo('doctor_slug')
            ->usingSeparator('-');
    }
}
