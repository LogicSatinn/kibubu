<?php

declare(strict_types=1);

namespace App\Models\Contracts;

interface CanBelongToInstitution
{
    public function institution(): \Illuminate\Database\Eloquent\Relations\BelongsTo;
}
