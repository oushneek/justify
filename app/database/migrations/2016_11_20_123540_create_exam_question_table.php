<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamQuestionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Creates the exam_question table
		Schema::create('exam_question', function ($table) {
			$table->increments('id')->unsigned();
        	$table->integer('exam_id')->unsigned();
        	$table->integer('question_id')->unsigned();
        	$table->timestamps();
        	$table->foreign('exam_id')->references('id')->on('exams')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('question_id')->references('id')->on('questions')
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
		Schema::table('exam_question', function (Blueprint $table) {
            $table->dropForeign('exam_question_exam_id_foreign');
            $table->dropForeign('exam_question_question_id_foreign');
        });

		Schema::drop('exam_question');
	}

}
