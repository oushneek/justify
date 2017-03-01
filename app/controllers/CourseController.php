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
		$course=Course::find($id);
		return View::make('courses.show')->with('course',$course);



	}



	public function create()
	{
		return View::make('courses.create');
	}




	public function store()
	{
		$rules=[
				'course_code' =>'required',
				'course_title' => 'required'
		];

		$data= Input::all();

		$validator = Validator::make($data,$rules);




		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);
		}

		else{

			$course = new Course();
			$course->course_code=$data['course_code'];
			$course->course_title=$data['course_title'];

			if($course->save()){
				return Redirect::back()->withInput()->with('success','Course Added Successfully !!!');
			}
			else{
				return Redirect::back()->withInput()->withErrors($validator);
			}
		}




	}





	public function edit($id)
	{
		$course=Course::find($id);
		return View::make('courses.edit')->with('course',$course);

	}


	public function update($id)
	{
		$rules=[
				'course_code' =>'required',
				'course_title' => 'required'
		];

		$data= Input::all();

		$validator = Validator::make($data,$rules);


		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);
		}

		else{


			$course = Course::find($id);
			$course->course_code=$data['course_code'];
			$course->course_title=$data['course_title'];

			if($course->save()){
				return Redirect::route('course.index')->withInput()->with('success','Course Updated Successfully !!!');
			}
			else{
				return Redirect::back()->withInput()->withErrors($validator);
			}


		}


	}


	public function destroy($id)
	{
		if(Course::destroy($id)){
			return Redirect::back()->with('success','Course deleted Successfully.');
		}
		else{
			return Redirect::back()->with('error','Course could not be deleted.');

		}



	}

}
