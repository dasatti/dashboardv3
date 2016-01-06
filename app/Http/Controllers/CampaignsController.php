<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campaigns as Campaigns;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CampaignsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
			if(Auth::user()->account_type =='admin'){
					$campaigns = Campaigns::all();
					$breadcrumb = array(
						array('label'=>'Dashboard','url'=>'/','class'=>'entypo-home'),
						array('label'=>'Manage Campaigns','url'=>'/campaigns','class'=>'')
					);
					return view('admin.campaigns.index')->with('campaigns',$campaigns)->with('breadcrumb',$breadcrumb);
			
			}else if(Auth::user()->account_type =='client'){
        		
				$breadcrumb = array(
            		array('label'=>'Dashboard','url'=>'/','class'=>'entypo-home'),
            		array('label'=>'Manage Campaigns','url'=>'/campaigns','class'=>'')
            	);
				
				return view('errors.404')->with('breadcrumb',$breadcrumb);
		}
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $breadcrumb = array(
            array('label'=>'Dashboard','url'=>'/','class'=>'entypo-home'),
            array('label'=>'Manage Campaigns','url'=>'/campaigns','class'=>''),
            array('label'=>'Add','url'=>'/campaigns/add','class'=>'')
        );
        return view('admin.campaigns.add')->with('breadcrumb',$breadcrumb);
    }

}
