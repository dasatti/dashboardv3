<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CallsController extends Controller
{

 /**
     * Create a new password controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
		
    }
	
    public function index(){
		
		$calls = array(
                array('s_no'=>'1','phone_number'=>'11223344','client_number'=>'1122334455',
                	'date'=>'Jun 11, 2015','time'=>'12:00 AM','success'=>'SUCCESS','new_call'=>'1'),
                array('s_no'=>'2','phone_number'=>'11223344','client_number'=>'1122334455',
                	'date'=>'Jun 11, 2015','time'=>'12:00 AM','success'=>'SUCCESS','new_call'=>'1'),
                array('s_no'=>'3','phone_number'=>'11223344','client_number'=>'1122334455',
                	'date'=>'Jun 11, 2015','time'=>'12:00 AM','success'=>'SUCCESS','new_call'=>'0'),
                array('s_no'=>'4','phone_number'=>'11223344','client_number'=>'1122334455',
                	'date'=>'Jun 11, 2015','time'=>'12:00 AM','success'=>'SUCCESS','new_call'=>'0'),
                array('s_no'=>'5','phone_number'=>'11223344','client_number'=>'1122334455',
                	'date'=>'Jun 11, 2015','time'=>'12:00 AM','success'=>'SUCCESS','new_call'=>'1'),
                array('s_no'=>'6','phone_number'=>'11223344','client_number'=>'1122334455',
                	'date'=>'Jun 11, 2015','time'=>'12:00 AM','success'=>'SUCCESS','new_call'=>'0'),
                array('s_no'=>'7','phone_number'=>'11223344','client_number'=>'1122334455',
                	'date'=>'Jun 11, 2015','time'=>'12:00 AM','success'=>'SUCCESS','new_call'=>'1')
            );
        if(Auth::user()->account_type =='admin'){
		$breadcrumb = array(
            array('label'=>'Dashboard','url'=>'/','class'=>'entypo-home'),
            array('label'=>'Manage Calls','url'=>'/calls','class'=>'')
            );
        return view('admin.calls')->with('calls',$calls)->with('breadcrumb',$breadcrumb);
		
		}else if(Auth::user()->account_type =='client'){
        
		$breadcrumb = array(
            array('label'=>'Dashboard','url'=>'/','class'=>'entypo-home'),
            array('label'=>'Manage Calls For Clients','url'=>'/calls','class'=>'')
            );
        return view('client.calls')->with('calls',$calls)->with('breadcrumb',$breadcrumb);
			
		}
	}
}
