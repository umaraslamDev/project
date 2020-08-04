<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenericPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generic_packages', function (Blueprint $table) {
            $table->increments('id');
               $table->string('hotel_name')->nullable();
            $table->string('flight_name')->nullable();
            $table->string('insurance')->nullable();
            $table->string('rental')->nullable();
            $table->string('sdays')->nullable();
            $table->string('edays')->nullable();
            $table->string('from')->nullable();
            $table->string('class')->nullable();
            $table->string('room_type')->nullable();
            $table->string('price')->nullable();
            $table->text('picture')->nullable();
            $table->string('where')->nullable();
            $table->string('address')->nullable();
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
        Schema::dropIfExists('generic_packages');
    }
}
