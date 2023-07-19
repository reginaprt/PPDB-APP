<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->string('id_pendaftaran');
            $table->string('nama');
            $table->string('tempat_Lahir');
            $table->date('tanggal_Lahir');
            $table->string('jenis_Kelamin');
            $table->string('alamat');
            $table->string('kode_Pos');
            $table->string('agama');
            $table->string('tinggi_Badan');
            $table->string('berat_Badan');
            $table->string('kewarganegaraan');
            $table->string('berkebutuhan_Khusus');
            $table->string('anak_Keberapa');

            $table->string('nama_Ayah');
            $table->string('nik_Ayah');
            $table->string('tahunLahir_Ayah');
            $table->string('pendidikan_Ayah');
            $table->string('pekerjaan_Ayah');
            $table->string('penghasilan_Ayah');

            $table->string('nama_Ibu');
            $table->string('nik_Ibu');
            $table->string('tahunLahir_Ibu');
            $table->string('pendidikan_Ibu');
            $table->string('pekerjaan_Ibu');
            $table->string('penghasilan_Ibu');
            $table->string('status')->default('Diproses');
            $table->foreignId('users_id')->constrained();
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
        Schema::dropIfExists('laporans');
    }
}
