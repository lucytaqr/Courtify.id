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
        Schema::create('lapangans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cabor_id');
            $table->string('nama');
            $table->string('slug')->unique();
            $table->string('thumbnail')->nullable();
            $table->string('gambar1')->nullable();
            $table->string('gambar2')->nullable();
            $table->string('tarif');
            $table->string('alamat');
            $table->text('deskripsi');
            $table->string('wifi')->nullable();
            $table->string('toilet')->nullable();
            $table->string('mushola')->nullable();
            $table->string('parkir')->nullable();
            $table->string('food')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lapangans');
    }
};
