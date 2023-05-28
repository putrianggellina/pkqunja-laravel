<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNgajiSelesaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ngaji_selesai', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->time('waktu_selesai');
            $table->text('surah_selesai');
            $table->integer('ayat_selesai');
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
        Schema::dropIfExists('ngaji_selesai');
    }
}
