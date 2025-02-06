<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreditCardStoreRequest;
use App\Http\Requests\CreditCardUpdateRequest;
use App\Models\CreditCard;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CreditCardController extends Controller
{
    public function index(Request $request): View
    {
        $creditCards = CreditCard::all();

        return view('creditCard.index', [
            'creditCards' => $creditCards,
        ]);
    }

    public function create(Request $request): View
    {
        return view('creditCard.create');
    }

    public function store(CreditCardStoreRequest $request): RedirectResponse
    {
        $creditCard = CreditCard::create($request->validated());

        $request->session()->flash('creditCard.id', $creditCard->id);

        return redirect()->route('creditCards.index');
    }

    public function show(Request $request, CreditCard $creditCard): View
    {
        return view('creditCard.show', [
            'creditCard' => $creditCard,
        ]);
    }

    public function edit(Request $request, CreditCard $creditCard): View
    {
        return view('creditCard.edit', [
            'creditCard' => $creditCard,
        ]);
    }

    public function update(CreditCardUpdateRequest $request, CreditCard $creditCard): RedirectResponse
    {
        $creditCard->update($request->validated());

        $request->session()->flash('creditCard.id', $creditCard->id);

        return redirect()->route('creditCards.index');
    }

    public function destroy(Request $request, CreditCard $creditCard): RedirectResponse
    {
        $creditCard->delete();

        return redirect()->route('creditCards.index');
    }
}
