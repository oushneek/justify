@extends('layouts.master')

@section('content')
<div class="row">
  <div class="col-md-10 col-md-offset-1">
  		</br>

  		{{ Form::open(['route' => 'course.store', 'method' => 'post', 'class' => 'form-horizontal','files' => false]) }}
				  <fieldset>
					<legend class="col-md-8 col-md-offset-2">Add New Course</legend>
					

					<div class="form-group">
					  {{ Form::label('course_code', 'Course Code', array('class' => 'col-lg-2 col-lg-offset-1 control-label')) }}
					  <div class="col-lg-6">
						<input type="text" class="form-control" id="inputcode" placeholder="Course code">
					  </div>
					</div>
					
					<div class="form-group">
					  <label for="inputCourseTitle" class="col-lg-2 col-lg-offset-1 control-label">Course Title</label>
					  <div class="col-lg-6">
						<input type="text" class="form-control" id="inputCourseTitle" placeholder="Course Title">
					  </div>
					</div>
					
					
					<div class="form-group">
					  <div class="col-lg-7 col-lg-offset-5">
						<button type="submit" class="btn btn-info">Save</button>
					  </div>
					</div>
				  </fieldset>
		{{ Form::close() }}
	</div>
</div>
@stop