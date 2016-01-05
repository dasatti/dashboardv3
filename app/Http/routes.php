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

//    Route::get('/home', function(){
	//		return view('index');
	//});
/*Route::get('client/calls', ['middleware' => 'auth', function(){
    // Only authenticated users may enter...
		Route::get('/client/calls','CallsController@indexClient');// For clients
		echo  Auth::user()->account_type;
}]);*/
	

Route::group(['middleware' => 'web'], function () {
  Route::auth();	
		//echo  Auth::user()->name;
		//echo  'sdsd'; exit;
	Route::get('/', function ()    {
	
	if(Auth::user()){
		
		//echo  '<pre>';print_r(Auth::user());
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
	Route::get('/gsm','GsmController@index');
	Route::get('/gsm/add','GsmController@add');
	Route::post('/gsm/store','GsmController@store');
	Route::get('/gsm/edit/{id}','GsmController@edit');
	Route::put('/gsm/update/{id}','GsmController@update');
	Route::delete('/gsm/delete/{id}','GsmController@delete');
	Route::get('/clients','ClientsController@index');
	Route::get('/clients/add','ClientsController@create');
	Route::get('/campaigns','CampaignsController@index');
	Route::get('/campaigns/add','CampaignsController@create');
	Route::get('/api','ApiController@index');
	Route::get('/api/add','ApiController@create');
	Route::get('/calls','CallsController@index');
	Route::get('/emails','EmailsController@index');
	Route::get('/sms','SmsController@index');
	Route::get('/roi','RoiController@index');// For clients
	

});
