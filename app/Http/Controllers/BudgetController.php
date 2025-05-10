<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Actions\Budgets\NewBudgetAction;
use App\Http\Requests\NewBudgetRequest;
use App\Models\Budget;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

class BudgetController extends Controller
{
    public function __construct(
        private readonly NewBudgetAction $newBudgetAction
    ) {}

    public function index(): Response
    {
        return Inertia::render('budgets/index', [
            'budgets' => Budget::all(),
        ]);
    }

    public function create(): View
    {
        return view('budgets.create');
    }

    public function store(NewBudgetRequest $request): RedirectResponse
    {
        $budget = $this->newBudgetAction->execute(request: $request, user: $request->user());

        return redirect()->route('budgets.create');
    }
}
