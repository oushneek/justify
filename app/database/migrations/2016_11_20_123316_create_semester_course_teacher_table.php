<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSemesterCourseTeacherTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Creates the semesters table
		Schema::create('semester_course_teacher', function ($table) {
			$table->increments('id')->unsigned();
        	$table->integer('semester_id')->unsigned();
        	$table->integer('course_id')->unsigned();
        	$table->integer('teacher_id')->unsigned();
        	$table->timestamps();
        	$table->foreign('semester_id')->references('id')->on('semesters')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('course_id')->references('id')->on('courses')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('teacher_id')->references('id')->on('users')
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
		
		Schema::table('semester_course_teacher', function (Blueprint $table) {
            $table->dropForeign('semester_course_teacher_semester_id_foreign');
            $table->dropForeign('semester_course_course_id_foreign');
            $table->dropForeign('semester_course_teacher_id_foreign');
        });

		Schema::drop('semester_course_teacher');
	}

}
