<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('post_author')->unsigned()->index();
            $table->longText('post_content');
            $table->text('post_title');
            $table->string('post_name')->unique()->index();
            $table->string('post_type', 20);
            $table->string('post_guid')->unique();
            $table->timestamps();
            $table->index(['post_type', 'created_at', 'id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
