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
        Schema::create('posty', function (Blueprint $table) {
            $table->id();
            $table->string('tytuł', 100);
            $table->text('treść');
            $table->string('obraz', 100)->default('/images/posts/default.png');
            $table->foreignId('kategoria_id')->constrained('kategorie')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posty');
    }
};
