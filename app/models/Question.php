<?php


class Question extends Eloquent{

	protected $table = 'questions';

	public function options(){
		return $this->hasMany('Option','question_id','id');
	}
}
