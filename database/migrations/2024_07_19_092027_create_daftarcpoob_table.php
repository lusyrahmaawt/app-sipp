<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('daftar_cppobs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user'); // Kolom foreign key
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

            // Menambahkan foreign key constraint
            $table->foreign('id_user')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        // Menghapus foreign key constraint sebelum drop table
        Schema::table('daftar_cppobs', function (Blueprint $table) {
            $table->dropForeign(['id_user']);
        });

        Schema::dropIfExists('daftar_cppobs');
    }
};
