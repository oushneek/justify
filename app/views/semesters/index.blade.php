@extends('layouts.master')@extends('layouts.master')

@section('content')

<div class="row">
  <div class="col-md-10 col-md-offset-1">
  </br>
  @include('includes.alert')
  			<legend class="col-md-12">All Semesters</legend>
  			@if(count($semesters))
  			<table class="display table table-bordered table-striped" >
  				<thead>
  					<tr>
  						<th>Semester</th>
  						<th>Year</th>
  						<th>Created at</th>
  						<th>Update at</th>
  						<th class="text-center">Actions</th>
  					</tr>
  				</thead>
  				<tbody>
  					@foreach($semesters as $semester)
  					<tr>
  						<td><a href="{{URL::route('semester.show',array('id'=>$semester->id))}}">{{$semester->semester_name}}</a></td>
  						<td><a href="{{URL::route('semester.show',array('id'=>$semester->id))}}">{{$semester->year}}</a></td>
  						<td>{{$semester->created_at->toDayDateTimeString()}}</td>
  						<td>{{$semester->updated_at->toDayDateTimeString()}}</td>
  						<td class="text-center">
                <a class="btn btn-xs btn-success" href="{{URL::route('semester.edit',array('id'=>$semester->id))}}">Edit</a>
  							{{Form::open(array('route'=>array('semester.destroy',$semester->id),'method'=>'delete'))}}
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