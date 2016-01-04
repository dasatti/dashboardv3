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

<h2>Manage ROi</h2>


		

		<table class="table table-bordered datatable" id="table-emails">
			<thead>
				<tr class="replace-inputs">
					<th>Sr. No</th>
					<th>Caller ID</th>
					<th>Phone Number</th>
					<th>Forward Number</th>
					
					<th>Date</th>
				</tr>
			</thead>
			<tbody>

			@foreach($roi as $ro)
				<tr class="">
					<td>{{ $ro['s_no'] }}</td>
					<td>{{ $ro['caller_id'] }}</td>
					<td>{{ $ro['phone_number'] }}</td>
					<td>{{ $ro['forward_number'] }}</td>
					
					<td>{{ $ro['date'] }}</td>
				</tr>

			@endforeach
				
			</tbody>
			<tfoot>
				<tr>
					<th>Sr. No</th>
					<th>Caller ID</th>
					<th>Phone Number</th>
					<th>Forward Number</th>
					
					<th>Date</th>
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