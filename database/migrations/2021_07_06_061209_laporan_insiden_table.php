<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LaporanInsidenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_insiden', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nomor_telpon');
            $table->string('lokasi_insiden');
            $table->string('jenis_kendaraan');
            $table->string('keterangan');
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
        Schema::dropIfExists('laporan_insiden');
    }
}
