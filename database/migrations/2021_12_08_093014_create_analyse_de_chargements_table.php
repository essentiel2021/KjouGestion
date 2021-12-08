<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalyseDeChargementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analyse_de_chargements', function (Blueprint $table) {
            $table->id();
            $table->string('analyseur');
            $table->boolean('etat')->nullable()->default(false);
            $table->float('th_amande');
            $table->float('th_cajou');
            $table->float('outturn');
            $table->integer('grainage');
            $table->integer('huileux');
            $table->integer('pique');
            $table->integer('prix');
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
        Schema::dropIfExists('analyse_de_chargements');
    }
}
