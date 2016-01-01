@extends('layout.app')


<!--  Top css/scripts include section  -->
@section('includes-top')
	{{ Html::script('public/assets/js/lmdashboard/common.datatables.js') }}
@stop


<!--  This section will contain javascript which will go to head  -->
@section('scripts-top')

<script type="text/javascript">
	jQuery( document ).ready( function( $ ) {

		init_datatable("table-calls");

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




@stop


<!--  Bottom css/scripts include section  -->
@section('includes-bottom')

	{{ Html::style('public/assets/js/datatables/datatables.css') }}
	{{ Html::style('public/assets/js/select2/select2-bootstrap.css') }}
	{{ Html::style('public/assets/js/select2/select2.css') }}


	{{ Html::script('public/assets/js/datatables/datatables.js') }}

@stop