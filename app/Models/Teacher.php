<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Teacher extends Model
{
    /**
     * Mass assignment fields yang diizinkan
     */
    protected $fillable = [
        'name',
        'school_id',
        'subject',
        'photo_url',
    ];

    /**
     * Relasi ke school (sekolah tempat guru mengajar)
     */
    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }

    /**
     * Relasi ke reviews (review-review untuk guru ini)
     */
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }
}
