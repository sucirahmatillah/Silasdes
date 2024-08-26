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
        Schema::create('surat_keterangan_kematian', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_surat')->nullable()->index();
            $table->uuid('id_penduduk')->index()->nullable();
            $table->string('bin_binti')->nullable();
            $table->date('tanggal_meninggal')->nullable();
            $table->string('jam_meninggal')->nullable();
            $table->string('tempat_meninggal')->nullable();
            $table->string('sebab_kematian')->nullable();
            $table->string('file_surat_pengantar')->nullable();
            $table->timestamps();

            $table->foreign('id_penduduk')->references('id')->on('penduduk')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('surat_keterangan_kematian');
    }
};
