@extends('layout.app')


<!--  Top css/scripts include section  -->
@section('includes-top')
	{{ Html::script('public/assets/js/lmdashboard/common.datatables.js') }}
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

<h2>Manage Campaigns</h2>


		

		<table class="table table-bordered datatable" id="table-campaigns">
			<thead>
				<tr class="replace-inputs">
					<th>Name</th>
					<th>Client Name</th>
					<th>GSM Number</th>
					<th>Unbounce ID</th>
					<th>Start Date</th>
					<th>End Date</th>
					<th>Status</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>

			@foreach($campaigns as $campaign)
				<tr class="">
					<td>{{ $campaign['name'] }}</td>
					<td>{{ $campaign['client_name'] }}</td>
					<td>{{ $campaign['gsm_number'] }}</td>
					<td>{{ $campaign['unbounce_id'] }}</td>
					<td>{{ $campaign['start_date'] }}</td>
					<td>{{ $campaign['end_date'] }}</td>
					<td>{{ $campaign['status'] }}</td>
					<td class="center">
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
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
					<th>Status</th>
					<th>Actions</th>
				</tr>
			</tfoot>
		</table>




@stop


<!--  Bottom css/scripts include section  -->
@section('includes-bottom')

	{{ Html::style('public/assets/js/datatables/datatables.css') }}
	{{ Html::style('public/assets/js/select2/select2-bootstrap.css') }}
	{{ Html::style('public/assets/js/select2/select2.css') }}
	{{ Html::style('public/assets/js/datatables/Buttons-1.0.3/css/buttons.dataTables.min.css') }}


	{{ Html::script('public/assets/js/datatables/datatables.js') }}
	{{ Html::script('public/assets/js/datatables/Buttons-1.0.3/js/dataTables.buttons.min.js') }}

@stop