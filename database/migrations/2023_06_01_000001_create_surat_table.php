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
        Schema::create('surat', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('id_jenis_surat')->nullable()->index();
            $table->string('no_surat')->nullable()->unique();
            $table->uuid('id_penduduk')->nullable()->index();
            $table->string('keperluan')->nullable();
            $table->date('tanggal_surat')->nullable();
            $table->char('id_status_surat', 11)->nullable()->index();
            $table->text('keterangan')->nullable();
            $table->timestamps();

            $table->foreign('id_jenis_surat')->references('id')->on('jenis_surat')->onDelete('set null')->onUpdate('set null');
            $table->foreign('id_penduduk')->references('id')->on('penduduk')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_status_surat')->references('id')->on('status_surat')->onDelete('set null')->onUpdate('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat');
    }
};
