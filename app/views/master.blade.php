<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="bootstrap.css">
		<link rel="stylesheet" href="custom.min.css">
		
		<script type="text/javascript" src="bootstrap.min.js"></script>
		<script type="text/javascript" src="custom.js"></script>
		<script type="text/javascript" src="jquery-1.10.2.min.js"></script>
	</head>
	<body>
		<div class="row">
		<div class="col-lg-offset-8 col-lg-2">Welcome Admin</div>
		<div class="col-lg-2"><a href="#">Sign Out</a></div>
	</div>
	<br>

	<br>
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="#">JUSTIFY</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
			  <ul class="nav navbar-nav">
				<li><a href="#">Profile <span class="sr-only">(current)</span></a></li>
				 <li class="dropdown active">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">Semester <span class="caret"></span></a>
				  <ul class="dropdown-menu" role="menu">
					<li><a href="#">Create New</a></li>
					<li><a href="#">All</a></li>					
				  </ul>
				  </li>
				  <li class="dropdown active">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">Course <span class="caret"></span></a>
				  <ul class="dropdown-menu" role="menu">
					<li><a href="#">Create New</a></li>
					<li><a href="#">All</a></li>					
				  </ul>
				  </li>
				  <li class="dropdown active">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">Teacher <span class="caret"></span></a>
				  <ul class="dropdown-menu" role="menu">
					<li><a href="#">Add New</a></li>
					<li><a href="#">All</a></li>					
				  </ul>
				  </li>
			  </ul>
			  <form class="navbar-form navbar-left" role="search">
				<div class="form-group">
				  <input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default">Search</button>
			  </form>
			</div>
		  </div>
		</nav> 
		
		@yield('content')
		
	</body>
</html>