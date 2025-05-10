<?php

declare(strict_types=1);

namespace App\Data;

use App\Enums\AccountType;
use App\Models\Account;
use App\Models\AccountCategory;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Data;
use Spatie\TypeScriptTransformer\Attributes\LiteralTypeScriptType;
use Spatie\TypeScriptTransformer\Attributes\TypeScript;

#[TypeScript('AccountCategory')]
class AccountCategoryData extends Data
{
    public function __construct(
        public string $ulid,
        public string $name,
        public AccountType $type,
        public string $color,
        /** @var Collection<int, AccountData> */
        #[LiteralTypeScriptType('Account[]')]
        public ?Collection $accounts = null,
    ) {}

    public static function fromModel(AccountCategory $category): self
    {
        return new self(
            ulid: $category->ulid,
            name: $category->name,
            type: $category->type,
            color: $category->color,
            accounts: filled($category->accounts)
                ? $category->accounts->map(fn (Account $account): AccountData => AccountData::from($account))
                : null
        );
    }
}
