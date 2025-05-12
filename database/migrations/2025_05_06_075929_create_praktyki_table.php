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
        Schema::create('praktyki', function (Blueprint $table) {
            $table->id();
            $table->string('nazwa', 50);
            $table->text('opis')->nullable();
            $table->text('obowiązki');
            $table->text('narzędzia');
            $table->string('obraz', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('praktyki');
    }
};
