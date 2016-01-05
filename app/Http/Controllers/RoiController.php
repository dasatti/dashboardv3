<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RoiController extends Controller
{
    //
	    public function index(){
		$roi = array(
            );
        $breadcrumb = array(
            array('label'=>'Dashboard','url'=>'/','class'=>'entypo-home'),
            array('label'=>'Manage Roi','url'=>'/roi','class'=>'')
            );
        return view('client.roi')->with('roi',$roi)->with('breadcrumb',$breadcrumb);
    }
	
	/*if (Gate::denies('update-contact', $contact)) {
    abort(403);
	}*/

}
