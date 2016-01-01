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

Route::get('/', function () {

	

	//if(Auth::user()){
	$breadcrumb=array(array('label'=>'Dashboard','url'=>'/','class'=>'entypo-home'));
    return view('index')->with('breadcrumb',$breadcrumb);
	//}else{
		//return view('auth/login');
	//}
});



Route::get('/gsm','GsmController@index');
Route::get('/gsm/add','GsmController@create');

Route::get('/clients','ClientsController@index');
Route::get('/clients/add','ClientsController@create');

Route::get('/calls','CallsController@index');


    Route::get('/home', function(){
		
		return view('index');
		});

Route::group(['middleware' => 'web'], function () {
		
	Route::get('/', function ()    {
		if(Auth::user()){
			$breadcrumb=array(array('label'=>'Dashboard','url'=>'/','class'=>'entypo-home'));
		    return view('index')->with('breadcrumb',$breadcrumb);
		}else{
			return view('auth/login');	
		}
    });
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
