<?php

declare(strict_types=1);

namespace Tests\Feature\Http\Controllers;

use App\Models\CreditCard;
use App\Models\Institution;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\CreditCardController
 */
final class CreditCardControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function index_displays_view(): void
    {
        $creditCards = CreditCard::factory()->count(3)->create();

        $response = $this->get(route('credit-cards.index'));

        $response->assertOk();
        $response->assertViewIs('creditCard.index');
        $response->assertViewHas('creditCards');
    }

    #[Test]
    public function create_displays_view(): void
    {
        $response = $this->get(route('credit-cards.create'));

        $response->assertOk();
        $response->assertViewIs('creditCard.create');
    }

    #[Test]
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CreditCardController::class,
            'store',
            \App\Http\Requests\CreditCardStoreRequest::class
        );
    }

    #[Test]
    public function store_saves_and_redirects(): void
    {
        $name = fake()->name();
        $brand = fake()->word();
        $interest_rate = fake()->randomFloat(/** decimal_attributes **/);
        $credit_limit = fake()->randomFloat(/** decimal_attributes **/);
        $balance = fake()->randomFloat(/** decimal_attributes **/);
        $user = User::factory()->create();
        $institution = Institution::factory()->create();

        $response = $this->post(route('credit-cards.store'), [
            'name' => $name,
            'brand' => $brand,
            'interest_rate' => $interest_rate,
            'credit_limit' => $credit_limit,
            'balance' => $balance,
            'user_id' => $user->id,
            'institution_id' => $institution->id,
        ]);

        $creditCards = CreditCard::query()
            ->where('name', $name)
            ->where('brand', $brand)
            ->where('interest_rate', $interest_rate)
            ->where('credit_limit', $credit_limit)
            ->where('balance', $balance)
            ->where('user_id', $user->id)
            ->where('institution_id', $institution->id)
            ->get();
        $this->assertCount(1, $creditCards);
        $creditCard = $creditCards->first();

        $response->assertRedirect(route('creditCards.index'));
        $response->assertSessionHas('creditCard.id', $creditCard->id);
    }

    #[Test]
    public function show_displays_view(): void
    {
        $creditCard = CreditCard::factory()->create();

        $response = $this->get(route('credit-cards.show', $creditCard));

        $response->assertOk();
        $response->assertViewIs('creditCard.show');
        $response->assertViewHas('creditCard');
    }

    #[Test]
    public function edit_displays_view(): void
    {
        $creditCard = CreditCard::factory()->create();

        $response = $this->get(route('credit-cards.edit', $creditCard));

        $response->assertOk();
        $response->assertViewIs('creditCard.edit');
        $response->assertViewHas('creditCard');
    }

    #[Test]
    public function update_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CreditCardController::class,
            'update',
            \App\Http\Requests\CreditCardUpdateRequest::class
        );
    }

    #[Test]
    public function update_redirects(): void
    {
        $creditCard = CreditCard::factory()->create();
        $name = fake()->name();
        $brand = fake()->word();
        $interest_rate = fake()->randomFloat(/** decimal_attributes **/);
        $credit_limit = fake()->randomFloat(/** decimal_attributes **/);
        $balance = fake()->randomFloat(/** decimal_attributes **/);
        $user = User::factory()->create();
        $institution = Institution::factory()->create();

        $response = $this->put(route('credit-cards.update', $creditCard), [
            'name' => $name,
            'brand' => $brand,
            'interest_rate' => $interest_rate,
            'credit_limit' => $credit_limit,
            'balance' => $balance,
            'user_id' => $user->id,
            'institution_id' => $institution->id,
        ]);

        $creditCard->refresh();

        $response->assertRedirect(route('creditCards.index'));
        $response->assertSessionHas('creditCard.id', $creditCard->id);

        $this->assertEquals($name, $creditCard->name);
        $this->assertEquals($brand, $creditCard->brand);
        $this->assertEquals($interest_rate, $creditCard->interest_rate);
        $this->assertEquals($credit_limit, $creditCard->credit_limit);
        $this->assertEquals($balance, $creditCard->balance);
        $this->assertEquals($user->id, $creditCard->user_id);
        $this->assertEquals($institution->id, $creditCard->institution_id);
    }

    #[Test]
    public function destroy_deletes_and_redirects(): void
    {
        $creditCard = CreditCard::factory()->create();

        $response = $this->delete(route('credit-cards.destroy', $creditCard));

        $response->assertRedirect(route('creditCards.index'));

        $this->assertSoftDeleted($creditCard);
    }
}
