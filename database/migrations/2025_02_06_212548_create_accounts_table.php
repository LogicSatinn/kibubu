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

            $table->string('name', 100);
            $table->string('type', 100);
            $table->string('account_number', 50);
            $table->decimal('balance', 12, 2);
            $table->decimal('interest_rate', 5, 2)->nullable();
            $table->mediumText('description')->nullable();

            $table->foreignId('user_id')->constrained();
            $table->foreignId('institution_id')->constrained();

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
