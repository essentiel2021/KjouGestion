<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Lots', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cooperative_id')->constrained();
            $table->foreignId('fournisseur_id')->constrained();
            $table->foreignId('client_id')->constrained();
            $table->foreignId('vehicule_id')->constrained();
            $table->foreignId('chauffeur_id')->constrained();
            $table->foreignId('site_id')->constrained();
            $table->foreignId('produit_id')->constrained();
            $table->foreignId('provenance_id')->constrained();
            $table->foreignId('pil_id')->constrained();
            $table->foreignId('analyse_transfert_id')->constrained();
            $table->foreignId('analyse_dechargement_id')->constrained();
            $table->string('libelle');
            $table->integer('poids_premier_pese');
            $table->integer('poids_deuxieme_pese');
            $table->string('code');
            $table->string('emballage');
            $table->integer('poids_net');
            $table->string('peseur');
            $table->integer('sacs_dechire');
            $table->integer('tare_sacs');
            $table->integer('autre_tare');
            $table->integer('sacs_recond');
            $table->integer('nbre_sacs');
            $table->integer('sacs_humide');
            $table->text('detail')->nullable();
            $table->boolean('etat')->nullable()->default(false);
            $table->dateTime('date_premier_pese');
            $table->dateTime('date_deuxieme_pese');
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
        Schema::dropIfExists('Lots');
    }
}
