@extends('layout.app')


<!--  Top css/scripts include section  -->
@section('includes-top')
	{{ Html::script('public/assets/js/lmdashboard/common.datatables.js') }}
@stop


<!--  This section will contain javascript which will go to head  -->
@section('scripts-top')

<script type="text/javascript">
	jQuery( document ).ready( function( $ ) {

		init_datatable("table-api");

	} );
</script>

@stop


<!-- Html content section -->
@section('content')

@include('components.breadcrumb',array('breadcrumb'=>$breadcrumb))

<h2>Manage Authentication Keys</h2>


		

		<table class="table table-bordered datatable" id="table-api">
			<thead>
				<tr class="replace-inputs">
					<th>Company</th>
					<th>GSM Number</th>
					<th>Authentication Key</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>

			@foreach($keys as $key)
				<tr class="">
					<td>{{ $key['company'] }}</td>
					<td>{{ $key['gsm_number'] }}</td>
					<td>{{ $key['key'] }}</td>
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
					<th>Company</th>
					<th>GSM Number</th>
					<th>Authentication Key</th>
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