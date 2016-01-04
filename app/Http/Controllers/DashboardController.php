<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Create a new password controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
		
    }
    public function index(){
		$sms = array(
            );
       
	   if(Auth::user()->account_type =='admin'){
   $breadcrumb = array(
            array('label'=>'Dashboard','url'=>'/','class'=>'entypo-home')
            );
        return view('admin.dashboard')->with('sms',$sms)->with('breadcrumb',$breadcrumb);
    	
		}else if(Auth::user()->account_type =='client'){
           $breadcrumb = array(
            array('label'=>'Dashboard','url'=>'/','class'=>'entypo-home')
            );
        return view('client.dashboard')->with('sms',$sms)->with('breadcrumb',$breadcrumb);

    }
	   
	 
    }
	
	
}
