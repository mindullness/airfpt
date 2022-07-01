<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('PNR', 6);
            $table->integer('flight_id')->unsigned()->references('id')->on('flights');
            $table->integer('mem_id')->nullable();
            $table->enum('title', array('Mr', 'Mrs', 'Ms'));
            $table->string('first_name');
            $table->string('last_name');
            $table->enum('gender', array('adl', 'chd', 'inf'));
            $table->string('seat_no', 3)->nullable();
            $table->enum('status', array('confirmed', 'check-in', 'void'));
            $table->string('mobile');
            $table->string('email')->nullable();
            $table->unsignedMediumInteger('price');
            $table->timestamps();
        });

        DB::table('bookings')->insert(['PNR' => 'F682RT', 'flight_id'=>1, 'title' => 'Mr', 'first_name' => 'Nguyen', 'last_name'=>'Toan', 'gender'=>'adl', 'status'=>'confirmed', 'mobile'=>'0908860688', 'price'=>1800000]);
        DB::table('bookings')->insert(['PNR' => 'F682RT', 'flight_id'=>2, 'title' => 'Mr', 'first_name' => 'Nguyen', 'last_name'=>'Toan', 'gender'=>'adl', 'status'=>'confirmed', 'mobile'=>'0908860688', 'price'=>1800000]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};
