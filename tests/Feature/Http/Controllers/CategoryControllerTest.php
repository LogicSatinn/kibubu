<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryGroup;
use App\Models\Group;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\CategoryController
 */
final class CategoryControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function index_displays_view(): void
    {
        $categories = Category::factory()->count(3)->create();

        $response = $this->get(route('categories.index'));

        $response->assertOk();
        $response->assertViewIs('category.index');
        $response->assertViewHas('categories');
    }


    #[Test]
    public function create_displays_view(): void
    {
        $response = $this->get(route('categories.create'));

        $response->assertOk();
        $response->assertViewIs('category.create');
    }


    #[Test]
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CategoryController::class,
            'store',
            \App\Http\Requests\CategoryStoreRequest::class
        );
    }

    #[Test]
    public function store_saves_and_redirects(): void
    {
        $name = fake()->name();
        $color = fake()->word();
        $user = User::factory()->create();
        $group = Group::factory()->create();
        $category_group = CategoryGroup::factory()->create();

        $response = $this->post(route('categories.store'), [
            'name' => $name,
            'color' => $color,
            'user_id' => $user->id,
            'group_id' => $group->id,
            'category_group_id' => $category_group->id,
        ]);

        $categories = Category::query()
            ->where('name', $name)
            ->where('color', $color)
            ->where('user_id', $user->id)
            ->where('group_id', $group->id)
            ->where('category_group_id', $category_group->id)
            ->get();
        $this->assertCount(1, $categories);
        $category = $categories->first();

        $response->assertRedirect(route('categories.index'));
        $response->assertSessionHas('category.id', $category->id);
    }


    #[Test]
    public function show_displays_view(): void
    {
        $category = Category::factory()->create();

        $response = $this->get(route('categories.show', $category));

        $response->assertOk();
        $response->assertViewIs('category.show');
        $response->assertViewHas('category');
    }


    #[Test]
    public function edit_displays_view(): void
    {
        $category = Category::factory()->create();

        $response = $this->get(route('categories.edit', $category));

        $response->assertOk();
        $response->assertViewIs('category.edit');
        $response->assertViewHas('category');
    }


    #[Test]
    public function update_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CategoryController::class,
            'update',
            \App\Http\Requests\CategoryUpdateRequest::class
        );
    }

    #[Test]
    public function update_redirects(): void
    {
        $category = Category::factory()->create();
        $name = fake()->name();
        $color = fake()->word();
        $user = User::factory()->create();
        $group = Group::factory()->create();
        $category_group = CategoryGroup::factory()->create();

        $response = $this->put(route('categories.update', $category), [
            'name' => $name,
            'color' => $color,
            'user_id' => $user->id,
            'group_id' => $group->id,
            'category_group_id' => $category_group->id,
        ]);

        $category->refresh();

        $response->assertRedirect(route('categories.index'));
        $response->assertSessionHas('category.id', $category->id);

        $this->assertEquals($name, $category->name);
        $this->assertEquals($color, $category->color);
        $this->assertEquals($user->id, $category->user_id);
        $this->assertEquals($group->id, $category->group_id);
        $this->assertEquals($category_group->id, $category->category_group_id);
    }


    #[Test]
    public function destroy_deletes_and_redirects(): void
    {
        $category = Category::factory()->create();

        $response = $this->delete(route('categories.destroy', $category));

        $response->assertRedirect(route('categories.index'));

        $this->assertSoftDeleted($category);
    }
}
