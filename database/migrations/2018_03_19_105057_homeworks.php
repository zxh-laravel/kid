<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Homeworks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
       * 班级作业
       * class_id   班级id
       * content   内容
       * date 日期
       * create_user 创建者
       * last_modify_user 最后修改者
      * */
        Schema::create('homeworks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('content');
            $table->integer('class_id');
            $table->date('date');
            $table->string('create_user');
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
