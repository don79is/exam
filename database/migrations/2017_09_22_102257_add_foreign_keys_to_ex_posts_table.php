<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToExPostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ex_posts', function(Blueprint $table)
		{
			$table->foreign('user_id', 'fk_ma_posts_ma_users1')->references('id')->on('ex_users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ex_posts', function(Blueprint $table)
		{
			$table->dropForeign('fk_ma_posts_ma_users1');
		});
	}

}
