<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('donor_id')->constrained();
            $table->foreignId('hworker_id')->nullable()->constrained();
            $table->string('weight')->nullable();
            $table->string('blood_pressure')->nullable();
            $table->string('height')->nullable();
            $table->longText('complaint');
            $table->longText('diagnosis')->nullable();
            $table->longText('results')->nullable();
            $table->longText('prescription')->nullable();
            $table->string('payment_method');
            $table->string('insurance_company')->nullable();
            $table->string('card_number')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('sessions');
    }
}
