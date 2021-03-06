<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolTable extends Migration
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
        Schema::create('school', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('content');
            $table->string('mobile');
            $table->string('wechat');
            $table->string('address');
            $table->time('open_time');
            $table->time('close_time');
            $table->string('last_modify_user')->default('');
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
        Schema::dropIfExists('school');
    }
}
