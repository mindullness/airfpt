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
        Schema::create('aircrafts', function (Blueprint $table) {
            $table->smallInteger('id')->unsigned()->autoIncrement();
            $table->string('reg', 7);
            $table->string('config', 4);
            $table->string('type');
            $table->string('seatmap');
            $table->string('image');
            $table->timestamps();
        });

        DB::table('aircrafts')->insert([
            'reg' => 'VN-A688',
            'config' => 'Y180',
            'type'=>'Airbus A320',
            'seatmap'=>'Y180.json',
            'image'=>'A320neo.jpg'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aircrafts');
    }
};
