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
        Schema::create('flights', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('flight_number')->unsigned()->references('id')->on('routes');;
            // $table->dropPrimary('table_flight_number_primary');
            $table->date('date');
            $table->time('etd')->nullable();
            $table->unsignedTinyInteger('gate')->nullable();
            $table->string('flight_status');
            $table->smallInteger('ac_id')->unsigned()->references('id')->on('aircrafts');
            $table->string('current_seatmap')->nullable();
            $table->unsignedSmallInteger('avai_seat')->nullable();
            $table->unsignedDecimal('base_price', 11, 2);
            
            $table->foreign('ac_id')->references('id')->on('aircrafts');
            $table->unique(['flight_number', 'date']);
            $table->timestamps();
        });

        DB::table('flights')->insert(['flight_number' => 120, 'date' => '2022-07-28', 'gate' => 10, 'flight_status'=>'open', 'ac_id'=>1, 'base_price'=>'600000']);
        DB::table('flights')->insert(['flight_number' => 121, 'date' => '2022-07-28', 'gate' => 12, 'flight_status'=>'open', 'ac_id'=>1, 'base_price'=>'800000']);
        DB::table('flights')->insert(['flight_number' => 206, 'date' => '2022-07-28', 'gate' => 15, 'flight_status'=>'open', 'ac_id'=>1, 'base_price'=>'600680']);
        DB::table('flights')->insert(['flight_number' => 207, 'date' => '2022-07-28', 'gate' => 16, 'flight_status'=>'open', 'ac_id'=>1, 'base_price'=>'800860']);
        DB::table('flights')->insert(['flight_number' => 120, 'date' => '2022-07-29', 'gate' => 10, 'flight_status'=>'open', 'ac_id'=>1, 'base_price'=>'600000']);
        DB::table('flights')->insert(['flight_number' => 121, 'date' => '2022-07-29', 'gate' => 12, 'flight_status'=>'open', 'ac_id'=>1, 'base_price'=>'800000']);
        DB::table('flights')->insert(['flight_number' => 206, 'date' => '2022-07-29', 'gate' => 15, 'flight_status'=>'open', 'ac_id'=>1, 'base_price'=>'600680']);
        DB::table('flights')->insert(['flight_number' => 207, 'date' => '2022-07-29', 'gate' => 16, 'flight_status'=>'open', 'ac_id'=>1, 'base_price'=>'800860']);
        DB::table('flights')->insert(['flight_number' => 120, 'date' => '2022-07-30', 'gate' => 10, 'flight_status'=>'open', 'ac_id'=>1, 'base_price'=>'600000']);
        DB::table('flights')->insert(['flight_number' => 121, 'date' => '2022-07-30', 'gate' => 12, 'flight_status'=>'open', 'ac_id'=>1, 'base_price'=>'800000']);
        DB::table('flights')->insert(['flight_number' => 206, 'date' => '2022-07-30', 'gate' => 15, 'flight_status'=>'open', 'ac_id'=>1, 'base_price'=>'600680']);
        DB::table('flights')->insert(['flight_number' => 207, 'date' => '2022-07-30', 'gate' => 16, 'flight_status'=>'open', 'ac_id'=>1, 'base_price'=>'800860']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flights');
    }
};
