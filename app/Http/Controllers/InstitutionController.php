<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\InstitutionStoreRequest;
use App\Models\Institution;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class InstitutionController extends Controller
{
    public function index(Request $request): View
    {
        $institutions = Institution::all();

        return view('institutions.index', [
            'institutions' => $institutions,
        ]);
    }

    public function store(InstitutionStoreRequest $request): RedirectResponse
    {
        $institution = Institution::create($request->validated());

        return redirect()->route('institution.index');
    }
}
