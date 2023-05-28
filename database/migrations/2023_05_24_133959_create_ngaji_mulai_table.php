<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNgajiMulaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ngaji_mulai', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->date('tanggal');
            $table->time('waktu_mulai');
            $table->text('surah_mulai');
            $table->integer('ayat_mulai');
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
        Schema::dropIfExists('ngaji_mulai');
    }
}
