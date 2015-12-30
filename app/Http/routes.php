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

	$breadcrumb=array(array('label'=>'Dashboard','url'=>'/','class'=>'entypo-home'));
    return view('index')->with('breadcrumb',$breadcrumb);
});

Route::get('/gsm','GsmController@index');
Route::get('/gsm/add','GsmController@create');

