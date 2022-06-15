<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depenses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name_d');
            $table->date('date_d');
            $table->double('valeur_depense_d');
            $table->bigInteger('categorie_depense_id')->unsigned()->nullable();
            $table->foreign('categorie_depense_id')->references('id')->on('categorie_depenses')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorie_depenses');
    }
}
