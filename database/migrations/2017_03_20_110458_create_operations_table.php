<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('operations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('budget_id')->unsigned()->index();
			$table->foreign('budget_id')->references('id')->on('users')->onDelete('cascade');
			$table->string('name');
			$table->longText('desc');
			$table->float('sum')->default(0);
			$table->date('date');
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
		Schema::drop('operations');
	}

}
