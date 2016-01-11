@extends('layout.app')


@section('includes-top')
  {{ Html::script('public/assets/js/raphael-min.js') }}
  {{ Html::script('public/assets/js/morris.min.js') }}
@stop


@section('scripts-top')
<script type="text/javascript">
  jQuery( document ).ready( function(  ) {


    // // Line Charts
      var line_chart_demo = $("#line-chart-demo");
    
      var line_chart = Morris.Line({
        element: 'leads-chart',
        data: [
          { y: '2006', a: 100, b: 90, c: 80 },
          { y: '2007', a: 75,  b: 65, c: 75 },
          { y: '2008', a: 50,  b: 40, c: 65 },
          { y: '2009', a: 75,  b: 65, c: 45 },
          { y: '2010', a: 50,  b: 40, c: 55 },
          { y: '2011', a: 75,  b: 65, c: 85 },
          { y: '2012', a: 100, b: 90, c: 90 }
        ],
        xkey: 'y',
        ykeys: ['a', 'b', 'c'],
        redraw: true,
        labels: ['Calls','Emails' ,'Leads' ],
        lineColors: ['#00a65a','#00c0ef' , '#f56954']
      });

      $('.daterange').on('apply.daterangepicker', function(ev, picker) {
        var start_date = picker.startDate.format('YYYY-MM-DD');
        var end_date = picker.endDate.format('YYYY-MM-DD');
        getCallsTotal(start_date,end_date);
      });




  } );

  function getCallsTotal(start_date,end_date){
    var config = getConfig().config;
    $.ajax( {
        url: config.base_url+"dashboard/leads/"+start_date+"/"+end_date,
        type: "GET",
        cache:"false",
        //data:{from:start_date,to:end_date},
        dataType: 'json',
        success: function(data){
          // console.log(data.calls);
               // $("#total_leads").text(data.total_leads);
               $("#total_calls").text(data.calls.total_calls);
               // $("#total_emails").text(data.total_emails);
               // $("#total_lifetime_leads").text(data.total_leads_lifetime);
               $("#total_lifetime_calls").text(data.calls.total_calls_lifetime);
               // $("#total_lifetime_emails").text(data.total_emails_lifetime);
        }
      });
  }    


</script>
@stop

@section('content')

<div class="row">
<div class="col-sm-8">
  @include('components.breadcrumb',$breadcrumb)
</div>
<div class="col-sm-4">
  @include('components.daterangepicker')
</div>
</div>

<div class="row">
      <div class="col-sm-4"> <a href="javascript:void(0)">
        <div class="tile-stats tile-red">
          <div class="icon"><i class="entypo-chart-bar"></i></div>
          <div class="num" data-start="0" data-end="" data-postfix="" data-duration="1500" data-delay="0" id="total_leads">669</div>
          <h3>Unique Leads</h3>
          <p>Lifetime Leads: <span id="total_lifetime_leads">770</span></p>
        </div>
        </a> </div>
      <div class="col-sm-4"> <a href="admin.php?act=managecalls">
        <div class="tile-stats tile-green">
          <div class="icon"><i class="entypo-phone"></i></div>
          <div class="num" data-start="0" data-end="" data-postfix="" data-duration="1500" data-delay="600" id="total_calls">0</div>
          <h3>Calls</h3>
          <p>Lifetime Calls: <span id="total_lifetime_calls">{{ $leads['calls']['total_calls_lifetime'] }}</span></p>
        </div>
        </a> </div>
      <div class="col-sm-4"> <a href="admin.php?act=manageemails">
        <div class="tile-stats tile-aqua">
          <div class="icon"><i class="entypo-mail"></i></div>
          <div class="num" data-start="0" data-end="" data-postfix="" data-duration="1500" data-delay="1200" id="total_emails">333</div>
          <h3>Emails</h3>
          <p>Lifetime Emails: <span id="total_lifetime_emails">370</span></p>
        </div>
        </a> </div>
</div>

<br />
<div class="row">
  <div class="col-sm-12">
    <div class="panel panel-primary" id="charts_env">
      <div class="panel-heading">
        <div class="panel-title">Leads History</div>
      </div>
      <div class="panel-body">
        <div class="tab-content">
          <div id="showGraph">
            <div id="leads-chart" class="morrischart" style="height: 300px"></div>

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