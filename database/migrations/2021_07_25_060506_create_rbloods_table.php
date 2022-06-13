<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRbloodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rbloods', function (Blueprint $table) {
            $table->id();
            $table->string('unit');
            $table->string('blood_type');
            $table->foreignId('hospital_id')->nullable()->constrained();
            $table->foreignId('user_id')->nullable()->constrained();
            $table->integer('phone');
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
        Schema::dropIfExists('rbloods');
    }
}
