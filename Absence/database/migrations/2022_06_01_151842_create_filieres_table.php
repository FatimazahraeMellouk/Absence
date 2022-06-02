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
        Schema::create('filieres', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('dureeFormation');
            $table->string('accesFormation');
            /*$table->foreign('enseignant_id')->references('id')->on('enseignants')->onDelete('cascade');
            $table->foreign('departement_id')->references('id')->on('departements')->onDelete('cascade');*/
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
        Schema::dropIfExists('filieres');
    }
    };