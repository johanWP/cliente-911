<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaGames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('fecha')->index();
            $table->integer('numero_fantasia');
            $table->integer('local_id')->unsigned();
            $table->foreign('local_id')->references('id')->on('teams');
            $table->integer('visitante_id')->unsigned();
            $table->foreign('visitante_id')->references('id')->on('teams');
            $table->integer('goles_local')->nullable();
            $table->integer('goles_visitante')->nullable();
            $table->integer('arbitro_id')->unsigned()->nullable();
            $table->foreign('arbitro_id')->references('id')->on('users');
            $table->integer('league_id')->unsigned();
            $table->foreign('league_id')->references('id')->on('leagues');
            $table->string('adjunto')->nullable();
            $table->text('observaciones')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
}
