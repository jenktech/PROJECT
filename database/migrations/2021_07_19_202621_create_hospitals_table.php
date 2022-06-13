<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

class CreateHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->foreignId('district_id')->references('id')->on('districts')->onDelete('cascade');
            $table->integer('A');
             $table->integer('B');
             $table->integer('AB');
             $table->integer('An');
             $table->integer('Bn');
             $table->integer('On');
             $table->integer('O');
             $table->integer('ABn');
              
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
        Schema::dropIfExists('hospitals');
    }
     
}
