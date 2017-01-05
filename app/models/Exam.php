<?php


class Exam extends Eloquent{

	protected $table = 'exams';

	public function questions(){
		return $this->belongsToMane('Question',);
	}

}
