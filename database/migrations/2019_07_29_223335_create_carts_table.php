<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
             $table->increments('cartid');
            $table->biginteger('userid')->unsigned();
             $table->integer('accomoid')->unsigned();
              $table->integer('fliid')->unsigned();
               $table->integer('insuid')->unsigned();
                $table->integer('rentid')->unsigned();
                 $table->integer('geneid')->unsigned();
                 $table->foreign('userid')->references('id')->on('users');
             $table->foreign('accomoid')->references('id')->on('accomodations');
              $table->foreign('fliid')->references('id')->on('flights');
               $table->foreign('insuid')->references('id')->on('insurances');
                $table->foreign('rentid')->references('id')->on('rentals');
                 $table->foreign('geneid')->references('id')->on('generic_packages');
            $table->rememberToken();
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
        Schema::dropIfExists('carts');
    }
}
