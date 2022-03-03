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
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id', true);
            $table->integer('duree_en_jour');
            $table->bigInteger('prix');
            $table->integer('user_id')->unsigned();
            $table->integer('vehicule_id')->unsigned();
            $table->dateTime('date_location');
            $table->dateTime('date_retour');
            $table->timestamps();
        });
        Schema::table('locations', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('vehicule_id')->references('id')->on('vehicules');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
};
