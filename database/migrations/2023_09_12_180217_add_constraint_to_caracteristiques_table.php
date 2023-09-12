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
        Schema::table('caracteristiques', function (Blueprint $table) {
            $table->unsignedBigInteger('unite_id');
            $table->foreign('unite_id')->references('id')->on('unites');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('caracteristiques', function (Blueprint $table) {
            //
        });
    }
};
