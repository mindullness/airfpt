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
        Schema::create('member', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('discount_rate_id')->nullable();
            $table->string('title');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username')->unique();
            $table->string('password');
            $table->integer('points')->default(0);
            $table->integer('role')->default(0);
            $table->string('email')->unique();;
            $table->integer('phone');
            $table->foreign('discount_rate_id')->references('id')->on('discount-rate')->onDelete('cascade');
            $table->timestamps();
        });

        DB::table('member')->insert(['title'=>'mr','first_name'=>'Nguyen','last_name'=>'Toan','username'=>'toan1108','password'=>'$2y$10$pCMTCmz1KCjMn/xrFMhUze5y5b.tlAvscoS3LC8obO59TE4L1kMom','role'=>'0','points'=>'0','discount_rate_id'=>'1','email'=>'mrfuc@yahoo.com','phone'=>'0903766708']);
        DB::table('member')->insert(['title'=>'mr','first_name'=>'Nguyen','last_name'=>'Phuc Duy Real','username'=>'duiqtreal','password'=>'$2y$10$pCMTCmz1KCjMn/xrFMhUze5y5b.tlAvscoS3LC8obO59TE4L1kMom','role'=>'1','points'=>'0','discount_rate_id'=>'1','email'=>'mrfucreal@yahoo.com','phone'=>'0903766708']);
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('member');
    }
};
