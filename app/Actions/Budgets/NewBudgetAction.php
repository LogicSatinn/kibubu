<?php

declare(strict_types=1);

namespace App\Actions\Budgets;

use App\Http\Requests\NewBudgetRequest;
use App\Models\Budget;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\DatabaseManager;

final class NewBudgetAction
{
    public function __construct(
        private readonly DatabaseManager $databaseManager
    ) {}

    public function execute(NewBudgetRequest $request, Authenticatable $user): Budget
    {
        return $this->databaseManager->connection()->transaction(function () use ($request, $user): Budget {
            $budget = Budget::query()->create(attributes: [
                'name' => $request->get('name'),
                'period' => $request->get('period'),
                'active' => true,
                'user_id' => $user->getAuthIdentifier(),
            ]);

            // if ()

            return $budget;
        });
    }
}
