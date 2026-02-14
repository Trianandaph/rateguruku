<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Review extends Model
{
    /**
     * Mass assignment fields yang diizinkan
     */
    protected $fillable = [
        'user_id',
        'teacher_id',
        'rating_teaching',
        'rating_clarity',
        'rating_patience',
        'rating_fun',
        'rating_fairness',
        'comment',
        'is_approved',
    ];

    /**
     * Cast atribut ke tipe data yang sesuai
     */
    protected $casts = [
        'is_approved' => 'boolean',
        'rating_teaching' => 'integer',
        'rating_clarity' => 'integer',
        'rating_patience' => 'integer',
        'rating_fun' => 'integer',
        'rating_fairness' => 'integer',
    ];

    /**
     * Relasi ke user (pembuat review)
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relasi ke teacher (guru yang di-review)
     */
    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }

    /**
     * Relasi ke tags (many-to-many)
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'review_tag')
                    ->withTimestamps();
    }

    /**
     * Relasi ke votes (upvote/downvote)
     */
    public function votes(): HasMany
    {
        return $this->hasMany(ReviewVote::class);
    }
}
