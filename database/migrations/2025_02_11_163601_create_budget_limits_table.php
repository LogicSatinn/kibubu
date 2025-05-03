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

        Schema::create('budget_limits', function (Blueprint $table): void {
            $table->id();
            $table->ulid();

            $table->decimal('amount', 11, 2);
            $table->string('currency', 3);
            $table->date('start_date');
            $table->date('end_date');

            $table->foreignId('budget_id')->constrained();
            $table->foreignId('user_id')->constrained();

            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('budget_limits');
    }
};
