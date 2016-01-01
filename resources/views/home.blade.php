@extends('layout.app')

@section('content')

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
        <div class="panel-title">Last 30 day Leads History</div>
        <div class="panel-options" style="display:none;">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#area-chart" data-toggle="tab">Area Chart</a></li>
            <li class=""><a href="#line-chart" data-toggle="tab">Line Charts</a></li>
            <li class=""><a href="#pie-chart" data-toggle="tab">Pie Chart</a></li>
          </ul>
        </div>
      </div>
      <div class="panel-body">
        <div class="tab-content">
        <div id="showGraph">
          <div class="tab-pane active" id="area-chart">
            <div id="leads-chart" class="morrischart" style="height: 300px"></div>
          </div>
          </div>
          <div class="tab-pane" id="line-chart" style="display:none;">
            <div id="line-chart-demo" class="morrischart" style="height: 300px"></div>
          </div>
          <div class="tab-pane" id="pie-chart" style="display:none;">
            <div id="donut-chart-demo" class="morrischart" style="height: 300px;"></div>
          </div>

        </div>
      </div>
      <table class="table table-bordered table-responsive">
        <thead>
          <tr>
            <th width="50%" class="col-padding-1"> <div class="pull-left">
                <div class="h4 no-margin"></div>
                <small></small> </div>
              <span class="pull-right pageviews"></span> </th>
            <th width="50%" class="col-padding-1"> <div class="pull-left">
                <div class="h4 no-margin"></div>
                <small></small> </div>
              <span class="pull-right uniquevisitors"></span> </th>
          </tr>
        </thead>
      </table>
    </div>
  </div>
</div>

@endsection
