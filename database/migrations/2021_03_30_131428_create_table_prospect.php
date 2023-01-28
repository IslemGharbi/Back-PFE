<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProspect extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prospects', function (Blueprint $table) {
            $table->id();
            $table->string('codeP');
            $table->string('raisonsocialeP');
            $table->string('typeP');
            $table->string('etatP');
            $table->string('adresseP');
            $table->string('codepostalP');
            $table->string('villeP');
            //$table->string('paysP');
            $table->string('matriculefiscaleP');
            $table->string('registrecommerceP');
            //$table->string('regimeP');
            //$table->string('formejuridiqueP');
            //$table->string('secteurP');
            $table->string('activiteP');
            //$table->string('tvaP');
            $table->string('responsableP');
            $table->integer('telephonefixeP');
            $table->integer('telephonemobileP');
            $table->string('telecopieP');
            $table->string('sitewebP');
            $table->string('adresseelectroniqueP');
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

        Schema::dropIfExists('prospects');

      
    }
}
