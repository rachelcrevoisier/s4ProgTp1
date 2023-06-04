<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 50);
            $table->string('adresse', 100);
            $table->string('telephone', 15);
            $table->string('courriel', 100)->unique();
            $table->date('date_naissance');
<<<<<<< HEAD
            $table->timestamps();
            $table->foreignId('ville_id')->constrained(table: 'villes');
=======
            $table->integer('ville_id');
            $table->timestamps();
            $table->foreign('ville_id')->references('id')->on('ville');
>>>>>>> d62f89d2a3d949bf3d1915aeb8c536bfbacaa59f
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etudiants');
    }
}
