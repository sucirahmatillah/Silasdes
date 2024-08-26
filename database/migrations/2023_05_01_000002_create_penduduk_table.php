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
        Schema::create('penduduk', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('no_kk', 16)->nullable();
            $table->string('nik', 16)->nullable()->unique();
            $table->string('nama')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->char('id_jenis_kelamin', 11)->nullable()->index();
            $table->char('id_golongan_darah', 11)->nullable()->index();
            $table->text('alamat')->nullable();
            $table->string('rt', 3)->nullable();
            $table->string('rw', 3)->nullable();
            $table->string('kode_pos', 5)->nullable();
            $table->char('id_kelurahan', 11)->nullable()->index();
            $table->char('id_kecamatan', 11)->nullable()->index();
            $table->char('id_kab_kota', 11)->nullable()->index();
            $table->char('id_provinsi', 11)->nullable()->index();
            $table->char('id_agama', 11)->nullable()->index();
            $table->char('id_status_perkawinan', 11)->nullable()->index();
            $table->char('id_pendidikan', 11)->nullable()->index();
            $table->char('id_pekerjaan', 11)->nullable()->index();
            $table->char('id_kewarganegaraan', 11)->nullable()->index();
            $table->char('id_shdk', 11)->nullable()->index();
            $table->string('nik_ibu', 16)->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('nik_ayah', 16)->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('telepon')->nullable();
            $table->string('file_kk')->nullable();
            $table->string('file_ktp')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('email_verification_token')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('id_jenis_kelamin')->references('id')->on('jenis_kelamin')->onDelete('set null')->onUpdate('set null');
            $table->foreign('id_golongan_darah')->references('id')->on('golongan_darah')->onDelete('set null')->onUpdate('set null');
            $table->foreign('id_kelurahan')->references('id')->on('kelurahan')->onDelete('set null')->onUpdate('set null');
            $table->foreign('id_kecamatan')->references('id')->on('kecamatan')->onDelete('set null')->onUpdate('set null');
            $table->foreign('id_kab_kota')->references('id')->on('kab_kota')->onDelete('set null')->onUpdate('set null');
            $table->foreign('id_provinsi')->references('id')->on('provinsi')->onDelete('set null')->onUpdate('set null');
            $table->foreign('id_agama')->references('id')->on('agama')->onDelete('set null')->onUpdate('set null');
            $table->foreign('id_status_perkawinan')->references('id')->on('status_perkawinan')->onDelete('set null')->onUpdate('set null');
            $table->foreign('id_pendidikan')->references('id')->on('pendidikan')->onDelete('set null')->onUpdate('set null');
            $table->foreign('id_pekerjaan')->references('id')->on('pekerjaan')->onDelete('set null')->onUpdate('set null');
            $table->foreign('id_kewarganegaraan')->references('id')->on('kewarganegaraan')->onDelete('set null')->onUpdate('set null');
            $table->foreign('id_shdk')->references('id')->on('shdk')->onDelete('set null')->onUpdate('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penduduk');
    }
};
