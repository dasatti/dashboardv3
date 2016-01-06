<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<link rel="icon" href="{{ URL::asset('public/assets/images/favicon.ico') }}">

	<title>LM Dashboard Login</title>

	{{ Html::style('public/assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css') }}
	{{ Html::style('public/assets/css/font-icons/entypo/css/entypo.css') }}
	<link type="text/css" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	{{ Html::style('public/assets/css/bootstrap.css') }}
	{{ Html::style('public/assets/css/neon-core.css') }}
	{{ Html::style('public/assets/css/neon-theme.css') }}
	{{ Html::style('public/assets/css/neon-forms.css') }}
	{{ Html::style('public/assets/css/custom.css') }}

	{{ Html::script('public/assets/js/jquery-1.11.3.min.js') }}

	<!--[if lt IE 9]><script src="{{ Html::script('public/assets/js/ie8-responsive-file-warning.js') }}"></script><![endif]-->
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="page-body login-page login-form-fall" data-url="http://neon.dev">
			

    @yield('content')

	<!-- Bottom scripts (common) -->
	{{ Html::script('public/assets/js/gsap/TweenMax.min.js') }}
	{{ Html::script('public/assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js') }}
	{{ Html::script('public/assets/js/bootstrap.js') }}
	{{ Html::script('public/assets/js/joinable.js') }}
	{{ Html::script('public/assets/js/resizeable.js') }}
	{{ Html::script('public/assets/js/neon-api.js') }}
	{{ Html::script('public/assets/js/jquery.validate.min.js') }}
	{{ Html::script('public/assets/js/neon-login.js') }}

	<!-- JavaScripts initializations and stuff -->
	{{ Html::script('public/assets/js/neon-custom.js') }}

	<!-- Demo Settings -->
	{{ Html::script('public/assets/js/neon-demo.js') }}

</body>
</html>