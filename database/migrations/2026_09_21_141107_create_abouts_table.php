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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();

            // Deskripsi utama About
            $table->text('description')->nullable();

            // Informasi profesional
            $table->string('location')->nullable();
            $table->string('focus')->nullable();
            $table->string('framework')->nullable();
            $table->string('database')->nullable();

            // Nilai / keunggulan
            $table->text('values')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};