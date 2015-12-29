<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<link rel="icon" href="{{ URL::asset('public/assets/images/favicon.ico') }}">

	<title>Localmedia Dashboard</title>

	<link rel="stylesheet" href="{{ URL::asset('public/assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('public/assets/css/font-icons/entypo/css/entypo.css') }}">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic') }}">
	<link rel="stylesheet" href="{{ URL::asset('public/assets/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('public/assets/css/neon-core.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('public/assets/css/neon-theme.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('public/assets/css/neon-forms.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('public/assets/css/custom.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('public/assets/css/font-icons/font-awesome/css/font-awesome.css') }}">

	<script src="{{ URL::asset('public/assets/js/jquery-1.11.3.min.js') }}"></script>

	<!--[if lt IE 9]><script src="{{ URL::asset('public/assets/js/ie8-responsive-file-warning.js') }}"></script><![endif]-->
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="page-body  page-fade" data-url="http://neon.dev">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	
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


	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="{{ URL::asset('public/assets/js/jvectormap/jquery-jvectormap-1.2.2.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('public/assets/js/rickshaw/rickshaw.min.css') }}">

	<!-- Bottom scripts (common) -->
	<script src="{{ URL::asset('public/assets/js/gsap/TweenMax.min.js') }}"></script>
	<script src="{{ URL::asset('public/assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js') }}"></script>
	<script src="{{ URL::asset('public/assets/js/bootstrap.js') }}"></script>
	<script src="{{ URL::asset('public/assets/js/joinable.js') }}"></script>
	<script src="{{ URL::asset('public/assets/js/resizeable.js') }}"></script>
	<script src="{{ URL::asset('public/assets/js/neon-api.js') }}"></script>
	<script src="{{ URL::asset('public/assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>


	<!-- Imported scripts on this page -->
	<script src="{{ URL::asset('public/assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js') }}"></script>
	<script src="{{ URL::asset('public/assets/js/jquery.sparkline.min.js') }}"></script>
	<script src="{{ URL::asset('public/assets/js/rickshaw/vendor/d3.v3.js') }}"></script>
	<script src="{{ URL::asset('public/assets/js/rickshaw/rickshaw.min.js') }}"></script>
	<script src="{{ URL::asset('public/assets/js/raphael-min.js') }}"></script>
	<script src="{{ URL::asset('public/assets/js/morris.min.js') }}"></script>
	<script src="{{ URL::asset('public/assets/js/toastr.js') }}"></script>
	<script src="{{ URL::asset('public/assets/js/neon-chat.js') }}"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="{{ URL::asset('public/assets/js/neon-custom.js') }}"></script>


	<!-- Demo Settings -->
	<script src="{{ URL::asset('public/assets/js/neon-demo.js') }}"></script>

</body>
</html>