@extends('layout.app')


@section('content')


@include('components.breadcrumb',array('breadcrumb'=>$breadcrumb))


		<h2>Add GSM Number</h2>
		<br />
		
		
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title">
							Add new GSM number
						</div>
						
						<div class="panel-options">
							
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
						</div>
					</div>
					
					<div class="panel-body">
						

						{!! Form::open(
							array('url'=>'gsm/create', 'class'=>'form-horizontal','role'=>'form'))
						 !!}
			
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

									{{ Form::submit('Add',null,['class'=>'btn btn-default']) }}
								</div>
							</div>

						{!! Form::close() !!}
						
					</div>
				
				</div>
			
			</div>
		</div>
		
@stop