<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\AccountType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Account extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'color',
        'auto_generated',
        'account_number',
        'balance',
        'interest_rate',
        'description',
        'user_id',
        'institution_id',
        'account_category_id',

        // Credit Cards only
        'brand',
        'credit_limit',

        // Loans only
        'opened_on',
        'expected_closure_date',
        'principal',
        'remaining_balance',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'auto_generated' => 'boolean',
        'type' => AccountType::class,
        'balance' => 'decimal:2',
        'interest_rate' => 'decimal:2',
        'user_id' => 'integer',
        'institution_id' => 'integer',
        'account_category_id' => 'integer',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function institution(): BelongsTo
    {
        return $this->belongsTo(Institution::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(AccountCategory::class, 'account_category_id');
    }
}
