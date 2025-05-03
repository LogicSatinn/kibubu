<?php

namespace App\Models\Contracts;

interface CanBelongToInstitution
{
    public function institution(): \Illuminate\Database\Eloquent\Relations\BelongsTo;
}
