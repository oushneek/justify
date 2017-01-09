<?php

class CourseController extends BaseController {

	public function index()
	{
		$courses=Course::all();
		return View::make('courses.index')
					->with('courses',$courses);
	}
	public function show($id)
	{

	}
	public function create()
	{
		return View::make('courses.create');
	}
	public function store()
	{
	}
	public function edit($id)
	{
	}
	public function update($id)
	{
	}
	public function destroy($id)
	{
	}

}
