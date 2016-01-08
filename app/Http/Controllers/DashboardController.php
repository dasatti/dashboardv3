<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Call;
use App\Http\Requests;
use Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DB;

class DashboardController extends Controller
{

    protected $breadcrumb; 
    /**
     * Create a new password controller instance.
     */
    public function __construct()
    {
        \DB::enableQueryLog();

        $this->middleware('auth');

        $this->breadcrumb = array(
            array('label'=>'Dashboard','url'=>'/','class'=>'entypo-home')
        );
		
    }


    public function index(){

        if(Auth::user()->account_type =='admin'){
            
            $from = '0000-00-00';
            $to = '0000-00-00';
            $leads_data = $this->getLeadsData($from,$to);

            return view('admin.dashboard')->with('breadcrumb',$this->breadcrumb)
            ->with('leads',$leads_data);
    	
		}else if(Auth::user()->account_type =='client'){
            
            return view('client.dashboard')->with('breadcrumb',$this->breadcrumb);
        }
	   
	 
    }


    public function leads(Request $request,$from,$to){
        if(Auth::user()->account_type =='admin'){
            $leads_data = $this->getLeadsData($from,$to);

            if($request->ajax()){
                return Response::json($leads_data);
            }

            //return $leads_data;//print data
            return view('admin.dashboard')->with('breadcrumb',$this->breadcrumb)
            ->with('leads',$leads_data);

        } elseif(Auth::user()->account_type =='client'){

        }
    }

    protected function getLeadsData($from,$to){
        $total_calls_lifetime = Call::count('*');
        $total_calls = Call::from($from)->to($to)->count('*');
        
        //print_r(\DB::getQueryLog());
        $calls_data = array(
            'total_calls' => $total_calls,
            'total_calls_lifetime' => $total_calls_lifetime
        );

        $leads = array('calls'=>$calls_data);

        return $leads;
    }
	
	
}
