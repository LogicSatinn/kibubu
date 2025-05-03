<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Concerns\BelongsToUser;
use App\Models\Contracts\CanBelongToUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BudgetLimit extends Model implements CanBelongToUser
{
    use HasFactory, BelongsToUser;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'amount',
        'currency',
        'start_date',
        'end_date',
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
        'amount' => 'decimal:2',
        'start_date' => 'date',
        'end_date' => 'date',
        'budget_id' => 'integer',
        'user_id' => 'integer',
    ];

    public function budget(): BelongsTo
    {
        return $this->belongsTo(Budget::class);
    }
}
