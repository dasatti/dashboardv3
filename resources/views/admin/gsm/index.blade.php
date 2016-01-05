@extends('layout.app')


<!--  Top css/scripts include section  -->
@section('includes-top')
	{{ Html::script('public/assets/js/lmdashboard/common.datatables.js') }}
@stop


<!--  This section will contain javascript which will go to head  -->
@section('scripts-top')

<script type="text/javascript">
	jQuery( document ).ready( function( $ ) {

		init_datatable("table-phones");

	} );
</script>

@stop


<!-- Html content section -->
@section('content')

@include('components.breadcrumb',array('breadcrumb'=>$breadcrumb))

<h2>Manage GSM Numbers</h2>


		

		<table class="table table-bordered datatable" id="table-phones">
			<thead>
				<tr class="replace-inputs">
					<th>GSM Number</th>
					<th>Assigned</th>
					<th>Test</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>

			@foreach($phones as $phone)
				<tr class="">
					<td>{{ $phone['gsm_number'] }}</td>
					<td>#Will be calculated#</td>
					<td>{{ $phone['is_test'] }}</td>
					<td class="center">
						
						

						{!! Form::open([
				            'method' => 'DELETE',
				            'action' => ['GsmController@destroy', $phone['id']]
				        ]) !!}
						<a href="{{url('gsm/edit',$phone->id)}}" class="btn btn-default btn-sm btn-icon icon-left">
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
					<th>GSM Number</th>
					<th>Assigned</th>
					<th>Test</th>
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