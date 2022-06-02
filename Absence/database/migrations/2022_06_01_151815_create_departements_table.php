<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->date('dateCreation');
            /*$table->foreign('administrateur_id')->references('id')->on('administrateurs')->onDelete('cascade');
            $table->foreign('enseignant_id')->references('id')->on('enseignants')->onDelete('cascade');*/
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
        Schema::dropIfExists('departements');
        
    }
};
