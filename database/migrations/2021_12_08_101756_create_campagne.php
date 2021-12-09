<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampagne extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Campagnes', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->string('slug')->nullable();
            $table->year('annee_encours');
            $table->year('annee_suivante');
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
        Schema::dropIfExists('Campagnes');
    }
}
