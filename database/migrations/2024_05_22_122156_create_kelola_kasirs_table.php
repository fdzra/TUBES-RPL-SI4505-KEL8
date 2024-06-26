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
        Schema::create('kelola_kasirs', function (Blueprint $table) {
            $table->id('kasir_id');
            $table->string('kasir_name')->nullable();
            $table->bigInteger('kasir_phone')->nullable();
            $table->string('kasir_email')->nullable();
            $table->string('kasir_username')->nullable();
            $table->string('kasir_password')->nullable();
            $table->string('kasir_alamat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelola_kasirs');
    }
};
