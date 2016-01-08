@section('scripts-top')
@parent
<script type="text/javascript">
	
	$(function() {
	    $('.daterange').daterangepicker();
	});
</script>
@stop
  
<div class="daterange daterange-inline add-ranges" data-format="MMMM D, YYYY" 
			data-start-date="October 22, 2015" data-end-date="November 19, 2015">
	<i class="entypo-calendar"></i>
	<span>October 22, 2015 - November 19, 2015</span>
</div>


@section('includes-bottom')
@parent
	<!-- date range picker -->
  {{ Html::style('public/assets/js/daterangepicker/daterangepicker-bs3.css') }}
  {{ Html::script('public/assets/js/moment.min.js') }}
  {{ Html::script('public/assets/js/daterangepicker/daterangepicker.js') }}
@stop