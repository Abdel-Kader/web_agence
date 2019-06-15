<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoyagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voyages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('libelle',255);
            $table->date('dateDebut');
            $table->date('dateFin');
            $table->bigInteger('id_type_voyage')->unsigned();
            $table->boolean('status')->default(false);
            $table->timestamps();

            //definition des clés etrangères
            $table->foreign('id_type_voyage')->references('id')->on('type_voyages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voyages');
    }
}
