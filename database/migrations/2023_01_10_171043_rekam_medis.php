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
        Schema::create('rekam_medis', function (Blueprint $table) {
            $table->id();
            $table->string('id_rekam_medis');
            $table->unsignedBigInteger('pasien_id');
            $table->string('keluhan');
            $table->unsignedBigInteger('dokter_id');
            $table->string('diagnosa');
            $table->unsignedBigInteger('obat_id');
            $table->unsignedBigInteger('poliklinik_id');

            $table->foreign('pasien_id')->references('id')->on('pasiens');
            $table->foreign('dokter_id')->references('id')->on('dokters');
            $table->foreign('obat_id')->references('id')->on('obats');
            $table->foreign('poliklinik_id')->references('id')->on('poli_klinisk');
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
        //
    }
};
