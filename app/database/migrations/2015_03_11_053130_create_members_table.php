<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('members', function($table)
		{
		    $table->increments('id');
		    $table->timestamp('created_at');
		    $table->timestamp('updated_at');
		    $table->string('first_name',512);
		    $table->string('last_name',512);
		    $table->string('email',512);
		    $table->integer('user_id');
		    $table->tinyinteger('is_active');
		    $table->tinyinteger('is_deleted');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('members');
	}

}
