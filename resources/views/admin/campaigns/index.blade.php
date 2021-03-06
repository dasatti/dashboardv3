@extends('layout.app')


<!--  Top css/scripts include section  -->
@section('includes-top')
	{{ Html::style('public/assets/js/datatables/datatables.css') }}
	{{ Html::style('public/assets/js/select2/select2-bootstrap.css') }}
	{{ Html::style('public/assets/js/select2/select2.css') }}
	{{ Html::style('public/assets/js/datatables/Buttons-1.0.3/css/buttons.dataTables.min.css') }}
	
@stop


<!--  This section will contain javascript which will go to head  -->
@section('scripts-top')

<script type="text/javascript">
	jQuery( document ).ready( function( $ ) {

		init_datatable("table-campaigns");

	} );
</script>

@stop


<!-- Html content section -->
@section('content')

@include('components.breadcrumb',array('breadcrumb'=>$breadcrumb))
@include('components.filter')
<div class="col-sm-12">
<h2>Manage Campaigns</h2></div>
		<table class="table table-bordered datatable" id="table-campaigns">
			<thead>
				<tr class="replace-inputs">
					<th>Name</th>
					<th>Client Name</th>
					<th>GSM Number</th>
					<th>Unbounce ID</th>
					<th>Start Date</th>
					<th>End Date</th>
					
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>

			@foreach($campaigns as $campaign)
				<tr class="">
					<td>{{ $campaign['name'] }}</td>
					<td>{{ $campaign['user']['username'] }}</td>
					<td>{{ $campaign['gsm_number'] }}</td>
					<td>{{ $campaign['unbounce_id'] }}</td>
					<td>{{ $campaign['start_date'] }}</td>
					<td>{{ $campaign['end_date'] }}</td>
					
					<td class="center">
						 {!! Form::open([
				            'method' => 'DELETE',
				            'action' => ['CampaignsController@destroy', $campaign['id']]
				        ]) !!}
						<a href="{{url('campaigns/edit',$campaign->id)}}" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						 {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                         {!! Form::close() !!}
					</td>
				</tr>

			@endforeach
				
			</tbody>
			<tfoot>
				<tr>
					<th>Name</th>
					<th>Client Name</th>
					<th>GSM Number</th>
					<th>Unbounce ID</th>
					<th>Start Date</th>
					<th>End Date</th>
					
					<th>Actions</th>
				</tr>
			</tfoot>
		</table>




@stop


<!--  Bottom css/scripts include section  -->
@section('includes-bottom')


{{ Html::script('public/assets/js/lmdashboard/common.datatables.js') }}

	{{ Html::script('public/assets/js/datatables/datatables.js') }}
	{{ Html::script('public/assets/js/datatables/Buttons-1.0.3/js/dataTables.buttons.min.js') }}

@stop