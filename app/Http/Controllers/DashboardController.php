<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
		$sms = array(
            );
        $breadcrumb = array(
            array('label'=>'Dashboard','url'=>'/','class'=>'entypo-home')
            );
        return view('admin.dashboard')->with('sms',$sms)->with('breadcrumb',$breadcrumb);
    }
}
