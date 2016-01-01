@extends('layout.app')


@section('content')


@include('components.breadcrumb',array('breadcrumb'=>$breadcrumb))


		<h2>Add Api Key</h2>
		<br />
		
		
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title">
							Add new Api Key
						</div>
						
						<div class="panel-options">
							
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
						</div>
					</div>
					
					<div class="panel-body">
						

						{!! Form::open(
							array('url'=>'api/add', 'class'=>'form-horizontal','role'=>'form'))
						 !!}
			
							<div class="form-group">
								{{ Form::label('company_name', 'Company Name',['class'=>'col-sm-3 control-label']) }}
								<div class="col-sm-5">
									{{ Form::text('company_name', null,['placeholder'=>'Company name','class'=>'form-control']) }}
								</div>
							</div>							
							<div class="form-group">
								{{ Form::label('gsm_number', 'Gsm Number',['class'=>'col-sm-3 control-label']) }}
								<div class="col-sm-5">
									{{ Form::text('gsm_number', null,['placeholder'=>'Gsm Number','class'=>'form-control']) }}
								</div>
							</div>
							<div class="form-group">
								{{ Form::label('key', 'Authentication Key',['class'=>'col-sm-3 control-label']) }}
								<div class="col-sm-5">
									{{ Form::text('key', null,['placeholder'=>'02405312112c2c45ab83b8b7bea15080','class'=>'form-control'], 'disabled') }}
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