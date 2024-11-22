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
        Schema::create('versenyek', function (Blueprint $table) {
            $table->id('verseny_szamId')->primary();
            $table->string('verseny_nev', 100);
            $table->year('verseny_ev');
            $table->integer('pontok_jo');
            $table->integer('pontok_rossz');
            $table->integer('pontok_ures');
            $table->string('elerheto_nyelv', 5);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('versenyek');
    }
};
