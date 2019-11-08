<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('nim');
            $table->text('nama');
            $table->text('prodi');
            $table->integer('angkatan');
            $table->timestamps();
        });

        Schema::create('ukm', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('nama_ukm');
            $table->text('foto_ukm');
            $table->integer('jumlah_anggota');
            $table->text('deskripsi');
            $table->timestamps();
        });
        Schema::create('buku_perpustakaan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('judul_buku');
            $table->text('pengarang');
            $table->text('penerbit');
            $table->text('kategori');
            $table->text('foto_sampul_buku');
            $table->timestamps();
        });
        Schema::create('makanan_kantin', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('nama_makanan');
            $table->text('kategori_makanan');
            $table->text('deskripsi');
            $table->text('foto_makanan');
            $table->timestamps();
        });

        Schema::create('fasilitas_umn', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('nama_fasilitas');
            $table->text('fakultas');
            $table->text('deskripsi_fasilitas');
            $table->text('foto_fasilitas');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa');
        Schema::dropIfExists('ukm');
        Schema::dropIfExists('buku_perpustakaan');
        Schema::dropIfExists('makanan_kantin');
        Schema::dropIfExists('fasilitas_umn');
    }
}
