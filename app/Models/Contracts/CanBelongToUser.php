<?php

namespace App\Models\Contracts;

interface CanBelongToUser
{
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo;
}
