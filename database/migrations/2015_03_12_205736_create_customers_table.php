<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('first_name', 50)->nullable();
			$table->string('last_name', 50);
			$table->string('address_1', 50);
			$table->string('address_2', 50)->nullable();
			$table->string('town', 50);
			$table->string('county', 50)->nullable();
			$table->string('postcode', 10);
			$table->integer('age')->nullable();
			$table->string('email', 50)->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customers');
	}

}
