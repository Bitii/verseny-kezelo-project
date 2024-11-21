<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Verseny;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fordulok', function (Blueprint $table) {
            $table->id('forduloId')->primary();
            $table->foreignIdFor(Verseny::class, 'verseny_szamId');
            $table->string('fordulo_nev', 100);
            $table->dateTime('idopont');
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
