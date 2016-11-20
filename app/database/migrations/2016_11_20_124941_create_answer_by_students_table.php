<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswerByStudentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Creates the answer_by_student table
		Schema::create('answer_by_student', function ($table) {
			$table->increments('id')->unsigned();
        	$table->integer('student_id')->unsigned();
        	$table->integer('exam_question_id')->unsigned();
        	$table->integer('option_id')->unsigned();
        	$table->integer('time_taken');
        	$table->integer('submition_status');
        	$table->boolean('is_skipped');
        	$table->boolean('is_answered');
        	$table->timestamps();
        	$table->foreign('student_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('exam_question_id')->references('id')->on('exam_question')
                ->onUpdate('cascade')->onDelete('cascade');
			$table->foreign('option_id')->references('id')->on('options')
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
		//
		Schema::table('answer_by_student', function (Blueprint $table) {
            $table->dropForeign('answer_by_student_student_id_foreign');
            $table->dropForeign('answer_by_exam_question_id_foreign');
            $table->dropForeign('answer_by_student_option_id_foreign');
        });

		Schema::drop('answer_by_student');
	}

}
