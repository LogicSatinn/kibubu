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
        Schema::create('account_categories', function (Blueprint $table): void {
            $table->id();
            $table->ulid();

            $table->string(column: 'name', length: 100);
            $table->string(column: 'type', length: 50);
            $table->string(column: 'color', length: 50);

            $table->foreignId('user_id')->constrained('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('account_categories');
    }
};
