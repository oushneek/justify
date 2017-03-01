@extends('layouts.master')

@section('content')
<div class="row">
  <div class="col-md-10 col-md-offset-1">
  		</br>


  		@include('includes.alert')
  		{{ Form::model($course,['route' => ['course.update',$course->id], 'method' => 'put', 'class' => 'form-horizontal','files' => false]) }}
				  <fieldset>
					
					<legend class="col-md-8 col-md-offset-2">Edit Course</legend>
					
					
					<div class="form-group">
					  {{ Form::label('course_code', 'Course Code', array('class' => 'col-lg-2 col-lg-offset-1 control-label')) }}
					  <div class="col-lg-6">
					  	{{Form::text('course_code', null, array('class'=> 'form-control','placeholder'=> 'Course Code', 'autofocus'))}}
					  </div>
					</div>
					
					<div class="form-group">
						{{Form::label('course_title', 'Course Title',array('class'=>'col-lg-2 col-lg-offset-1 control-label'))}}
					  <div class="col-lg-6">
					  	{{Form::text('course_title',null, array('class'=>'form-control','placeholder'=>'Couse Title'))}}
					  </div>
					</div>
					
					
					<div class="form-group">
					  <div class="col-lg-7 col-lg-offset-5">
					  	{{Form::submit('Update',array('class'=>'btn btn-info'))}}
					  </div>
					</div>
				  </fieldset>
		{{ Form::close() }}
	</div>
</div>
@stop