<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaduanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->id('id_pelanggan')->nullable(); // Auto-increment primary key
            $table->string('kategori')->nullable(); // Kolom untuk kategori pengaduan
            $table->text('deskripsi')->nullable(); // Kolom untuk deskripsi pengaduan
            $table->string('nama_pelanggan')->nullable();
            $table->string('no_handphone')->nullable();
            $table->timestamp('waktu_pengaduan')->useCurrent()->nullable(); // Kolom untuk waktu pengaduan (menggunakan waktu saat ini)
            $table->timestamp('terakhir_diupdate')->nullable(); // Kolom untuk waktu terakhir update (nullable, bisa diisi kemudian)
            $table->string('bukti_pengaduan')->nullable(); // Kolom untuk nama file bukti pengaduan (nullable, bisa diisi kemudian)
            $table->string('status_pengaduan')->default('Belum Diproses'); // Kolom untuk status pengaduan, defaultnya Belum Diproses
            $table->timestamps(); // Kolom untuk created_at dan updated_at
            // Indeks untuk kolom kategori, status_pengaduan, dan waktu_pengaduan
            $table->index(['kategori', 'status_pengaduan', 'waktu_pengaduan'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengaduan');
    }
}
