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
        Schema::table('produit_commandes', function (Blueprint $table) {
            $table->unsignedBigInteger('succursal_produit_id');
            $table->foreign('succursal_produit_id')->references('id')->on('succursal_produits');
            $table->unsignedBigInteger('commande_id');
            $table->foreign('commande_id')->references('id')->on('commandes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('produit_c_ommands', function (Blueprint $table) {
            //
        });
    }
};
