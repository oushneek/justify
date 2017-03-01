@extends('layouts.master')

@section('content')
<div class="row">
  <div class="col-md-10 col-md-offset-1">
  		</br>


				  <fieldset>
					
					<legend class="col-md-8 col-md-offset-2">Semester Details</legend>
					
					
					  <div class="col-md-8 col-md-offset-2">
					  	Semester: {{$semester->semester_name}}
					  </div>
					
					  <div class="col-md-8 col-md-offset-2">
					  	Year: {{$semester->year}}

					  </div>
					
					
					
				  </fieldset>
	</div>
</div>
@stop