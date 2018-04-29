<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        * 食物
        * title   标题
        * content  内容
        * img  图片
        * dateType  1 早餐 2中餐 3 晚餐
        * foodType  1 主食 2配菜 3 点心
        * date  时间
        * create_user 创建者
        * last_modify_user 最后修改者
       * */
        Schema::create('foods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('content');
            $table->string('img');
            $table->tinyInteger('dateType')->default(1);
            $table->tinyInteger('foodType')->default(1);
            $table->date('date')->default(null);
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
        Schema::dropIfExists('foods');
    }
}
