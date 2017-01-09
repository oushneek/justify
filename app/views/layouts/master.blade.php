<!DOCTYPE html>
<html>
	
	@include('includes.header')
	<body>
	@include('includes.menu')
		@yield('content')
	@include('includes.footer')
	</body>
</html>