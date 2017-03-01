<?php

class SemesterController extends BaseController {

	public function index()
	{
		$semesters=Semester::all();
		return View::make('semesters.index')->with('semesters',$semesters);
	}



	public function show($id)
	{
	}


	public function create()
	{
		return View::make('semesters.create');
	}



	public function store()
	{
		$rules=[
				'semester_name' =>'required',
				'year' => 'required'
		];

		$data= Input::all();

		$validator = Validator::make($data,$rules);




		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);
		}

		else{

			$semester = new Semester();
			$semester->semester_name=$data['semester_name'];
			$semester->year=$data['year'];

			if($semester->save()){
				return Redirect::back()->withInput()->with('success','Semester Added Successfully !!!');
			}
			else{
				return Redirect::back()->withInput()->withErrors($validator);
			}
		}

	}



	public function edit($id)
	{
		$semester=Semester::find($id);
		return View::make('semesters.edit')->with('semester',$semester);

	}



	public function update($id)
	{
	}

	
	public function destroy($id)
	{
	}

}
