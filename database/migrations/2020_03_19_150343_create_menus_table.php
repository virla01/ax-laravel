<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            
            $table->string('name', 150);
            $table->string('slug', 150)->unique();
            $table->string('url', 150)->nullable();
            $table->text('icon')->nullable();
            $table->text('description')->nullable();
            $table->unsignedInteger('parent')->default(0);
            $table->smallInteger('order')->default(0);
            $table->boolean('enabled')->default(1);
            $table->enum('client',['site','admin']);
            $table->string('access');
            $table->string('meta_description',255)->nullable();
            $table->string('meta_key',255)->nullable();
            $table->string('meta_author',255)->nullable();

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
        Schema::dropIfExists('menus');
    }
}
