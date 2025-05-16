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
        Schema::create('wiadomości', function (Blueprint $table) {
            $table->id();
            $table->string('nazwa');
            $table->string('firma')->nullable();
            $table->string('telefon')->nullable();
            $table->string('email');
            $table->string('temat');
            $table->text('treść');
            $table->boolean('zgoda');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wiadomości');
    }
};
