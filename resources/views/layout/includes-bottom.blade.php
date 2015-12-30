	

	<!-- Bottom scripts (common) -->
	{{ Html::script('public/assets/js/gsap/TweenMax.min.js') }}
	{{ Html::script('public/assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js') }}
	{{ Html::script('public/assets/js/bootstrap.js') }}
	{{ Html::script('public/assets/js/joinable.js') }}
	{{ Html::script('public/assets/js/resizeable.js') }}
	{{ Html::script('public/assets/js/neon-api.js') }}
	{{ Html::script('public/assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js') }}





	<!-- JavaScripts initializations and stuff -->
	{{ Html::script('public/assets/js/neon-custom.js') }}


	<!-- local scripts of current page -->
	@yield('includes-bottom')