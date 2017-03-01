@extends('layouts.master')

@section('content')
<div class="row">
  <div class="col-md-10 col-md-offset-1">
  		</br>


				  <fieldset>
					
					<legend class="col-md-8 col-md-offset-2">Course Details</legend>
					
					
					  <div class="col-md-8 col-md-offset-2">
					  	Course Code: {{$course->course_code}}
					  </div>
					
					  <div class="col-md-8 col-md-offset-2">
					  	Course Title: {{$course->course_title}}

					  </div>
					
					
					
				  </fieldset>
	</div>
</div>
@stop