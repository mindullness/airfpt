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
        Schema::create('airports', function (Blueprint $table) {
            $table->char('iata_code', 3)->primary();
            $table->string('name')->unique();
            $table->string('city');
            
            $table->timestamps();
        });

        DB::table('airports')->insert(['iata_code' => 'SGN', 'name' => 'TAN SON NHAT', 'city' => 'TP.HO CHI MINH']);
        DB::table('airports')->insert(['iata_code' => 'HAN', 'name' => 'NOI BAI', 'city' => 'HA NOI']);
        DB::table('airports')->insert(['iata_code' => 'TBB', 'name' => 'TUY HOA', 'city' => 'PHU YEN']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('airports');
    }
};
