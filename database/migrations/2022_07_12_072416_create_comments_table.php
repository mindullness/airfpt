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
            $table->integer('mem_id')->unsigned();
            $table->string('user_name')->nullable();
            $table->string('comment', 300)->nullable();
             $table->foreign('mem_id')->references('id')->on('user')->onDelete('cascade');
            $table->foreign('user_name')->references('name')->on('users')->onDelete('cascade');
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
