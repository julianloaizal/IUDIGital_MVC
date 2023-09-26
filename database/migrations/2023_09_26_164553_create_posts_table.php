<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name', 100)->nullable()->default('text');/*column:string*/
            $table->bigInteger('category_id')->unsigned()->nullable();/*column:integer foranea de tabla categories*/
            $table->text('description')->nullable();/*column:text para textarea*/
            $table->enum('state',['post','no_post'])->default('no_post');/*column:enum para select*/

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
        Schema::dropIfExists('posts');
    }
}
