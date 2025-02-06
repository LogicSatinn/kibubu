<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Institution;
use App\Models\Loan;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Carbon;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\LoanController
 */
final class LoanControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function index_displays_view(): void
    {
        $loans = Loan::factory()->count(3)->create();

        $response = $this->get(route('loans.index'));

        $response->assertOk();
        $response->assertViewIs('loan.index');
        $response->assertViewHas('loans');
    }


    #[Test]
    public function create_displays_view(): void
    {
        $response = $this->get(route('loans.create'));

        $response->assertOk();
        $response->assertViewIs('loan.create');
    }


    #[Test]
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\LoanController::class,
            'store',
            \App\Http\Requests\LoanStoreRequest::class
        );
    }

    #[Test]
    public function store_saves_and_redirects(): void
    {
        $name = fake()->name();
        $type = fake()->word();
        $opened_on = Carbon::parse(fake()->date());
        $remaining_balance = fake()->randomFloat(/** decimal_attributes **/);
        $principal = fake()->randomFloat(/** decimal_attributes **/);
        $interest_rate = fake()->randomFloat(/** decimal_attributes **/);
        $user = User::factory()->create();
        $institution = Institution::factory()->create();

        $response = $this->post(route('loans.store'), [
            'name' => $name,
            'type' => $type,
            'opened_on' => $opened_on->toDateString(),
            'remaining_balance' => $remaining_balance,
            'principal' => $principal,
            'interest_rate' => $interest_rate,
            'user_id' => $user->id,
            'institution_id' => $institution->id,
        ]);

        $loans = Loan::query()
            ->where('name', $name)
            ->where('type', $type)
            ->where('opened_on', $opened_on)
            ->where('remaining_balance', $remaining_balance)
            ->where('principal', $principal)
            ->where('interest_rate', $interest_rate)
            ->where('user_id', $user->id)
            ->where('institution_id', $institution->id)
            ->get();
        $this->assertCount(1, $loans);
        $loan = $loans->first();

        $response->assertRedirect(route('loans.index'));
        $response->assertSessionHas('loan.id', $loan->id);
    }


    #[Test]
    public function show_displays_view(): void
    {
        $loan = Loan::factory()->create();

        $response = $this->get(route('loans.show', $loan));

        $response->assertOk();
        $response->assertViewIs('loan.show');
        $response->assertViewHas('loan');
    }


    #[Test]
    public function edit_displays_view(): void
    {
        $loan = Loan::factory()->create();

        $response = $this->get(route('loans.edit', $loan));

        $response->assertOk();
        $response->assertViewIs('loan.edit');
        $response->assertViewHas('loan');
    }


    #[Test]
    public function update_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\LoanController::class,
            'update',
            \App\Http\Requests\LoanUpdateRequest::class
        );
    }

    #[Test]
    public function update_redirects(): void
    {
        $loan = Loan::factory()->create();
        $name = fake()->name();
        $type = fake()->word();
        $opened_on = Carbon::parse(fake()->date());
        $remaining_balance = fake()->randomFloat(/** decimal_attributes **/);
        $principal = fake()->randomFloat(/** decimal_attributes **/);
        $interest_rate = fake()->randomFloat(/** decimal_attributes **/);
        $user = User::factory()->create();
        $institution = Institution::factory()->create();

        $response = $this->put(route('loans.update', $loan), [
            'name' => $name,
            'type' => $type,
            'opened_on' => $opened_on->toDateString(),
            'remaining_balance' => $remaining_balance,
            'principal' => $principal,
            'interest_rate' => $interest_rate,
            'user_id' => $user->id,
            'institution_id' => $institution->id,
        ]);

        $loan->refresh();

        $response->assertRedirect(route('loans.index'));
        $response->assertSessionHas('loan.id', $loan->id);

        $this->assertEquals($name, $loan->name);
        $this->assertEquals($type, $loan->type);
        $this->assertEquals($opened_on, $loan->opened_on);
        $this->assertEquals($remaining_balance, $loan->remaining_balance);
        $this->assertEquals($principal, $loan->principal);
        $this->assertEquals($interest_rate, $loan->interest_rate);
        $this->assertEquals($user->id, $loan->user_id);
        $this->assertEquals($institution->id, $loan->institution_id);
    }


    #[Test]
    public function destroy_deletes_and_redirects(): void
    {
        $loan = Loan::factory()->create();

        $response = $this->delete(route('loans.destroy', $loan));

        $response->assertRedirect(route('loans.index'));

        $this->assertSoftDeleted($loan);
    }
}
