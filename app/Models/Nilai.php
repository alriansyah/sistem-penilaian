<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Nilai extends Model
{
    use HasFactory;

    protected $table = 'nilai';
    protected $fillable = [
        'nilai',
        'mapel_id',
        'student_id'
    ];

    /**
     * Get all of the comments for the Nilai
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    // public function student(): HasMany
    // {
    //     return $this->hasMany(Student::class);
    // }

    /**
     * Get the user that owns the Nilai
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function mapel(): BelongsTo
    {
        return $this->belongsTo(MataPelajaran::class);
    }
}