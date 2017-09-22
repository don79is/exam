<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExPostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ex_posts', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->string('id', 36)->unique('id_UNIQUE');
			$table->timestamps();
			$table->softDeletes();
			$table->string('user_id', 36)->index('fk_ma_posts_ma_users1_idx');
			$table->string('title');
			$table->text('text');
			$table->string('mime_type');
			$table->string('path');
			$table->integer('width');
			$table->integer('size');
			$table->integer('height');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ex_posts');
	}

}
