<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Onlines extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
      * 在线报名
      * name   宝宝姓名
      * sex   姓名 1 男 2 女
      * mobile 电话
      * age 宝宝年龄
     * */
        Schema::create('onlines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->tinyInteger('sex');
            $table->integer('mobile');
            $table->integer('age');
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
        //
    }
}
