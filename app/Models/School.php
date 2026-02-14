<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class School extends Model
{
    /**
     * Mass assignment fields yang diizinkan
     */
    protected $fillable = [
        'name',
        'address',
        'city',
        'province',
        'logo_url',
    ];

    /**
     * Relasi ke users (siswa yang terdaftar di sekolah ini)
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    /**
     * Relasi ke teachers (guru-guru yang mengajar di sekolah ini)
     */
    public function teachers(): HasMany
    {
        return $this->hasMany(Teacher::class);
    }
}
