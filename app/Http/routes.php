<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/	

Route::group(['middleware' => 'web'], function () {
  Route::auth();
	Route::get('/', function ()    {	
		if(Auth::user()){
			if( Auth::user()->account_type=='admin'){
				$breadcrumb=array(array('label'=>'Dashboard','url'=>'/dashboard','class'=>'entypo-home'));
				return view('index')->with('breadcrumb',$breadcrumb);
			}else if( Auth::user()->account_type =='client'){
				$breadcrumb=array(array('label'=>'Dashboard Client','url'=>'/dashboard','class'=>'entypo-home'));
				return view('client.dashboard')->with('breadcrumb',$breadcrumb);
			}
		}else{
			return view('auth/login');	
		}
    });  
    Route::get('/home', 'HomeController@index');
	Route::get('/dashboard','DashboardController@index');
	Route::get('/dashboard/leads/{from}/{to}','DashboardController@leads');
	/**
	* @Gsm modules routes
	*
	*/
	Route::get('/gsm','GsmController@index');
	Route::get('/gsm/add','GsmController@add');
	Route::post('/gsm/store','GsmController@store');
	Route::get('/gsm/edit/{id}','GsmController@edit');
	Route::put('/gsm/update/{id}','GsmController@update');
	Route::delete('/gsm/delete/{id}','GsmController@destroy');
	/**
	* @Clients modules routes
	*
	*/
	Route::get('/clients','ClientsController@index');
	Route::get('/clients/add','ClientsController@add');
	Route::post('/clients/store','ClientsController@store');
	Route::get('/clients/edit/{id}','ClientsController@edit');
	Route::put('/clients/update/{id}','ClientsController@update');
	Route::delete('/clients/delete/{id}','ClientsController@destroy');
	/**
	* @Campaigns modules routes
	*
	*/
	Route::get('/campaigns','CampaignsController@index');
	Route::get('/campaigns/add','CampaignsController@add');
	Route::post('/campaigns/store','CampaignsController@store');
	Route::get('/campaigns/edit/{id}','CampaignsController@edit');
	Route::put('/campaigns/update/{id}','CampaignsController@update');
	Route::delete('/campaigns/delete/{id}','CampaignsController@destroy');
	
	
	Route::get('/api','ApiController@index');
	Route::get('/api/add','ApiController@create');
	Route::get('/calls','CallsController@index');
	Route::get('/calls/{from}/{to}','CallsController@calls');
	Route::get('/emails','EmailsController@index');
	Route::get('/sms','SmsController@index');
	Route::get('/roi','RoiController@index');// For clients
	
	Route::get('/service/leads','ServicesController@leads');

});
