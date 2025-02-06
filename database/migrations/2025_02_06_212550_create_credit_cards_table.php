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
        Schema::disableForeignKeyConstraints();

        Schema::create('credit_cards', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('brand', 50);
            $table->decimal('interest_rate', 5, 2);
            $table->decimal('credit_limit', 12, 2);
            $table->decimal('balance', 12, 2);
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
        Schema::dropIfExists('credit_cards');
    }
};
