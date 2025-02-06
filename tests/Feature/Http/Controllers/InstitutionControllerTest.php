<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Institution;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\InstitutionController
 */
final class InstitutionControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function index_displays_view(): void
    {
        $institutions = Institution::factory()->count(3)->create();

        $response = $this->get(route('institutions.index'));

        $response->assertOk();
        $response->assertViewIs('institutions.index');
        $response->assertViewHas('institutions');
    }


    #[Test]
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\InstitutionController::class,
            'store',
            \App\Http\Requests\InstitutionStoreRequest::class
        );
    }

    #[Test]
    public function store_saves_and_redirects(): void
    {
        $name = fake()->name();
        $logo = fake()->word();

        $response = $this->post(route('institutions.store'), [
            'name' => $name,
            'logo' => $logo,
        ]);

        $institutions = Institution::query()
            ->where('name', $name)
            ->where('logo', $logo)
            ->get();
        $this->assertCount(1, $institutions);
        $institution = $institutions->first();

        $response->assertRedirect(route('institution.index'));
    }
}
