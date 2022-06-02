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
        Schema::create('etudiers', function (Blueprint $table) {
            $table->increments('id');
            /*$table->foreign('seance_id')->references('id')->on('seances')->onDelete('cascade');
            $table->foreign('etudiant_id')->references('id')->on('etudiants')->onDelete('cascade');*/
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
        Schema::dropIfExists('etudiers');
    }
    };
