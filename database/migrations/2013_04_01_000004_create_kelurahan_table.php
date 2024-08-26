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
        Schema::create('kelurahan', function (Blueprint $table) {
            $table->char('id', 11)->primary();
            $table->char('kode', 11)->nullable();
            $table->string('nama')->nullable();
            $table->char('id_kecamatan', 11)->nullable()->index();

            $table->foreign('id_kecamatan')->references('id')->on('kecamatan')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelurahan');
    }
};
