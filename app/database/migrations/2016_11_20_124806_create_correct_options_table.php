<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorrectOptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Creates the correct_options table
		Schema::create('correct_options', function ($table) {
			$table->increments('id')->unsigned();
        	$table->integer('question_id')->unsigned();
        	$table->integer('option_id')->unsigned();
        	$table->timestamps();
            $table->foreign('question_id')->references('id')->on('questions')
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
		Schema::table('correct_options', function (Blueprint $table) {
            $table->dropForeign('correct_options_question_id_foreign');
            $table->dropForeign('correct_options_option_id_foreign');
        });

		Schema::drop('exam_question');
	}

}
