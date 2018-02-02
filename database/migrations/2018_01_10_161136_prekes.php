<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Prekes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prekes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pavadinimas');
            $table->string('prekesKodas')->unique();
            $table->string('prekesTipas');
            $table->longText('aprasymas');
            $table->integer('kiekis');
            $table->integer('kaina');
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
        Schema::dropIfExists('prekes');
    }
}
