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
        Schema::create('amis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('succursale_demandeur_id');
            $table->unsignedBigInteger('succursale_accepteur_id');
            $table->foreign('succursale_demandeur_id')->references('id')->on('succursales');
            $table->foreign('succursale_accepteur_id')->references('id')->on('succursales');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('amis');
    }
};
