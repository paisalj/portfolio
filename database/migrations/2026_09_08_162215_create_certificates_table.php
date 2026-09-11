<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
public function up(): void
{
    Schema::create('certificates', function (Blueprint $table) {
        $table->id();

        $table->string('name');
        $table->string('issuer')->nullable();
        $table->string('certificate_number')->nullable();

        $table->date('issue_date')->nullable();

        $table->string('credential_url')->nullable();
        $table->string('image')->nullable();

        $table->text('description')->nullable();

        $table->timestamps();
    });
}
    public function down(): void
    {
        Schema::dropIfExists('certificates');
    }
};
