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
        element: 'line-chart-demo',
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
        ykeys: ['a', 'b'],
        labels: ['October 2013', 'November 2013'],
        redraw: true
      });



  } );

      


</script>
@stop

@section('content')

@include('components.breadcrumb',$breadcrumb)


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
          <div class="num" data-start="0" data-end="" data-postfix="" data-duration="1500" data-delay="600" id="total_calls">858</div>
          <h3>Calls</h3>
          <p>Lifetime Calls: <span id="total_lifetime_calls">1064</span></p>
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
            <div id="line-chart-demo" class="morrischart" style="height: 300px"></div>

        </div>
      </div>
    </div>
  </div>
</div>
</div>




@stop