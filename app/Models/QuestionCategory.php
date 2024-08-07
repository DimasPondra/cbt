<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class QuestionCategory extends Model
{
    use HasFactory;

    const CATEGORY_MAP = [
        'listening', 'reading', 'writing'
    ];

    protected $fillable = [
        'test_id', 'name', 'description', 'file_id'
    ];

    /** Relationships */
    public function test(): BelongsTo
    {
        return $this->belongsTo(Test::class);
    }

    public function file(): BelongsTo
    {
        return $this->belongsTo(File::class);
    }

    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }
}
