<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\AccountType;
use App\Models\Concerns\BelongsToUser;
use App\Models\Contracts\CanBelongToUser;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountCategory extends Model implements CanBelongToUser
{
    use BelongsToUser, HasUlids;

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

    public function accounts(): HasMany
    {
        return $this->hasMany(Account::class, 'account_category_id');
    }

    public function uniqueIds(): array
    {
        return ['ulid'];
    }

    public function getRouteKeyName(): string
    {
        return 'ulid';
    }
}
