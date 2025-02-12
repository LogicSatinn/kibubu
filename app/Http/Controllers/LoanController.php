<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\LoanStoreRequest;
use App\Http\Requests\LoanUpdateRequest;
use App\Models\Loan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LoanController extends Controller
{
    public function index(Request $request): View
    {
        $loans = Loan::all();

        return view('loan.index', [
            'loans' => $loans,
        ]);
    }

    public function create(Request $request): View
    {
        return view('loan.create');
    }

    public function store(LoanStoreRequest $request): RedirectResponse
    {
        $loan = Loan::create($request->validated());

        $request->session()->flash('loan.id', $loan->id);

        return redirect()->route('loans.index');
    }

    public function show(Request $request, Loan $loan): View
    {
        return view('loan.show', [
            'loan' => $loan,
        ]);
    }

    public function edit(Request $request, Loan $loan): View
    {
        return view('loan.edit', [
            'loan' => $loan,
        ]);
    }

    public function update(LoanUpdateRequest $request, Loan $loan): RedirectResponse
    {
        $loan->update($request->validated());

        $request->session()->flash('loan.id', $loan->id);

        return redirect()->route('loans.index');
    }

    public function destroy(Request $request, Loan $loan): RedirectResponse
    {
        $loan->delete();

        return redirect()->route('loans.index');
    }
}
