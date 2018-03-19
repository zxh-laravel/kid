<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class School extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
    * 学校信息
    * name  名称
    * content  介绍
    * mobile 电话
    * wechat 微信号
    * address 地址
    * open_time 开园时间
    * close_time 开园时间
   * */
        Schema::create('onlines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('content');
            $table->integer('mobile');
            $table->string('wechat');
            $table->string('address');
            $table->timestamp('open_time');
            $table->timestamp('close_time');
            $table->string('last_modify_user');
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
