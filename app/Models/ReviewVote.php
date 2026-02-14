<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ReviewVote extends Model
{
    /**
     * Mass assignment fields yang diizinkan
     */
    protected $fillable = [
        'review_id',
        'user_id',
        'vote_type',
    ];

    /**
     * Relasi ke review
     */
    public function review(): BelongsTo
    {
        return $this->belongsTo(Review::class);
    }

    /**
     * Relasi ke user (pemberi vote)
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
