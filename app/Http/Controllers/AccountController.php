<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\AccountStoreRequest;
use App\Http\Requests\AccountUpdateRequest;
use App\Models\Account;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AccountController extends Controller
{
    public function index(Request $request): View
    {
        $accounts = Account::all();

        return view('account.index', [
            'accounts' => $accounts,
        ]);
    }

    public function create(Request $request): View
    {
        return view('account.create');
    }

    public function store(AccountStoreRequest $request): RedirectResponse
    {
        $account = Account::create($request->validated());

        $request->session()->flash('account.id', $account->id);

        return redirect()->route('accounts.index');
    }

    public function show(Request $request, Account $account): View
    {
        return view('account.show', [
            'account' => $account,
        ]);
    }

    public function edit(Request $request, Account $account): View
    {
        return view('account.edit', [
            'account' => $account,
        ]);
    }

    public function update(AccountUpdateRequest $request, Account $account): RedirectResponse
    {
        $account->update($request->validated());

        $request->session()->flash('account.id', $account->id);

        return redirect()->route('accounts.index');
    }

    public function destroy(Request $request, Account $account): RedirectResponse
    {
        $account->delete();

        return redirect()->route('accounts.index');
    }
}
