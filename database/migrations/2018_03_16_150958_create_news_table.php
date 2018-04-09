<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
         * 新闻
         * title   标题
         * content  内容
         * banner 头图
         * status 1生效  0 无效
         * create_user 创建者
         * last_modify_user 最后修改者
        * */
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('content');
            $table->string('banner');
            $table->tinyInteger('status')->default(1);
            $table->string('create_user')->default('');
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
        Schema::dropIfExists('news');
    }
}
