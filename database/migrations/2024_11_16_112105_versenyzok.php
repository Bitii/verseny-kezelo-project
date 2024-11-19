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
        Schema::create('versenyzok', function (Blueprint $table) {
            $table->id('versenyzoId')->primary();
            $table->string('nev', 100);
            $table->foreignId('felhasznaloId')->references('felhasznaloId')->on('felhasznalok');
            $table->foreignId('forduloId')->references('forduloId')->on('fordulok');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('versenyzok');
    }
};
