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
        
        Schema::create('annonce_likes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_utilisateur')->constrained()->cascadeOnDelete();
            $table->foreignId('id_annonce')->constrained()->cascadeOnDelete();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annonce_likes');
    }
};
