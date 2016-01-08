<?php

namespace App\Http\Controllers;
use App\Call;// Include model of calls 
use App\CallResource;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CallsController extends Controller
{

    protected $breadcrumb;
    protected $from;
    protected $to;

    /**
     * Create a new password controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->breadcrumb = array(
            array('label'=>'Dashboard','url'=>'/','class'=>'entypo-home'),
            array('label'=>'Manage Calls','url'=>'/calls','class'=>'')
        );

        $this->from = '0000-00-00';
        $this->to = '0000-00-00';
		
    }
	
    public function index(){
		
        $calls = $this->getCalls($this->from,$this->to);
//        print_r($calls);die;
        if(Auth::user()->account_type =='admin'){
		
            return view('admin.calls')->with('calls',$calls)->with('breadcrumb',$this->breadcrumb);
		
		}else if(Auth::user()->account_type =='client'){
        
            return view('client.calls')->with('calls',$calls)->with('breadcrumb',$this->breadcrumb);
			
		}
	}

    public function calls(Request $request,$from,$to){
        if(Auth::user()->account_type =='admin'){

            $calls = $this->getCalls($from,$to);
            
            if($request->ajax()){
                return $calls;
                return Response::json($calls);
            }

//            /return $calls;//print data
            return view('admin.calls')->with('breadcrumb',$this->breadcrumb)
            ->with('calls',$calls);

        } elseif(Auth::user()->account_type =='client'){
            //todo
        }
    }

    public function getCalls($from,$to){
//        $this->from = $from;
//        $this->to = $to;
//        $calls = Call::from($this->from)->to($this->to)->get()->toArray();
        $call_resource = new CallResource();
        $call_resource->setFrom($from);
        $call_resource->setTo($to);
        $calls = $call_resource->getCalls();
        return $calls;
    }
}
