@extends('layout.app')


@section('content')


@include('components.breadcrumb',array('breadcrumb'=>$breadcrumb))


		<h2>Add Campaign</h2>
		<br />
		
		
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
							array('url'=>'campaigns/add', 'class'=>'form-horizontal','role'=>'form'))
						 !!}
						<div class="col-md-12">
							<div class="form-group">
								{{ Form::label('campaign_name', 'Campaign Name * :',['class'=>'col-sm-3 control-label']) }}
								<div class="col-sm-5">
									{{ Form::text('campaign_name', null,['placeholder'=>'','class'=>'form-control']) }}
								</div>
							</div>
							<div class="form-group">
								{{ Form::label('client_id', 'Client * :',['class'=>'col-sm-3 control-label']) }}
								<div class="col-sm-5">
									{{
										Form::select('client_id', array('1' => 'Client 1', '2' => 'Client 2'),null,['class'=>'form-control'])
									}}
								</div>
							</div>
							<div class="form-group">
								{{ Form::label('gsm_number', 'GSM Number :',['class'=>'col-sm-3 control-label']) }}
								<div class="col-sm-5">
									{{
										Form::select('gsm_number', array('11111111' => '11111111', '22222222' => '2222222'),null,['class'=>'form-control'])
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
										{{ Form::text('start_date', null,['placeholder'=>'','class'=>'form-control datepicker','data-format'=>'D, dd MM yyyy']) }}
										
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
										{{ Form::text('end_date', null,['placeholder'=>'','class'=>'form-control datepicker','data-format'=>'D, dd MM yyyy']) }}
										
										<div class="input-group-addon">
											<a href="#"><i class="entypo-calendar"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								{{ Form::label('login', 'Campaign Login * :',['class'=>'col-sm-3 control-label']) }}
								<div class="col-sm-5">
									<div class="input-group">
										<span class="input-group-addon"><i class="entypo-user"></i></span>
										{{ Form::text('login', null,['placeholder'=>'','class'=>'form-control']) }}
									</div>
								</div>
							</div>
							<div class="form-group">
								{{ Form::label('password', 'Password * :',['class'=>'col-sm-3 control-label']) }}
								<div class="col-sm-5">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-key"></i></span>
										{{ Form::text('password', null,['placeholder'=>'','class'=>'form-control']) }}
									</div>
								</div>
							</div>
							<div class="form-group">
								{{ Form::label('no_reply_email', 'No Reply Email :',['class'=>'col-sm-3 control-label']) }}
								<div class="col-sm-5">
									<div class="input-group">
										<span class="input-group-addon"><i class="entypo-mail"></i></span>
										{{ Form::text('no_reply_email', null,['placeholder'=>'','class'=>'form-control']) }}
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
