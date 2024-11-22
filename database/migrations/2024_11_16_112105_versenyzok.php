<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\User;
use App\Models\Fordulo;

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
            $table->foreignIdFor(User::class, 'felhasznaloId');
            $table->foreignIdFor(Fordulo::class, 'forduloId');
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
