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
        Schema::create('admin', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('role')->default(1);
            $table->string('permission');
            $table->timestamps();
        });

        DB::table('admin')->insert(['username'=>'admin1','password'=>'$2y$10$pCMTCmz1KCjMn/xrFMhUze5y5b.tlAvscoS3LC8obO59TE4L1kMom','role'=>'1','permission'=>'1']);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin');
    }
};
