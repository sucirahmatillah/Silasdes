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
        Schema::create('kantor_desa', function (Blueprint $table) {
            $table->char('id', 11)->primary();
            $table->string('kode')->nullable();
            $table->text('alamat')->nullable();
            $table->string('rt', 3)->nullable();
            $table->string('rw', 3)->nullable();
            $table->string('kode_pos', 5)->nullable();
            $table->char('id_kelurahan', 11)->nullable()->index();
            $table->char('id_kecamatan', 11)->nullable()->index();
            $table->char('id_kab_kota', 11)->nullable()->index();
            $table->char('id_provinsi', 11)->nullable()->index();
            $table->string('telepon')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('logo')->nullable();
            $table->string('nama_kepala_desa')->nullable();
            $table->string('nip_kepala_desa')->nullable();
            $table->string('ttd_kepala_desa')->nullable();

            $table->foreign('id_kelurahan')->references('id')->on('kelurahan')->onDelete('set null')->onUpdate('set null');
            $table->foreign('id_kecamatan')->references('id')->on('kecamatan')->onDelete('set null')->onUpdate('set null');
            $table->foreign('id_kab_kota')->references('id')->on('kab_kota')->onDelete('set null')->onUpdate('set null');
            $table->foreign('id_provinsi')->references('id')->on('provinsi')->onDelete('set null')->onUpdate('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kantor_desa');
    }
};
