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

		init_datatable("table-calls");

		var line_chart = Morris.Line({
	        element: 'calls-chart',
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

<h2>Manage Calls</h2>


		

		<table class="table table-bordered datatable" id="table-calls">
			<thead>
				<tr class="replace-inputs">
					<th>Sr. No</th>
					<th>Phone Number</th>
					<th>Client Number</th>
					<th>Date</th>
					<th>Time</th>
					<th>Success</th>
					<th>New Call</th>
					<th>Mark as test</th>
				</tr>
			</thead>
			<tbody>

			@foreach($calls as $call)
				<tr class="">
					<td>{{ $call['s_no'] }}</td>
					<td>{{ $call['phone_number'] }}</td>
					<td>{{ $call['client_number'] }}</td>
					<td>{{ $call['date'] }}</td>
					<td>{{ $call['time'] }}</td>
					<td>{{ $call['success'] }}</td>
					<td align="center">
					@if($call['new_call']=='1')
						<span class="badge badge-success">New</span>
					@endif
					</td>
					<td align="center">{{ Form::checkbox('mark_as_test') }}</td>
				</tr>

			@endforeach
				
			</tbody>
			<tfoot>
				<tr>
					<th>Sr. No</th>
					<th>Phone Number</th>
					<th>Client Number</th>
					<th>Date</th>
					<th>Time</th>
					<th>Success</th>
					<th>New Call</th>
					<th>Mark as test</th>
				</tr>
			</tfoot>
		</table>



<br />
<h2 id="ch_title">Calls Breakup</h2>
<div class="row">
  <div class="col-sm-12">
    <div class="panel panel-primary" id="charts_env">
      <div class="panel-heading">
        <div class="panel-title">Chart</div>
      </div>
      <div class="panel-body">
        <div class="tab-content">
          <div id="showGraph">
            <div id="calls-chart" class="morrischart" style="height: 300px"></div>

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
<!--<div class="row">
    <div class="col-sm-4">
        <div class="tile-stats tile-aqua">
            <div class="icon"><i class="entypo-clock"></i></div>
            <div class="num" id="avg-call-time">5.00 Sec</div>
            <h3>AVERAGE CALL TIME</h3>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="tile-stats tile-green">
            <div class="icon"><i class="entypo-calendar"></i></div>
            <div class="num" id="most-active-day" style="text-transform: uppercase;">Wednesday</div>
            <h3>MOST ACTIVE DAY</h3>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="tile-stats tile-red">
            <div class="icon"><i class="entypo-phone"></i></div>
            <div class="num">0</div>
            <h3>MISSED CALLS</h3>
        </div>
    </div>
</div>-->




@stop


<!--  Bottom css/scripts include section  -->
@section('includes-bottom')

	{{ Html::style('public/assets/js/datatables/datatables.css') }}
	{{ Html::style('public/assets/js/select2/select2-bootstrap.css') }}
	{{ Html::style('public/assets/js/select2/select2.css') }}


	{{ Html::script('public/assets/js/datatables/datatables.js') }}

@stop