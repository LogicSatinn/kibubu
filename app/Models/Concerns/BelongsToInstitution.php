<?php

declare(strict_types=1);

namespace App\Models\Concerns;

use App\Models\Institution;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @mixin \Illuminate\Database\Eloquent\Model
 */
trait BelongsToInstitution
{
    public function institution(): BelongsTo
    {
        return $this->belongsTo(Institution::class, 'institution_id');
    }
}
