<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkToTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('offres', function (Blueprint $table) {
            $table->foreignId('produit_id')->constrained('produits')->unsigned()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('presentation_id')->constrained('presentations')->unsigned()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('intervention_id')->constrained('interventions')->unsigned()->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::table('prospects', function (Blueprint $table) {
            $table->foreignId('monnaie_id')->constrained('monnaies')->unsigned()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('pay_id')->constrained('pays')->unsigned()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('societe_id')->constrained('societes')->unsigned()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('regime_id')->constrained('regimes')->unsigned()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('tva_id')->constrained('tvas')->unsigned()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('formejuridique_id')->constrained('formejuridiques')->unsigned()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('secteur_id')->constrained('secteurs')->unsigned()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('delegation_id')->constrained('delegations')->unsigned()->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('offres', function (Blueprint $table) {
            $table->dropForeign('offres_produit_id_foreign');
            $table->dropForeign('offres_presentation_id_foreign');
            $table->dropForeign('offres_intervention_id_foreign');
        });

        Schema::table('prospects', function (Blueprint $table) {
            $table->dropForeign('prospects_monnaie_id_foreign');
            $table->dropForeign('prospects_pay_id_foreign');
            $table->dropForeign('prospects_societe_id_foreign');
            $table->dropForeign('prospects_regime_id_foreign');
            $table->dropForeign('prospects_tva_id_foreign');
            $table->dropForeign('prospects_formejuridique_id_foreign');
            $table->dropForeign('prospects_secteur_id_foreign');
            $table->dropForeign('prospects_delegation_id_foreign');
        });
    }
}
