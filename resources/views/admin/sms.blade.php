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
	        element: 'sms-chart',
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
	        labels: ['Sms'],
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

<h2>Manage SMS</h2>


		

		<table class="table table-bordered datatable" id="table-emails">
			<thead>
				<tr class="replace-inputs">
					<th>Sr. No</th>
					<th>Caller ID</th>
					<th>Phone Number</th>
					<th>Forward Number</th>
					<th>SMS</th>
					<th>Date</th>
				</tr>
			</thead>
			<tbody>

			@foreach($sms as $sms)
				<tr class="">
					<td>{{ $sms['s_no'] }}</td>
					<td>{{ $sms['caller_id'] }}</td>
					<td>{{ $sms['phone_number'] }}</td>
					<td>{{ $sms['forward_number'] }}</td>
					<td>{{ $sms['sms'] }}</td>
					<td>{{ $sms['date'] }}</td>
				</tr>

			@endforeach
				
			</tbody>
			<tfoot>
				<tr>
					<th>Sr. No</th>
					<th>Caller ID</th>
					<th>Phone Number</th>
					<th>Forward Number</th>
					<th>SMS</th>
					<th>Date</th>
				</tr>
			</tfoot>
		</table>


<h2 id="ch_title">SMS Breakup</h2>
<br />
<div class="row">
  <div class="col-sm-12">
    <div class="panel panel-primary" id="charts_env">
      <div class="panel-heading">
        <div class="panel-title">Chart</div>
      </div>
      <div class="panel-body">
        <div class="tab-content">
          <div id="showGraph">
            <div id="sms-chart" class="morrischart" style="height: 300px"></div>

        </div>
      </div>
    </div>
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