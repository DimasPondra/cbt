<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RoleHasPermission extends Model
{
    use HasFactory;

    protected $fillable = ['role_id', 'permission_id'];

    /** Relationships */
    public function permission(): BelongsTo
    {
        return $this->belongsTo(Permission::class);
    }
}
