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
            $table->string('nama');
            // $table->string('jenis');
            // $table->string('cabor');
            $table->string('tarif');
            $table->string('kota');
            $table->string('provinsi');
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
