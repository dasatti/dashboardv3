<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ClientsController extends Controller
{
    

    public function index(){
		$clients = array(
                array('name'=>'Client name','phone_number'=>'11223344','email'=>'abc@xyz.com',
                	'username'=>'client','type'=>'client'),
                array('name'=>'Client name','phone_number'=>'11223344','email'=>'abc@xyz.com',
                	'username'=>'client','type'=>'client'),
                array('name'=>'Client name','phone_number'=>'11223344','email'=>'abc@xyz.com',
                	'username'=>'client','type'=>'client'),
                array('name'=>'Client name','phone_number'=>'11223344','email'=>'abc@xyz.com',
                	'username'=>'client','type'=>'client'),
                array('name'=>'Client name','phone_number'=>'11223344','email'=>'abc@xyz.com',
                	'username'=>'client','type'=>'client'),
                array('name'=>'Client name','phone_number'=>'11223344','email'=>'abc@xyz.com',
                	'username'=>'client','type'=>'client'),
                array('name'=>'Client name','phone_number'=>'11223344','email'=>'abc@xyz.com',
                	'username'=>'client','type'=>'client')
            );
        $breadcrumb = array(
            array('label'=>'Dashboard','url'=>'/','class'=>'entypo-home'),
            array('label'=>'Manage Clients','url'=>'/clients','class'=>'')
            );
        return view('clients.index')->with('clients',$clients)->with('breadcrumb',$breadcrumb);
    }

    public function create(){
    	$breadcrumb = array(
            array('label'=>'Dashboard','url'=>'/','class'=>'entypo-home'),
            array('label'=>'Manage Clients','url'=>'/clients','class'=>''),
            array('label'=>'Add','url'=>'/clients/add','class'=>'')
            );
    	return view('clients.add')->with('breadcrumb',$breadcrumb);
    }
}
