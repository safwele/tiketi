<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorie_places', function (Blueprint $table) {
            $table->id('idCategoriePlaces');
            $table->string('nomCategoriePlaces');
            $table->integer('nbCategoriePlaces');
            $table->string('tokenCategoriePlaces');

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
        Schema::dropIfExists('categorie_places');
    }
}
