@extends('layout.app')


@section('includes-top')
@parent
	{{ Html::script('public/assets/js/lmdashboard/common.datatables.js') }}
  	{{ Html::script('public/assets/js/raphael-min.js') }}
  	{{ Html::script('public/assets/js/morris.min.js') }}
@stop


@section('scripts-top')
@parent

<script type="text/javascript">
	jQuery( document ).ready( function( ) {

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
              
              $('.daterange').on('apply.daterangepicker', function(ev, picker) {
                var start_date = picker.startDate.format('YYYY-MM-DD');
                var end_date = picker.endDate.format('YYYY-MM-DD');
                //alert(start_date);
                getCalls(start_date,end_date);
              });

	} );
        
        
        function getCalls(start_date,end_date){
            var config = getConfig().config;
            $.ajax( {
                url: config.base_url+"calls/"+start_date+"/"+end_date,
                type: "GET",
                cache:"false",
                //data:{from:start_date,to:end_date},
                dataType: 'json',
                success: function(data){
//                   console.log(data);
                    $('#dt_status').html('');
                    var sno=0;
                    $.each(data, function(index,element){
                        sno++;
                        var ch = (element.test_data==1)?'checked':''
                        var mark = "<input type='checkbox' name='hide' value='"+element.id+"' title='Mark as test data' onClick='return toggleHide(this,"+element.id+");' "+ch+">";
                        var status = (element.status=='BUSY')?'SUCCESS':element.status;
                        $('#table-calls').dataTable().fnAddData([
                            sno,
                            element.callerid,
                            element.gsm_number,
                            element.call_start,
                            element.call_start,
                            status,
                            '<span class="badge badge-success">#new call#</span>',
                            mark
                        ]);
                    });
                },
                beforeSend: function(jqXHR,settings){
                    $('#table-calls').dataTable().fnClearTable();
                    $('#dt_status').show();
                }
              });
          }
        
        
</script>

@stop


@section('content')
<!-- Html content section -->

<div class="row">
<div class="col-sm-8">
  @include('components.breadcrumb',$breadcrumb)
</div>
<div class="col-sm-4">
  @include('components.daterangepicker')
</div>
</div>

<h2>Manage Calls</h2>


<div class="row">
    <div clas="col-sm-12" id=""></div>
</div>

		<table class="table table-bordered datatable" id="table-calls">
			<thead>
				<tr class="replace-inputs">
					<th>Sr. No</th>
					<th>Caller ID</th>
					<th>Gsm Number</th>
					<th>Call Start</th>
					<th>Call End</th>
					<th>Success</th>
					<th>New Call</th>
					<th>Mark as test</th>
				</tr>
			</thead>
			<tbody>
                        {{  $i=0?'':'' }}
			@foreach($calls as $call)
				<tr class="">
					<td>{{ ++$i }}</td>
					<td>{{ $call->callerid }}</td>
					<td>{{ $call->gsm_number }}</td>
					<td>{{ $call->call_start }}</td>
					<td>{{ $call->call_end }}</td>
					<td>{{ $call->status }}</td>
					<td align="center">
					<!-- if($call['new_call']=='1') -->
						<span class="badge badge-success">New/Not New</span>
					<!-- endif -->
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
</div>




@stop


@section('includes-bottom')
@parent
        <!--  Bottom css/scripts include section  -->

	{{ Html::style('public/assets/js/datatables/datatables.css') }}
	{{ Html::style('public/assets/js/select2/select2-bootstrap.css') }}
	{{ Html::style('public/assets/js/select2/select2.css') }}


	{{ Html::script('public/assets/js/datatables/datatables.js') }}

@stop