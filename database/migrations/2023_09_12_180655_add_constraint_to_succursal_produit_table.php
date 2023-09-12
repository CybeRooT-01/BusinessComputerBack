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
        Schema::table('succursal_produits', function (Blueprint $table) {
            $table->unsignedBigInteger('succursal_id');
            $table->unsignedBigInteger('produit_id');
            $table->foreign('succursal_id')->references('id')->on('succursales')->onDelete('cascade');
            $table->foreign('produit_id')->references('id')->on('produits')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('succursal_produit', function (Blueprint $table) {
            //
        });
    }
};
