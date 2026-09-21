<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->id();

            // Hero / Home
            $table->string('name');
            $table->string('title');
            $table->text('hero_description')->nullable();

            // Profile & CV
            $table->string('profile_image')->nullable();
            $table->string('cv_file')->nullable();

            // Social Media
            $table->string('github_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('instagram_url')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};