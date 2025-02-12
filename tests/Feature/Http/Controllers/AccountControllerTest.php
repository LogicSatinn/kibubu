<?php

declare(strict_types=1);

namespace Tests\Feature\Http\Controllers;

use App\Models\Account;
use App\Models\Institution;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\AccountController
 */
final class AccountControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function index_displays_view(): void
    {
        $accounts = Account::factory()->count(3)->create();

        $response = $this->get(route('accounts.index'));

        $response->assertOk();
        $response->assertViewIs('account.index');
        $response->assertViewHas('accounts');
    }

    #[Test]
    public function create_displays_view(): void
    {
        $response = $this->get(route('accounts.create'));

        $response->assertOk();
        $response->assertViewIs('account.create');
    }

    #[Test]
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\AccountController::class,
            'store',
            \App\Http\Requests\AccountStoreRequest::class
        );
    }

    #[Test]
    public function store_saves_and_redirects(): void
    {
        $name = fake()->name();
        $type = fake()->word();
        $account_number = fake()->word();
        $balance = fake()->randomFloat(/** decimal_attributes **/);
        $user = User::factory()->create();
        $institution = Institution::factory()->create();

        $response = $this->post(route('accounts.store'), [
            'name' => $name,
            'type' => $type,
            'account_number' => $account_number,
            'balance' => $balance,
            'user_id' => $user->id,
            'institution_id' => $institution->id,
        ]);

        $accounts = Account::query()
            ->where('name', $name)
            ->where('type', $type)
            ->where('account_number', $account_number)
            ->where('balance', $balance)
            ->where('user_id', $user->id)
            ->where('institution_id', $institution->id)
            ->get();
        $this->assertCount(1, $accounts);
        $account = $accounts->first();

        $response->assertRedirect(route('accounts.index'));
        $response->assertSessionHas('account.id', $account->id);
    }

    #[Test]
    public function show_displays_view(): void
    {
        $account = Account::factory()->create();

        $response = $this->get(route('accounts.show', $account));

        $response->assertOk();
        $response->assertViewIs('account.show');
        $response->assertViewHas('account');
    }

    #[Test]
    public function edit_displays_view(): void
    {
        $account = Account::factory()->create();

        $response = $this->get(route('accounts.edit', $account));

        $response->assertOk();
        $response->assertViewIs('account.edit');
        $response->assertViewHas('account');
    }

    #[Test]
    public function update_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\AccountController::class,
            'update',
            \App\Http\Requests\AccountUpdateRequest::class
        );
    }

    #[Test]
    public function update_redirects(): void
    {
        $account = Account::factory()->create();
        $name = fake()->name();
        $type = fake()->word();
        $account_number = fake()->word();
        $balance = fake()->randomFloat(/** decimal_attributes **/);
        $user = User::factory()->create();
        $institution = Institution::factory()->create();

        $response = $this->put(route('accounts.update', $account), [
            'name' => $name,
            'type' => $type,
            'account_number' => $account_number,
            'balance' => $balance,
            'user_id' => $user->id,
            'institution_id' => $institution->id,
        ]);

        $account->refresh();

        $response->assertRedirect(route('accounts.index'));
        $response->assertSessionHas('account.id', $account->id);

        $this->assertEquals($name, $account->name);
        $this->assertEquals($type, $account->type);
        $this->assertEquals($account_number, $account->account_number);
        $this->assertEquals($balance, $account->balance);
        $this->assertEquals($user->id, $account->user_id);
        $this->assertEquals($institution->id, $account->institution_id);
    }

    #[Test]
    public function destroy_deletes_and_redirects(): void
    {
        $account = Account::factory()->create();

        $response = $this->delete(route('accounts.destroy', $account));

        $response->assertRedirect(route('accounts.index'));

        $this->assertSoftDeleted($account);
    }
}
