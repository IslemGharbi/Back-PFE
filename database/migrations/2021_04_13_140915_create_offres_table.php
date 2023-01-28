<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nom_prospect');
            $table->string('tva_prospect');
            $table->string('contact_prospect');
            $table->string('monnaie_prospect');
            $table->string('offre_produit');
            $table->string('offre_pack');
            $table->string('offre_remise');
            $table->string('prix_remise');
            $table->string('prix_ht');
            $table->string('prix_ht_AR');
            $table->string('prix_apres_tva');
            $table->string('prix_final');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offres');
    }
}
