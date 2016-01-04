@extends('layout.app')


<!--  Top css/scripts include section  -->
@section('includes-top')
	{{ Html::script('public/assets/js/lmdashboard/common.datatables.js') }}
  	{{ Html::script('public/assets/js/raphael-min.js') }}
  	{{ Html::script('public/assets/js/morris.min.js') }}
@stop


<!--  This section will contain javascript which will go to head  -->
@section('scripts-top')

<script type="text/javascript">
	jQuery( document ).ready( function( $ ) {

		init_datatable("table-emails");

		var line_chart = Morris.Line({
	        element: 'emails-chart',
	        data: [
	          { y: '2006', a: 100, b: 90 },
	          { y: '2007', a: 75,  b: 65 },
	          { y: '2008', a: 50,  b: 40 },
	          { y: '2009', a: 75,  b: 65 },
	          { y: '2010', a: 50,  b: 40 },
	          { y: '2011', a: 75,  b: 65 },
	          { y: '2012', a: 100, b: 90 }
	        ],
	        xkey: 'y',
	        ykeys: ['a'],
	        labels: ['Calls'],
	        redraw: true,
            parseTime: false,
            lineColors: ['#242d3c']
	      });

	} );
</script>

@stop


<!-- Html content section -->
@section('content')

@include('components.breadcrumb',array('breadcrumb'=>$breadcrumb))

<div class="row">
  <div class="col-sm-6">
    <div class="tile-stats tile-green">
      <div class="icon"><i class="entypo-suitcase"></i></div>
      <h3>PROJECTD ROI</h3>
      <div class="num"><span id="projected_roi">0.00</span> <small style="font-size:18px;">AED</small></div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="tile-stats tile-aqua">
      <div class="icon"><i class="entypo-suitcase"></i></div>
      <h3>LIFETIME</h3>
      <div class="num"><span id="lifetime_roi">0.00</span> <small style="font-size:18px;">AED</small></div>
    </div>
  </div>
</div>

<br />
<h2 id="ch_title">Roi</h2>
<div class="row">
  <div class="col-sm-12">
    <div class="panel panel-primary" id="charts_env">
      <div class="panel-heading">
        <div class="panel-title">Chart</div>
      </div>
      <div class="panel-body">
        <div class="tab-content">
          <div id="showGraph">
            <div id="emails-chart" class="morrischart" style="height: 300px"></div>

        </div>
      </div>
    </div>
  </div>
</div>
</div>

<div class="row">
  <div class="viral-links">
    <h1>We Are Sure That You're Happy With Our Service</h1>
    <a class="green-btn" onclick="$('#modal-recommend').modal('show',{backdrop:false});" href="javascript:;"><i class="fa fa-thumbs-up"></i>Recommend Us</a>
    <a class="blue-btn" onclick="$('#modal-share-report').modal('show', {backdrop: 'static'});" href="javascript:;"><i class="fa fa-share-square"></i>Share This Report</a>
    </div>
</div>

@stop


<!--  Bottom css/scripts include section  -->
@section('includes-bottom')

	{{ Html::style('public/assets/js/datatables/datatables.css') }}
	{{ Html::style('public/assets/js/select2/select2-bootstrap.css') }}
	{{ Html::style('public/assets/js/select2/select2.css') }}


	{{ Html::script('public/assets/js/datatables/datatables.js') }}

@stop