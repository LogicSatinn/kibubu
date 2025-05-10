<?php

declare(strict_types=1);

namespace App\Models\Concerns;

use App\Models\User;

/**
 * @mixin \Illuminate\Database\Eloquent\Model
 */
trait BelongsToUser
{
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
