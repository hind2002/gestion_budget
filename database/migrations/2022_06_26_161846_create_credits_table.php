<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
            Schema::create('credits', function (Blueprint $table) {
                $table->id();
                $table->timestamps();
                $table->date('date_credit');
                $table->double('valeur_credit');
                
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
        Schema::dropIfExists('credits');
    }
}
