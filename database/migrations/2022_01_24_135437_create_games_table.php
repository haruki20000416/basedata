<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
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
            $table->string('batter',50);
            $table->integer('inning');
            $table->integer('outcount');
            $table->integer('count');
            $table->string('ballspecies',50);
            $table->integer('speed');
            $table->string('result',50);
            $table->integer('course');
            $table->integer('picher_id')->unsigned();
            $table->integer('information_id')->unsigned();
        
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
