<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            
            $table->integer('user_id')->unsigned();
            $table->Integer('category_id')->unsigned();
            $table->integer('source_id')->unsigned();
            $table->integer('author_id')->unsigned();

            $table->string('title',150);
            $table->string('alias',150)->unique();
            $table->boolean('published')->default(0);
            $table->text('introtext')->nullable();
            $table->text('fulltext')->nullable();
            $table->boolean('imageintro')->default(0);
            $table->text('imageintro_title')->nullable();
            $table->string('imageintro_img')->nullable();
            $table->text('imageintro_caption')->nullable();
            $table->string('imageintro_credits')->nullable();
            $table->boolean('image')->default(0);
            $table->string('image_img')->nullable();
            $table->text('image_caption')->nullable();
            $table->string('image_credits')->nullable();
            $table->boolean('imagegallery')->nullable();
            $table->string('imagegallery_img')->nullable();
            $table->text('imagegallery_caption')->nullable();
            $table->string('imagegallery_credits')->nullable();
            $table->boolean('video')->default(0);
            $table->string('video_vid')->nullable();
            $table->text('video_caption')->nullable();
            $table->string('video_credits')->nullable();
            $table->boolean('audio')->default(0);
            $table->string('audio_aud')->nullable();
            $table->text('audio_caption')->nullable();
            $table->string('audio_credits')->nullable();
            $table->dateTime('publish_up')->nullable();
            $table->dateTime('publish_down')->nullable();
            $table->boolean('trash')->default(0);
            $table->integer('access')->default(0);
            $table->integer('order')->default(0);
            $table->boolean('features')->default(0);
            $table->integer('featured_ordering')->default(0);
            $table->integer('hits')->default(0);
            $table->text('meta_decription')->nullable();
            $table->text('meta_key')->nullable();
            $table->text('meta_author')->nullable();
            $table->string('updated_by');

            $table->timestamps();

            //RELATIONS
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('category_id')->references('id')->on('categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
