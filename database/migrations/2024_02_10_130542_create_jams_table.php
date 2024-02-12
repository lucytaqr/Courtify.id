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
<<<<<<<< HEAD:database/migrations/2024_02_08_070413_create_cabors_table.php
        Schema::create('cabors', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->timestamps();
========
        Schema::create('jams', function (Blueprint $table) {
            $table->id();
            $table->string('lapangan_id');
            $table->string('jam');
            $table->boolean('status');
>>>>>>>> fatma:database/migrations/2024_02_10_130542_create_jams_table.php
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<<< HEAD:database/migrations/2024_02_08_070413_create_cabors_table.php
        Schema::dropIfExists('cabors');
========
        Schema::dropIfExists('jams');
>>>>>>>> fatma:database/migrations/2024_02_10_130542_create_jams_table.php
    }
};
