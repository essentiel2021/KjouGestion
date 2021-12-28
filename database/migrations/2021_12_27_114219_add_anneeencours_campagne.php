<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAnneeencoursCampagne extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('campagnes', function (Blueprint $table) {
            $table->date('annee_encours')->after('libelle');
            $table->date('annee_suivante')->after('annee_encours');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('campagnes', function (Blueprint $table) {
            $table->dropColumn('annee_encours');
            $table->dropColumn('annee_suivante');
        });
    }
}
