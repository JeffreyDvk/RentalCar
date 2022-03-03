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
        Schema::create('vehicules', function (Blueprint $table) {
            $table->increments('id', true);
            $table->string('immatriculation')->unique();
            $table->string('marque');
            $table->string('segment');
            $table->text('apercu')->nullable();;
            $table->integer('nombre_de_place');
            $table->boolean('is_rent');
            $table->bigInteger('cout_location');
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
        Schema::dropIfExists('vehicules');
    }
};
