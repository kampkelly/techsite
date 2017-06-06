<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostPreviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_previews', function (Blueprint $table) {
            $table->increments('id');
			$table->string('title');
            $table->text('body');
            $table->text('body_text');
            $table->string('category');
            $table->integer('category_id');
            $table->string('author_name');
            $table->text('image');
            $table->string('status');
            $table->text('tags');
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
        Schema::dropIfExists('post_previews');
    }
}
