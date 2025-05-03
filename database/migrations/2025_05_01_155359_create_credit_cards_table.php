<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('credit_cards', function (Blueprint $table) {
            $table->id();
            $table->ulid();

            $table->string('brand', 50);
            $table->string('name', 50);
            $table->decimal('interest_rate', 4, 2);
            $table->string('credit_limit', 50);
            $table->string('balance', 50);

            $table->foreignId('user_id')
                ->constrained('users');
            $table->foreignId('institution_id')
                ->nullable()
                ->constrained('institutions');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('credit_cards');
    }
};
