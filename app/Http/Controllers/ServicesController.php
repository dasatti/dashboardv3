<?php

namespace App\Http\Controllers;

use App\Call;

use Response;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
		
    }

    public function leads(){

    	$call = new Call();
        $total_calls = $call->total();
        $calls = array(
            'total_calls_lifetime' => $total_calls
        );

        $leads = array('calls'=>$calls);

        return Response::json($leads);
    }
}
