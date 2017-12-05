<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNavsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navs', function (Blueprint $table) {
            $table->increments('nav_id')->comment('导航表主键');
            $table->varchar('nav_name',50)->comment('导航名字');
            $table->varchar('nav_alias',50)->comment('导航别名');
            $table->varchar('nav_url',255)->comment('导航链接');
            $table->integer('nav_order',11)->comment('导航排序');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('navs');
    }
}
