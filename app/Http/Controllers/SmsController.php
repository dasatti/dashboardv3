<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SmsController extends Controller
{
    public function index(){
		$sms = array(
            );
        $breadcrumb = array(
            array('label'=>'Dashboard','url'=>'/','class'=>'entypo-home'),
            array('label'=>'Manage Sms','url'=>'/sms','class'=>'')
            );
        return view('admin.sms')->with('sms',$sms)->with('breadcrumb',$breadcrumb);
    }
	
	public function indexClient(){
		$sms = array(
            );
        $breadcrumb = array(
            array('label'=>'Dashboard For Client','url'=>'/','class'=>'entypo-home'),
            array('label'=>'Manage Sms For Client','url'=>'/sms','class'=>'')
            );
        return view('client.sms')->with('sms',$sms)->with('breadcrumb',$breadcrumb);
    }
}
