<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAtrributtesNew extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pokemon', function (Blueprint $table) {
            $table->string('tipo');
            $table->string('peso');
            $table->string('ataque');
            $table->string('altura');
            $table->string('defensa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pokemon', function (Blueprint $table) {
            $table->dropColumn('tipo');
            $table->dropColumn('peso');
            $table->dropColumn('ataque');
            $table->dropColumn('altura');
            $table->dropColumn('defensa');


        });
    }
}
