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
        Schema::create('csvs', function (Blueprint $table) {
            $table->id();
            $table->string('hash');
            $table->string('csv');
            $table->string('DNI');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('correo')->unique();
            $table->string('archivo');
            $table->string('tipo_archivo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cvcs');
    }
};
