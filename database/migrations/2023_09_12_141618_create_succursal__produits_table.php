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
        Schema::create('succursal_produits', function (Blueprint $table) {
            $table->id();
            
            $table->integer('quantite_stock');
            $table->integer('prix_unitaire');
            $table->integer('prix_en_gros');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('succursal__produits');
    }
};
