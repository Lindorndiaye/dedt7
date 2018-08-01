<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('rendezvous')->nullable($value = true);	
            $table->string('email');
            $table->string('campus');
            $table->string('mobile');
            $table->bigInteger('etat')->nullable($value = true);
            $table->string('niveau');
            $table->string('niv');
            
            $table->bigInteger('dossier')->nullable($value = true);
            $table->date('rvori')->nullable($value = true);
            $table->string('choix')->nullable($value = true);
            $table->date('rvsim')->nullable($value = true);
            $table->date('rvcamp')->nullable($value = true);
            $table->string('reponse')->nullable($value = true);;

            
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
        Schema::dropIfExists('students');
    }
}
