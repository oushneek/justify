<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		///Creates the courses table
		Schema::create('courses', function ($table) {
			$table->increments('id')->unsigned();
        	$table->string('course_code')->unique;
        	$table->string('course_title');
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
		Schema::drop('courses');
	}

}
