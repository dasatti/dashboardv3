<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EmailsController extends Controller
{
	 /**
     * Create a new password controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
		
    }
    public function index(){
		$emails = array(
            );
   if(Auth::user()->account_type =='admin'){
        $breadcrumb = array(
            array('label'=>'Dashboard','url'=>'/','class'=>'entypo-home'),
            array('label'=>'Manage Emails','url'=>'/sms','class'=>'')
            );
        return view('admin.emails')->with('emails',$emails)->with('breadcrumb',$breadcrumb);
    	
		}else if(Auth::user()->account_type =='client'){
        $breadcrumb = array(
            array('label'=>'Dashboard','url'=>'/','class'=>'entypo-home'),
            array('label'=>'Manage Emails For Clients','url'=>'/sms','class'=>'')
            );
        return view('client.emails')->with('emails',$emails)->with('breadcrumb',$breadcrumb);

    }
}
}
