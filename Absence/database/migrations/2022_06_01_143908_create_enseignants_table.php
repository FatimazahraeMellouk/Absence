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
        Schema::create('enseignants', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('sexe');
            $table->string('gmail');
            $table->string('telephone');
            $table->date('date_naissance');
            $table->date('date_recrutement');
            $table->string('image');
            $table->foreignId('administrateur_id')->nullable()->constrained('administrateurs');
            //$table->unsignedBigInteger('administrateur_id')->nullable();
            //$table->foreign('administrateur_id')->references('id')->on('administrateurs')->onDelete('cascade');
            //$table->foreign('administrateur_id')->references('id')->on('administrateurs')->onDelete('cascade');
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
        Schema::dropIfExists('enseignants');
        /*Schema::table('enseignants',function(Blueprint $table){
        Schema::disableForeignKeyConstraints();
        $table->dropForeign(['administrateur_id']);
    });*/
}
};