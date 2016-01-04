<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EmailsController extends Controller
{
    public function index(){
		$emails = array(
            );
        $breadcrumb = array(
            array('label'=>'Dashboard','url'=>'/','class'=>'entypo-home'),
            array('label'=>'Manage Emails','url'=>'/sms','class'=>'')
            );
        return view('admin.emails')->with('emails',$emails)->with('breadcrumb',$breadcrumb);
    }
	public function indexClient(){
		$emails = array(
            );
        $breadcrumb = array(
            array('label'=>'Dashboard','url'=>'/','class'=>'entypo-home'),
            array('label'=>'Manage Emails For Clients','url'=>'/sms','class'=>'')
            );
        return view('Client.emails')->with('emails',$emails)->with('breadcrumb',$breadcrumb);
    }
}
