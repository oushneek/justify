@extends('layouts.master')

@section('content')

<div class="row">
  <div class="col-md-10 col-md-offset-1">
  </br>
  @include('includes.alert')
  			<legend class="col-md-12">All Courses</legend>
  			@if(count($courses))
  			<table class="display table table-bordered table-striped" >
  				<thead>
  					<tr>
  						<th>Course Code</th>
  						<th>Course Title</th>
  						<th>Created at</th>
  						<th>Update at</th>
  						<th class="text-center">Actions</th>
  					</tr>
  				</thead>
  				<tbody>
  					@foreach($courses as $course)
  					<tr>
  						<td><a href="{{URL::route('course.show',array('id'=>$course->id))}}">{{$course->course_code}}</a></td>
  						<td><a href="{{URL::route('course.show',array('id'=>$course->id))}}">{{$course->course_title}}</a></td>
  						<td>{{$course->created_at->toDayDateTimeString()}}</td>
  						<td>{{$course->updated_at->toDayDateTimeString()}}</td>
  						<td class="text-center">
                <a class="btn btn-xs btn-success" href="{{URL::route('course.edit',array('id'=>$course->id))}}">Edit</a>
  							{{Form::open(array('route'=>array('course.destroy',$course->id),'method'=>'delete'))}}
  							{{Form::submit('Delete',array('class'=>'btn btn-xs btn-danger'))}}
  							{{Form::close()}}
  						</td>
  					</tr>
  					@endforeach
  				</tbody>
  			</table>
  			@else
  				<h1>No Data Found....</h1>
  			@endif

  		
	</div>
</div>
@stop