<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Creates the questions table
		Schema::create('questions', function ($table) {
			$table->increments('id')->unsigned();
        	$table->string('questions_description');
        	$table->integer('time_limit');
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
		//
		Schema::drop('questions');

	}

}
