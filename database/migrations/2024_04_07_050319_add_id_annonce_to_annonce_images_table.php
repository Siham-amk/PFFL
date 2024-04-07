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
        Schema::table('annonce_images', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('idAnnonce');
            $table->foreign('idAnnonce')->references('id')->on('annonce');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('annonce_images', function (Blueprint $table) {
            //
            $table->dropColumn('idAnnonce');

        });
    }
};
