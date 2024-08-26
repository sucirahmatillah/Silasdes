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
        Schema::create('surat_pengantar_pembuatan_ktp', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_surat')->nullable()->index();
            $table->string('file_pendukung')->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('surat_pengantar_pembuatan_ktp');
    }
};
