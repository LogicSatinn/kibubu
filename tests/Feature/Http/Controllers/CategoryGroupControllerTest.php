<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\CategoryGroup;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\CategoryGroupController
 */
final class CategoryGroupControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function index_displays_view(): void
    {
        $categoryGroups = CategoryGroup::factory()->count(3)->create();

        $response = $this->get(route('category-groups.index'));

        $response->assertOk();
        $response->assertViewIs('categoryGroup.index');
        $response->assertViewHas('categoryGroups');
    }


    #[Test]
    public function create_displays_view(): void
    {
        $response = $this->get(route('category-groups.create'));

        $response->assertOk();
        $response->assertViewIs('categoryGroup.create');
    }


    #[Test]
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CategoryGroupController::class,
            'store',
            \App\Http\Requests\CategoryGroupStoreRequest::class
        );
    }

    #[Test]
    public function store_saves_and_redirects(): void
    {
        $name = fake()->name();
        $color = fake()->word();
        $user = User::factory()->create();

        $response = $this->post(route('category-groups.store'), [
            'name' => $name,
            'color' => $color,
            'user_id' => $user->id,
        ]);

        $categoryGroups = CategoryGroup::query()
            ->where('name', $name)
            ->where('color', $color)
            ->where('user_id', $user->id)
            ->get();
        $this->assertCount(1, $categoryGroups);
        $categoryGroup = $categoryGroups->first();

        $response->assertRedirect(route('categoryGroups.index'));
        $response->assertSessionHas('categoryGroup.id', $categoryGroup->id);
    }


    #[Test]
    public function show_displays_view(): void
    {
        $categoryGroup = CategoryGroup::factory()->create();

        $response = $this->get(route('category-groups.show', $categoryGroup));

        $response->assertOk();
        $response->assertViewIs('categoryGroup.show');
        $response->assertViewHas('categoryGroup');
    }


    #[Test]
    public function edit_displays_view(): void
    {
        $categoryGroup = CategoryGroup::factory()->create();

        $response = $this->get(route('category-groups.edit', $categoryGroup));

        $response->assertOk();
        $response->assertViewIs('categoryGroup.edit');
        $response->assertViewHas('categoryGroup');
    }


    #[Test]
    public function update_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CategoryGroupController::class,
            'update',
            \App\Http\Requests\CategoryGroupUpdateRequest::class
        );
    }

    #[Test]
    public function update_redirects(): void
    {
        $categoryGroup = CategoryGroup::factory()->create();
        $name = fake()->name();
        $color = fake()->word();
        $user = User::factory()->create();

        $response = $this->put(route('category-groups.update', $categoryGroup), [
            'name' => $name,
            'color' => $color,
            'user_id' => $user->id,
        ]);

        $categoryGroup->refresh();

        $response->assertRedirect(route('categoryGroups.index'));
        $response->assertSessionHas('categoryGroup.id', $categoryGroup->id);

        $this->assertEquals($name, $categoryGroup->name);
        $this->assertEquals($color, $categoryGroup->color);
        $this->assertEquals($user->id, $categoryGroup->user_id);
    }


    #[Test]
    public function destroy_deletes_and_redirects(): void
    {
        $categoryGroup = CategoryGroup::factory()->create();

        $response = $this->delete(route('category-groups.destroy', $categoryGroup));

        $response->assertRedirect(route('categoryGroups.index'));

        $this->assertSoftDeleted($categoryGroup);
    }
}
