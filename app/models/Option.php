<?php


class Option extends Eloquent{

	protected $table = 'options';

	public function question(){
		return $this->belongsTo('Question','question_id', 'id');
	}
}
