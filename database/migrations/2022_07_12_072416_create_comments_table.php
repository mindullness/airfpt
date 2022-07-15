<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mem_id')->nullable();
            $table->integer('reply_userid')->nullable();
            $table->string('title')->nullable();
            $table->string('comment')->nullable();

           
            //$table->foreign('mem_id')->references('id')->on('member')->onDelete('cascade');

           
         //   $table->foreign('reply_userid')->references('id')->on('member')->onDelete('cascade');
            $table->string('reply')->nullable();
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
        Schema::dropIfExists('comments');
    }
};
