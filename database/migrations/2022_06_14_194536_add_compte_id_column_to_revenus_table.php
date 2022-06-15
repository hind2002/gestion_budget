<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCompteIdColumnToRevenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('revenus', function (Blueprint $table) {
            $table->bigInteger('compte_id')->unsigned()->nullable();
            $table->foreign('compte_id')->references('id')->on('comptes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('revenus', function (Blueprint $table) {
            //
        });
    }
}
