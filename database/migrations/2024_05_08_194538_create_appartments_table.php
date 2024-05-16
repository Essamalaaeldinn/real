<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appartments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('apartment_type');
            $table->string('phone');
            $table->string('home_space');
            $table->string('floor');
            $table->string('home_price');
            $table->integer('num_of_bathrooms');
            $table->integer('num_of_bedrooms');
            $table->string('location');
            $table->Integer('user_id'); 
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appartments');
    }
}
