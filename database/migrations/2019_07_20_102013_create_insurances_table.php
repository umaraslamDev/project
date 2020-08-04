<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insurances', function (Blueprint $table) {
            $table->increments('id');
               $table->string('company_name')->nullable();
            $table->string('trip_cancelatiom_price')->nullable();
            $table->string('trip_intuption_price')->nullable();
            $table->string('medical_evacuation_price')->nullable();
            $table->string('flight_accident_price')->nullable();
            $table->string('accidental_death_price')->nullable();
            $table->string('price')->nullable();
            $table->text('picture')->nullable();
            $table->string('country')->nullable();
            $table->string('email')->nullable();
            $table->string('number')->nullable();
            $table->string('detail')->nullable();
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
        Schema::dropIfExists('insurances');
    }
}
