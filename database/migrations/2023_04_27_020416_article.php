<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Article extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->notNull()->defaultValue('')->comment('文章标题');
            $table->timestamps();
        });

        Schema::create('author', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->notNull()->defaultValue('')->comment('作者名字');
            $table->integer('article_id')->notNull()->comment('文章id');
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
        Schema::dropIfExists('article');
        Schema::dropIfExists('author');
    }
}
