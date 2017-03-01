@extends('layouts.master')

@section('content')
<div class="row">
  <div class="col-md-10 col-md-offset-1">
  		</br>


  		@include('includes.alert')
  		{{ Form::model($semester,['route' => ['semesters.update',$course->id], 'method' => 'put', 'class' => 'form-horizontal','files' => false]) }}
				  <fieldset>
					
					<legend class="col-md-8 col-md-offset-2">Edit Semester</legend>
					
					
					<div class="form-group">
			  			{{ Form::label('semester_name', 'Semester', array('class' => 'col-lg-2 col-lg-offset-1 control-label')) }}

			  			<div class="col-lg-6">
			  				{{Form::select('semester_name', array('Spring' => 'Spring', 'Summer' => 'Summer', 'Fall'=>'Fall'),array('class' => 'col-lg-6  form-control'))}}
			  			</div>
					</div>


					<div class="form-group">
			  			{{ Form::label('year', 'Year', array('class' => 'col-lg-2 col-lg-offset-1 control-label')) }}
			  			<div class="col-lg-6">
			  				{{Form::number('year', null, array('class'=> 'form-control','placeholder'=> 'Year'))}}
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