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
        Schema::create('routes', function (Blueprint $table) {
            $table->smallInteger('id')->unsigned()->primary();
            $table->char('origin', 3);
            $table->char('destination', 3);
            $table->time('depart_time');
            $table->unsignedSmallInteger('duration');
            $table->timestamps();
            $table->foreign('origin')->references('iata_code')->on('airports');
            $table->foreign('destination')->references('iata_code')->on('airports');
        });

        DB::table('routes')->insert(['id' => 120, 'origin' => 'SGN', 'destination' => 'HAN', 'depart_time' => '05:05:00', 'duration' => 130]);
        DB::table('routes')->insert(['id' => 121, 'origin' => 'HAN', 'destination' => 'SGN', 'depart_time' => '10:35:00', 'duration' => 130]);
        DB::table('routes')->insert(['id' => 206, 'origin' => 'SGN', 'destination' => 'TBB', 'depart_time' => '06:10:00', 'duration' => 70]);
        DB::table('routes')->insert(['id' => 207, 'origin' => 'TBB', 'destination' => 'SGN', 'depart_time' => '08:20:00', 'duration' => 70]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('routes');
    }
};
