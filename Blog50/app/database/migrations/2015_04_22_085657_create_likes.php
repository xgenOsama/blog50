<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLikes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('likes',function($table){
			$table->increments('id');
			$table->string('name_user',1000);
			$table->integer('post_id')->unsigned();
			$table->foreign('post_id')
			->references('id')->on('posts')
			->onDelete('cascade');
			$table->integer('comment_id')->unsigned();
			$table->foreign('comment_id')
			->references('id')->on('comments')
			->onDelete('cascade');
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
		Schema::drop('likes');
	}

}
