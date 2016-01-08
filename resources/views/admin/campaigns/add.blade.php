@extends('layout.app')
@section('content')
@include('components.breadcrumb',array('breadcrumb'=>$breadcrumb))
@include('components.errors')
		<div class="col-md-12">
			<h2>Add Campaign</h2>
		</div>
		<div class="row">
			<div class="col-md-12">				
				<div class="panel panel-primary" data-collapsed="0">				
					<div class="panel-heading">
						<div class="panel-title">
							Add new campaign
						</div>						
						<div class="panel-options">							
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
						</div>
					</div>					
					<div class="panel-body">
						{!! Form::open(
							array('url'=>'campaigns/store', 'class'=>'form-horizontal','role'=>'form'))
						 !!}
						<div class="col-md-12">
							<div class="form-group">
								{{ Form::label('name', 'Campaign Name * :',['class'=>'col-sm-3 control-label']) }}
								<div class="col-sm-5">
									{{ Form::text('name', null,['placeholder'=>'','class'=>'form-control']) }}
								</div>
							</div>
							<div class="form-group">
								{{ Form::label('clients_id', 'Client * :',['class'=>'col-sm-3 control-label']) }}
								<div class="col-sm-5">
									{{
										Form::select('clients_id', $users,null,['class'=>'form-control'])
									}}
								</div>
							</div>
							<div class="form-group">
								{{ Form::label('gsm_number', 'GSM Number :',['class'=>'col-sm-3 control-label']) }}
								<div class="col-sm-5">
									{{
										Form::select('gsm_number',$gsmNumber,null,['class'=>'form-control'])
									}}
								</div>
							</div>
							<div class="form-group">
								{{ Form::label('unbounce_id', 'Unbounce ID * :',['class'=>'col-sm-3 control-label']) }}
								<div class="col-sm-5">
									{{ Form::text('unbounce_id', null,['placeholder'=>'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx','class'=>'form-control']) }}
								</div>
							</div>
							<div class="form-group">
								{{ Form::label('ga_view_id', 'Google Analytics View ID :',['class'=>'col-sm-3 control-label']) }}
								<div class="col-sm-5">
									{{ Form::text('ga_view_id', null,['placeholder'=>'','class'=>'form-control']) }}
								</div>
							</div>
							<div class="form-group">
								{{ Form::label('start_date', 'Campaign Start Date :',['class'=>'col-sm-3 control-label']) }}
								<div class="col-sm-5">
									<div class="input-group">
										{{ Form::text('start_date', null,['placeholder'=>'','class'=>'form-control datepicker','data-format'=>'yyyy-mm-dd hh:mm:ss']) }}
										<!--D, dd MM yyyy-->
										<div class="input-group-addon">
											<a href="#"><i class="entypo-calendar"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								{{ Form::label('end_date', 'Campaign End Date :',['class'=>'col-sm-3 control-label']) }}
								<div class="col-sm-5">
									<div class="input-group">
										{{ Form::text('end_date', null,['placeholder'=>'','class'=>'form-control datepicker','data-format'=>'yyyy-mm-dd hh:mm:ss']) }}
										
										<div class="input-group-addon">
											<a href="#"><i class="entypo-calendar"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								{{ Form::label('campaigns_login', 'Campaign Login * :',['class'=>'col-sm-3 control-label']) }}
								<div class="col-sm-5">
									<div class="input-group">
										<span class="input-group-addon"><i class="entypo-user"></i></span>
										{{ Form::text('campaigns_login', null,['placeholder'=>'','class'=>'form-control']) }}
									</div>
								</div>
							</div>
							<div class="form-group">
								{{ Form::label('campaigns_password', 'Password * :',['class'=>'col-sm-3 control-label']) }}
								<div class="col-sm-5">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-key"></i></span>
										{{ Form::text('campaigns_password', null,['placeholder'=>'','class'=>'form-control']) }}
									</div>
								</div>
							</div>
							<div class="form-group">
								{{ Form::label('noreply_email', 'No Reply Email :',['class'=>'col-sm-3 control-label']) }}
								<div class="col-sm-5">
									<div class="input-group">
										<span class="input-group-addon"><i class="entypo-mail"></i></span>
										{{ Form::text('noreply_email', null,['placeholder'=>'','class'=>'form-control']) }}
									</div>
								</div>
							</div>
							<div class="form-group">
								{{ Form::label('notify_email', 'Notify Email :',['class'=>'col-sm-3 control-label']) }}
								<div class="col-sm-5">
									<div class="input-group">
										<span class="input-group-addon"><i class="entypo-mail"></i></span>
										{{ Form::text('notify_email', null,['placeholder'=>'','class'=>'form-control']) }}
									</div>
								</div>
							</div>
							<div class="form-group">
								{{ Form::label('notify_phone', 'Notify Phone :',['class'=>'col-sm-3 control-label']) }}
								<div class="col-sm-5">
									{{ Form::text('notify_phone', null,['placeholder'=>'','class'=>'form-control']) }}
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-5">

									{{ Form::submit('Add',null,['class'=>'btn btn-default']) }}
								</div>
							</div>
						</div>
						{!! Form::close() !!}						
					</div>				
				</div>			
			</div>			
		</div>		
@stop
<!--  Bottom css/scripts include section  -->
@section('includes-bottom')
	{{ Html::script('public/assets/js/bootstrap-datepicker.js') }}
	{{ Html::script('public/assets/js/bootstrap-timepicker.min.js') }}
@stop