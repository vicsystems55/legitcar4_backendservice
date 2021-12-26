<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('make')->nullable();
            $table->string('model')->nullable();
            $table->longText('description')->nullable();
            $table->string('state')->nullable();

            $table->boolean('published')->default(0);
            $table->boolean('approved')->default(0);
            $table->boolean('pending')->default(0);
            $table->boolean('disapproved')->default(0);
            $table->boolean('reserved')->default(0);
            $table->boolean('resolved')->default(0);

            $table->integer('year')->unsigned()->nullable();
            $table->string('trim')->nullable();
            $table->string('color')->nullable();
            $table->string('condition')->nullable();
            $table->string('transmission')->nullable();
            $table->integer('mileage')->unsigned()->nullable();
            $table->string('vin_number')->nullable();
            $table->decimal('engine_size')->nullable();
            $table->string('horse_power')->nullable();
            $table->integer('seats')->unsigned()->nullable();
            $table->integer('number_of_cyclinders')->unsigned()->nullable();
            $table->string('drive_train')->nullable();
            $table->string('fuel')->nullable();
            $table->integer('price')->unsigned()->nullable();
            $table->string('phone_number')->nullable();

            $table->string('listing_code')->nullable();
            
            $table->integer('views')->unsigned()->default(0);
            $table->string('status')->default('inactive');

            $table->foreign('user_id')->references('id')->on('users');


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
        Schema::dropIfExists('listings');
    }
}
