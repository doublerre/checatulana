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

            $table->integer('user_id')->unsigned();
            $table->integer('subcategory_id')->unsigned();

            $table->string('name', 128);
            $table->string('slug', 128)->unique();

            $table->mediumText('excerpt')->nullable();
            $table->text('body');
            $table->enum('status', ['PUBLISHED', 'DRAFT'])->default('DRAFT');

            $table->string('file', 128)->nullable();

            $table->timestamps();
            
            //relation
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('subcategory_id')->references('id')->on('subcategories')
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
        Schema::dropIfExists('posts');
    }
}
