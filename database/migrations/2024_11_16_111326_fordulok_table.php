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
        Schema::create('fordulok', function (Blueprint $table) {
            $table->id('forduloId')->primary();
            $table->string('fordulo_nev', 100);
            $table->dateTime('idopont');
            $table->foreignId('verseny_szamId')->references('verseny_szamId')->on('versenyek');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fordulok');
    }
};
