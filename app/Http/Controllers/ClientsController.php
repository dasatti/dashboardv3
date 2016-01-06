<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as Users;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ClientsController extends Controller
{ 
 	public function index()
    {
		if(Auth::user()->account_type =='admin'){
        $users = Users::all();
        $breadcrumb = array(
            array('label'=>'Dashboard','url'=>'/','class'=>'entypo-home'),
            array('label'=>'Users','url'=>'/clients','class'=>'')
            );
        return view('admin.clients.index')->with('users',$users)->with('breadcrumb',$breadcrumb);
    	
		}else if(Auth::user()->account_type =='client'){
        $breadcrumb = array(
            array('label'=>'Dashboard','url'=>'/','class'=>'entypo-home'),
            array('label'=>'Users','url'=>'/clients','class'=>'')
            );
        return view('errors.404')->with('breadcrumb',$breadcrumb);
		
		}
	}

    public function create(){
    	$breadcrumb = array(
            array('label'=>'Dashboard','url'=>'/','class'=>'entypo-home'),
            array('label'=>'Manage Clients','url'=>'/clients','class'=>''),
            array('label'=>'Add','url'=>'/clients/add','class'=>'')
            );
    	return view('admin.clients.add')->with('breadcrumb',$breadcrumb);
    }
}
