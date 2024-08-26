<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_keterangan_kelahiran', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_surat')->nullable()->index();
            $table->string('nama')->nullable();
            $table->char('id_jenis_kelamin', 11)->nullable()->index();
            $table->char('id_agama', 11)->nullable()->index();
            $table->char('anak_ke', 32)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('jam_lahir')->nullable();
            $table->string('berat_badan')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->text('alamat')->nullable();
            $table->string('rt', 3)->nullable();
            $table->string('rw', 3)->nullable();
            $table->string('kode_pos', 5)->nullable();
            $table->char('id_kelurahan', 11)->nullable()->index();
            $table->char('id_kecamatan', 11)->nullable()->index();
            $table->char('id_kab_kota', 11)->nullable()->index();
            $table->char('id_provinsi', 11)->nullable()->index();
            $table->string('file_surat_pengantar')->nullable();
            $table->timestamps();

            $table->foreign('id_jenis_kelamin')->references('id')->on('jenis_kelamin')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_agama')->references('id')->on('agama')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_kelurahan')->references('id')->on('kelurahan')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_kecamatan')->references('id')->on('kecamatan')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_kab_kota')->references('id')->on('kab_kota')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_provinsi')->references('id')->on('provinsi')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_surat')->references('id')->on('surat')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_keterangan_kelahiran');
    }
};
