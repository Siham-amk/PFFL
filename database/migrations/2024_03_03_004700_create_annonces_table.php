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
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->string("adresse",250);
            $table->string("ville",100);
            $table->string("type",100);
            $table->integer("nbchambre");
            $table->integer("surface");
            $table->decimal("prix", 10, 2);
            $table->integer("proprietaire");
            $table->boolean("estLouer")->default(false);
            $table->boolean("estAvender")->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annonces');
    }
};
