<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('accounts', function (Blueprint $table): void {
            $table->id();
            $table->ulid();

            $table->string('name', 100);
            $table->boolean('auto_generated')->default(false);
            $table->string('color', 50)->nullable();
            $table->string('account_number', 50)->nullable();
            $table->decimal('interest_rate', 5, 2)->nullable();
            $table->mediumText('description')->nullable();

            // Loans only
            $table->date('opened_on')->nullable();
            $table->date('expected_closure_date')->nullable();
            $table->decimal('principal', 12, 2)->nullable();

            // Credit Cards only
            $table->string('brand', 50)->nullable();
            $table->decimal('credit_limit', 12, 2)->nullable();

            $table->decimal('balance', 12, 2)->default(0);

            $table->foreignId('account_category_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('institution_id')->nullable()->constrained();

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
