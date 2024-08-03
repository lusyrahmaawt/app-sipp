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
        Schema::create('daftar_sipps', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ukm');
            $table->string('nama_lengkap');
            $table->string('alamat_lengkap');
            $table->string('alamat_produksi');
            $table->string('email_aktif');
            $table->string('no_hp');
            $table->string('nomer_nik');
            $table->string('nomer_npwp');
            $table->integer('jenisusaha');
            $table->string('jenisproduk');
            $table->string('namaproduk');
            $table->string('no_nib');
            $table->string('sibakul');
            $table->string('kemasan');
            $table->date('tanggal_daftar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_sipps');
    }
};
