<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToExCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ex_comments', function(Blueprint $table)
		{
			$table->foreign('post_id', 'fk_ex_comments_ex_posts1')->references('id')->on('ex_posts')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_id', 'fk_ex_comments_ex_users1')->references('id')->on('ex_users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ex_comments', function(Blueprint $table)
		{
			$table->dropForeign('fk_ex_comments_ex_posts1');
			$table->dropForeign('fk_ex_comments_ex_users1');
		});
	}

}
