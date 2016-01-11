@extends('layout.app')
@section('content')
@include('components.breadcrumb',array('breadcrumb'=>$breadcrumb))
@include('components.errors')
		<div class="col-md-12">
        <h2>Edit Client</h2>
        </div>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-primary" data-collapsed="0">
					<div class="panel-heading">
						<div class="panel-title">
							Edit client
						</div>
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
						</div>
					</div>
					<div class="panel-body">
					{!! Form::model($user, array('action' => array('ClientsController@update', $user->id),  'class'=>'form-horizontal','role'=>'form' ,'method' => 'PUT')) 
                    !!}
                   
						<div class="col-md-8">
							<div class="form-group">
								{{ Form::label('full_name', 'Name *',['class'=>'col-sm-3 control-label']) }}
								<div class="col-sm-5">
									{{ Form::text('name', null,['placeholder'=>'Name','class'=>'form-control']) }}
								</div>
							</div>
							<div class="form-group">
								{{ Form::label('username', 'Username *',['class'=>'col-sm-3 control-label']) }}
								<div class="col-sm-5">
									<div class="input-group">
										<span class="input-group-addon"><i class="entypo-user"></i></span>
										{{ Form::text('username', null,['placeholder'=>'Username','class'=>'form-control']) }}
									</div>
								</div>
							</div>
							<div class="form-group">
								{{ Form::label('password', 'Password *',['class'=>'col-sm-3 control-label']) }}
								<div class="col-sm-5">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-key"></i></span> 
										{{ Form::text('password', $user['tmp_password'] ,['placeholder'=>'Password','class'=>'form-control']) }}
									</div>
								</div>
							</div>
							<div class="form-group">
								{{ Form::label('email', 'Email *',['class'=>'col-sm-3 control-label']) }}
								<div class="col-sm-5">
									<div class="input-group">
										<span class="input-group-addon"><i class="entypo-mail"></i></span>
										{{ Form::text('email', null,['placeholder'=>'Email','class'=>'form-control']) }}
									</div>
								</div>
							</div>
							<div class="form-group">
								{{ Form::label('company', 'Company',['class'=>'col-sm-3 control-label']) }}
								<div class="col-sm-5">
									{{ Form::text('company', null,['placeholder'=>'Company','class'=>'form-control']) }}
								</div>
							</div>
							<div class="form-group">
								{{ Form::label('phone_number', 'Phone number',['class'=>'col-sm-3 control-label']) }}
								<div class="col-sm-5">
									{{ Form::text('phone_number', null,['placeholder'=>'Phone number','class'=>'form-control']) }}
								</div>
							</div>
							<div class="form-group">
								{{ Form::label('address', 'Address',['class'=>'col-sm-3 control-label']) }}
								<div class="col-sm-5">
									{{ Form::text('address', null,['placeholder'=>'Address','class'=>'form-control']) }}
								</div>
							</div>
							<div class="form-group">
								{{ Form::label('account_type', 'Account Type *',['class'=>'col-sm-3 control-label']) }}
								<div class="col-sm-5">
									{{
										Form::select('account_type', array('admin' => 'Admin', 'client' => 'Client'),null,['class'=>'form-control'])
									}}
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-5">

									{{ Form::submit('Edit',null,['class'=>'btn btn-default']) }}
								</div>
							</div>
						</div>
						<!--<div class="col-md-4 ">
				            <div class="form-group">
								<label>Thumbnail: </label>

									<div class="fileinput fileinput-new" data-provides="fileinput"><input type="hidden">
										<div class="input-group">
											<div class="form-control uneditable-input" data-trigger="fileinput">
												<i class="glyphicon glyphicon-file fileinput-exists"></i>
												<span class="fileinput-filename"></span>
											</div>
											<span class="input-group-addon btn btn-default btn-file">
												<span class="fileinput-new">Select file</span>
												<span class="fileinput-exists">Change</span>
												<input type="file" name="thumbnail" id="thumbnail" onchange="" accept="image/*">
											</span>
											<a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
										</div>
									</div>


								<input type="hidden" name="change_thumb" id="change_thumb" value="0">
								<input type="hidden" name="cropped_thumbnail" id="cropped_thumbnail" value="">
								</div>
								<div id="thumbnail_img">
								    <div id="upload_error"></div>
								    <img src="{{ url('public/assets/images/thumbs/profile-default.png') }}" width="200" height="200" id="final_thumbnail">
								</div>
				        </div>-->
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
		
@stop