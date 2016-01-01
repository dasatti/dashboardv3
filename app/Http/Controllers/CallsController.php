<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CallsController extends Controller
{
    

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
        $breadcrumb = array(
            array('label'=>'Dashboard','url'=>'/','class'=>'entypo-home'),
            array('label'=>'Manage Calls','url'=>'/calls','class'=>'')
            );
        return view('admin.calls')->with('calls',$calls)->with('breadcrumb',$breadcrumb);
    }

}
