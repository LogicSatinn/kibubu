<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\CategoryGroupStoreRequest;
use App\Http\Requests\CategoryGroupUpdateRequest;
use App\Models\CategoryGroup;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryGroupController extends Controller
{
    public function index(Request $request): View
    {
        $categoryGroups = CategoryGroup::all();

        return view('categoryGroup.index', [
            'categoryGroups' => $categoryGroups,
        ]);
    }

    public function create(Request $request): View
    {
        return view('categoryGroup.create');
    }

    public function store(CategoryGroupStoreRequest $request): RedirectResponse
    {
        $categoryGroup = CategoryGroup::create($request->validated());

        $request->session()->flash('categoryGroup.id', $categoryGroup->id);

        return redirect()->route('categoryGroups.index');
    }

    public function show(Request $request, CategoryGroup $categoryGroup): View
    {
        return view('categoryGroup.show', [
            'categoryGroup' => $categoryGroup,
        ]);
    }

    public function edit(Request $request, CategoryGroup $categoryGroup): View
    {
        return view('categoryGroup.edit', [
            'categoryGroup' => $categoryGroup,
        ]);
    }

    public function update(CategoryGroupUpdateRequest $request, CategoryGroup $categoryGroup): RedirectResponse
    {
        $categoryGroup->update($request->validated());

        $request->session()->flash('categoryGroup.id', $categoryGroup->id);

        return redirect()->route('categoryGroups.index');
    }

    public function destroy(Request $request, CategoryGroup $categoryGroup): RedirectResponse
    {
        $categoryGroup->delete();

        return redirect()->route('categoryGroups.index');
    }
}
