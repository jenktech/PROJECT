<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHworkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hworkers', function (Blueprint $table) {
            $table->id();
             $table->string('first_name');
             $table->string('middle_name');
             $table->string('last_name');
             $table->string('user_name');
             $table->string('phone_no');
          
            $table->foreignId('hospital_id')->nullable()->constrained();
            $table->foreignId('user_id')->nullable()->constrained();
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
        Schema::dropIfExists('hworkers');
    }
}
