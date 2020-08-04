<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentals', function (Blueprint $table) {
            $table->increments('id');
             $table->string('company_name')->nullable();
            $table->string('type')->nullable();
            $table->string('name')->nullable();
            $table->string('seats')->nullable();
            $table->string('price')->nullable();
            $table->boolean('availability')->nullable();
            $table->string('pick_up_address')->nullable();
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
        Schema::dropIfExists('rentals');
    }
}
