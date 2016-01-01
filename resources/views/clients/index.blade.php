@extends('layout.app')


<!--  Top css/scripts include section  -->
@section('includes-top')
	{{ Html::script('public/assets/js/lmdashboard/common.datatables.js') }}
@stop


<!--  This section will contain javascript which will go to head  -->
@section('scripts-top')

<script type="text/javascript">
	jQuery( document ).ready( function( $ ) {

		init_datatable("table-clients");

	} );
</script>

@stop


<!-- Html content section -->
@section('content')

@include('components.breadcrumb',array('breadcrumb'=>$breadcrumb))

<h2>Manage Clients</h2>


		

		<table class="table table-bordered datatable" id="table-clients">
			<thead>
				<tr class="replace-inputs">
					<th>Name</th>
					<th>Phone Number</th>
					<th>Email</th>
					<th>Username</th>
					<th>Type</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>

			@foreach($clients as $client)
				<tr class="">
					<td>{{ $client['name'] }}</td>
					<td>{{ $client['phone_number'] }}</td>
					<td>{{ $client['email'] }}</td>
					<td>{{ $client['username'] }}</td>
					<td>{{ $client['type'] }}</td>
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
					<th>Phone Number</th>
					<th>Email</th>
					<th>Username</th>
					<th>Type</th>
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


	{{ Html::script('public/assets/js/datatables/datatables.js') }}

@stop