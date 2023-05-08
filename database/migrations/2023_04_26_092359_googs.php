<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Googs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('goods_name',32)->notNull()->unique()->default('')->comment('商品名字');
            $table->integer('cat_id')->notNull()->comment('属于栏目id');
            $table->decimal('goods_price',5,2)->notNull()->default(0)->comment('商品价格');
            $table->string('goods_thumb',100)->notNull()->default('')->comment('商品缩率图');
            $table->softDeletes();
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
        Schema::dropIfExists('goods');
    }
}
