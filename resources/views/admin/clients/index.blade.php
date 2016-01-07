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

			@foreach($users as $user)
				<tr class="">
					<td>{{ $user['name'] }}</td>
					<td>@if($user['phone_number'] != ''){{ $user['phone_number'] }} @else {{'---'}} @endif</td>
					<td>{{ $user['email'] }}</td>
					<td>{{ $user['username'] }}</td>
					<td>{{ $user['account_type'] }}</td>
					<td class="center">
                    {!! Form::open([
				            'method' => 'DELETE',
				            'action' => ['ClientsController@destroy', $user['id']]
				        ]) !!}
						<a href="{{url('clients/edit',$user->id)}}" class="btn btn-default btn-sm btn-icon icon-left">
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