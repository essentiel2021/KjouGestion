<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransfert extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Transferts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fournisseur_id')->constrained();
            $table->foreignId('client_id')->constrained();
            $table->foreignId('vehicule_id')->constrained();
            $table->foreignId('chauffeur_id')->constrained();
            $table->foreignId('site_id')->constrained();
            $table->foreignId('produit_id')->constrained();
            $table->foreignId('provenance_id')->constrained();
            $table->foreignId('analyse_transfert_id')->constrained();
            $table->foreignId('analyse_dechargement_id')->constrained();
            $table->integer('poids_sortie');
            $table->integer('poids_usine');
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
        Schema::dropIfExists('Transferts');
    }
}
