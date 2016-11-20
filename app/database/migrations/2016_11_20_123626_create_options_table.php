<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Creates the options table
		Schema::create('options', function ($table) {
			$table->increments('id')->unsigned();
        	$table->integer('question_id')->unsigned();
        	$table->string('option_description');
        	$table->timestamps();
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
		Schema::table('options', function (Blueprint $table) {
            $table->dropForeign('options_question_id_foreign');
        });

		Schema::drop('options');	}

}
