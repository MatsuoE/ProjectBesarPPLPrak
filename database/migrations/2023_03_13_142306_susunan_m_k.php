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
        Schema::create('susunanMK', function (Blueprint $table) {
            $table->string('kodeMK')->primary();
            $table->string('namaMK');
            $table->string('bk')->nullable();
            $table->integer('sks');
            $table->integer('smt');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('susunanMK');
    }
};
