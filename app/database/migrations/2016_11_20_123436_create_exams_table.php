<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Creates the exams table
		Schema::create('exams', function ($table) {
			$table->increments('id')->unsigned();
        	$table->string('exam_name');
        	$table->integer('course_info')->unsigned();
        	$table->integer('exam_status')->unsigned();
        	$table->dateTime('start_at');
        	$table->dateTime('end_at');
        	$table->timestamps();
        	$table->foreign('course_info')->references('id')->on('semester_course_teacher')
                ->onUpdate('cascade')->onDelete('cascade');

        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('exams', function (Blueprint $table) {
            $table->dropForeign('exams_course_info_foreign');
            
        });

		Schema::drop('exams');
	}

}