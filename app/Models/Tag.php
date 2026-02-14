<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    /**
     * Mass assignment fields yang diizinkan
     */
    protected $fillable = [
        'name',
        'emoji',
    ];

    /**
     * Relasi ke reviews (many-to-many)
     */
    public function reviews(): BelongsToMany
    {
        return $this->belongsToMany(Review::class, 'review_tag')
                    ->withTimestamps();
    }
}
