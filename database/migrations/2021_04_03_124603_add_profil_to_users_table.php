<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProfilToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('profil')->after('password');
        });

        // Schema::table('prospects', function (Blueprint $table) {
        //     $table->foreign('monnaies_monnaiep')->references('monnaiep')->on('monnaies')->onUpdate('cascade')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('prospects', function (Blueprint $table) {
        //     $table->dropForeign('prospects_monnaies_monnaiep_foreign');
        // });
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('profil');
        });
    }
}
