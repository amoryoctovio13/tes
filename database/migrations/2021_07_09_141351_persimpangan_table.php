<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PersimpanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persimpangan', function (Blueprint $table) {
            $table->id();
            $table->string('namapersimpangan');
            $table->string('kota');
            $table->string('utara');
            $table->string('timur');
            $table->string('barat');
            $table->string('selatan');
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
        Schema::dropIfExists('persimpangan');
    }
}
