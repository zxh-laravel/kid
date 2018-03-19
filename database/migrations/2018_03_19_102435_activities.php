<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Activities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
         * 活动
         * title   标题
         * content  内容
         * status 1生效  0 无效
         * create_user 创建者
         * last_modify_user 最后修改者
        * */
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('content');
            $table->tinyInteger('status')->default(1);
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
