<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\AutoBudgetType;
use App\Models\Concerns\BelongsToUser;
use App\Models\Contracts\CanBelongToUser;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class AutoBudget extends Model implements CanBelongToUser
{
    use HasFactory, SoftDeletes, HasUlids, BelongsToUser;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ulid',
        'type',
        'amount',
        'period',
        'budget_id',
        'user_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type' => AutoBudgetType::class,
        'amount' => 'decimal:2',
        'budget_id' => 'integer',
        'user_id' => 'integer',
    ];

    public function budget(): BelongsTo
    {
        return $this->belongsTo(Budget::class);
    }

    public function uniqueIds()
    {
        return ['ulid'];
    }

    public function getRouteKeyName(): string
    {
        return 'ulid';
    }
}
