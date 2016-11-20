<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSemestersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Creates the semesters table
		Schema::create('semesters', function ($table) {
			$table->increments('id')->unsigned();
        	$table->string('semester_name');
        	$table->integer('year')->unsigned();
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
		Schema::drop('semesters');
	}

}
