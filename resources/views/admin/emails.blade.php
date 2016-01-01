@extends('layout.app')


<!--  Top css/scripts include section  -->
@section('includes-top')
	{{ Html::script('public/assets/js/lmdashboard/common.datatables.js') }}
@stop


<!--  This section will contain javascript which will go to head  -->
@section('scripts-top')

<script type="text/javascript">
	jQuery( document ).ready( function( $ ) {

		init_datatable("table-emails");

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




@stop


<!--  Bottom css/scripts include section  -->
@section('includes-bottom')

	{{ Html::style('public/assets/js/datatables/datatables.css') }}
	{{ Html::style('public/assets/js/select2/select2-bootstrap.css') }}
	{{ Html::style('public/assets/js/select2/select2.css') }}


	{{ Html::script('public/assets/js/datatables/datatables.js') }}

@stop