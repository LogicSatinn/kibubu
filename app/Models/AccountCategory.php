<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\AccountType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountCategory extends Model
{
    /**
     * @var array
     */
    public $fillable = [
        'name',
        'type',
        'color',
        'user_id',
    ];

    /**
     * @var array
     */
    public $casts = [
        'user_id' => 'integer',
        'type' => AccountType::class,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function accounts(): HasMany
    {
        return $this->hasMany(Account::class, 'account_category_id');
    }
}
