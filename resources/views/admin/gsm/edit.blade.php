@extends('layout.app')


@section('content')


@include('components.breadcrumb',array('breadcrumb'=>$breadcrumb))


		<h2>Edit GSM Number</h2>
		<br />
		
		
		<div class="row">
			<div class="col-md-12">
				
				@include('components.errors')


				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title">
							Edit GSM number
						</div>
						
						<div class="panel-options">
							
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
						</div>
					</div>
					
					<div class="panel-body">
						

						
						{!! Form::model($gsm_number, array('action' => array('GsmController@update', $gsm_number->id), 'method' => 'PUT')) !!}
			
							<div class="form-group">
								{{ Form::label('gsm_number', 'Phone Number',['class'=>'col-sm-3 control-label']) }}
								<div class="col-sm-5">
									{{ Form::text('gsm_number', null,['placeholder'=>'Phone Number','class'=>'form-control']) }}
								</div>
							</div>
							
							
							<div class="form-group">
								{{ Form::label('is_test', 'Test Number',['class'=>'col-sm-3 control-label']) }}
								<div class="col-sm-5">
									{{
										Form::select('is_test', array('1' => 'Yes', '0' => 'No'),null,['class'=>'form-control'])
									}}
								</div>
							</div>
							
							
							
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-5">

									{{ Form::submit('Edit',null,['class'=>'btn btn-default']) }}
								</div>
							</div>

						{!! Form::close() !!}
						
					</div>
				
				</div>
			
			</div>
		</div>
		
@stop