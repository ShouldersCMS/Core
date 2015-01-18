<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('meta', function($table)
		{
			$table->increments('id');
			$table->string('meta_description', 155);
			$table->string('meta_rel_author');
			$table->string('meta_rel_publisher');
			$table->string('meta_og_title', 95);
			$table->string('meta_og_type');
			$table->string('meta_og_image');
			$table->string('meta_og_url');
			$table->string('meta_og_description', 297);
			$table->string('meta_fb_admins');
			$table->string('meta_twitter_card');
			$table->string('meta_twitter_url');
			$table->string('meta_twitter_title', 70);
			$table->string('meta_twitter_description', 200);
			$table->string('meta_twitter_image');
			$table->string('meta_robots');
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
		Schema::drop('meta');
	}

}
