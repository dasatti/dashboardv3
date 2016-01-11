<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Localmedia Dashboard Admin" />
	<meta name="author" content="" />

	<link rel="icon" href="{{ URL::asset('public/assets/images/favicon.ico') }}">

	<title>Localmedia Dashboard</title>

	@include('layout.includes-top')


	


</head>
<body class="page-body  page-fade" data-url="http://neon.dev">
@yield('scripts-top')
<div class="page-container">
	
	<div class="sidebar-menu">

		@include('layout.sidebar')

	</div>

	<div class="main-content">
				
		<div class="row">
		
			@include('layout.header')
		
		</div>
		
		<hr />
		

		@yield('content')
		

		
		@include('layout.footer')
	</div>
	
</div>

	@yield('scripts-bottom')
	
	@include('layout.includes-bottom')

</body>
</html>