<?php

namespace App\Models;

use App\Models\Concerns\BelongsToInstitution;
use App\Models\Concerns\BelongsToUser;
use App\Models\Contracts\CanBelongToInstitution;
use App\Models\Contracts\CanBelongToUser;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreditCard extends Model implements CanBelongToUser, CanBelongToInstitution
{
    use SoftDeletes, HasUlids, BelongsToUser, BelongsToInstitution;

    protected $fillable = [
        "brand",
        "name",
        "description",
        "interest_rate",
        "credit_limit",
        "balance",
        "institution_id",
        "user_id"
    ];

    protected $casts = [
        'id' => 'integer',
        'interest_rate' => 'decimal:2',
        'institution_id' => 'integer',
        'user_id' => 'integer',
    ];

    public function uniqueIds(): array
    {
        return ['ulid'];
    }

    public function getRouteKeyName(): string
    {
        return 'ulid';
    }
}
