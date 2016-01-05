<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    public function index(){
		$keys = array(
			array('company'=>'We Move','gsm_number'=>'50000000','key'=>'02405312112c2c45ab83b8b7bea15080')
            );
        $breadcrumb = array(
            array('label'=>'Dashboard','url'=>'/','class'=>'entypo-home'),
            array('label'=>'Manage Api Keys','url'=>'/api','class'=>'')
            );
        return view('admin.api.index')->with('keys',$keys)->with('breadcrumb',$breadcrumb);
    }

    public function create(){
    	$breadcrumb = array(
            array('label'=>'Dashboard','url'=>'/','class'=>'entypo-home'),
            array('label'=>'Manage Api Keys','url'=>'/api','class'=>''),
            array('label'=>'Add Api Key','url'=>'/api/add','class'=>'')
            );
        return view('admin.api.add')->with('breadcrumb',$breadcrumb);
    }
}
