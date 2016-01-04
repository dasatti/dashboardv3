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

<h2>Manage Emails</h2>


		

		<table class="table table-bordered datatable" id="table-emails">
			<thead>
				<tr class="replace-inputs">
					<th>Sr. No</th>
					<th>Client Name</th>
					<th>Campaign</th>
					<th>Name</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Message</th>
					<th>Date</th>
					<th>Mark as test</th>
				</tr>
			</thead>
			<tbody>

			@foreach($emails as $email)
				<tr class="">
					<td>{{ $email['s_no'] }}</td>
					<td>{{ $email['client_name'] }}</td>
					<td>{{ $email['campaign'] }}</td>
					<td>{{ $email['name'] }}</td>
					<td>{{ $email['email'] }}</td>
					<td>{{ $email['phone'] }}</td>
					<td>{{ $email['message'] }}</td>
					<td>{{ $email['date'] }}</td>
					<td align="center">{{ Form::checkbox('mark_as_test') }}</td>
				</tr>

			@endforeach
				
			</tbody>
			<tfoot>
				<tr>
					<th>Sr. No</th>
					<th>Client Name</th>
					<th>Campaign</th>
					<th>Name</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Message</th>
					<th>Date</th>
					<th>Mark as test</th>
				</tr>
			</tfoot>
		</table>


<br />
<h2 id="ch_title">Emails Breakup</h2>
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
  <div class="col-sm-4">
    <div class="tile-stats tile-aqua">
      <div class="icon"><i class="entypo-mail"></i></div>
      <div class="num" id="avg-per-month">42</div>
      <h3>AVERAGE PER MONTH</h3>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="tile-stats tile-green">
      <div class="icon"><i class="entypo-calendar"></i></div>
      <div class="num" id="most-active-day" style="text-transform: uppercase;">Monday</div>
      <h3>MOST ACTIVE DAY</h3>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="tile-stats tile-red">
      <div class="icon"><i class="entypo-clock"></i></div>
      <div class="num" id="peak-time">13 PM - 14 PM</div>
      <h3>PEAK TIME</h3>
    </div>
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