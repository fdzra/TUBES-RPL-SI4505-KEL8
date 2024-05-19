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
        Schema::create('perangkat', function (Blueprint $table) {
            $table->id();
            $table->integer('id_perangkat');
            $table->string('id_pelanggan');
            $table->string('nama_pelanggan');
            $table->string('kecamatan_pelanggan');
            $table->string('status')->default('Aktif');
            $table->string('nama_perangkat');
            $table->integer('penggunaan_debit_air');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perangkat');
    }
};
