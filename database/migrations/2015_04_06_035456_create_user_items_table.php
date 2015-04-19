<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_items', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('item_id');
			$table->string('name');
			$table->date('expire_date');
			$table->date('purchase_date');
			$table->string('notes');
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
		Schema::drop('user_items');
	}

}
