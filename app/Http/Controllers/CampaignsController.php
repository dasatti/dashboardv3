<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        $campaigns = array(
        	array('name'=>'Axiom Business Seup','client_name' =>'Axiom Mark Business Setup',
        		'gsm_number'=>'0526630328','unbounce_id'=>'b8c458b8-add1-47dc-91b3-32f75600600e',
        		'start_date'=>'2015-01-10','end_date'=>'0000-00-00','status'=>'Running'),
        	array('name'=>'Beverly Hills','client_name' =>'Beverly Hills',
        		'gsm_number'=>'Beverly Hills','unbounce_id'=>'e85e7926-9642-11e4-b1fb-22000b252516',
        		'start_date'=>'2015-01-10','end_date'=>'2015-02-19','status'=>'Stopped'),
        	array('name'=>'Bin Nabat','client_name' =>'Bin Nabat Coffee Capsules 01',
        		'gsm_number'=>'','unbounce_id'=>'d65bbb90-8124-11e4-a2c1-22000a91bbb2',
        		'start_date'=>'0000-00-00','end_date'=>'0000-00-00','status'=>'Running')
            );
        $breadcrumb = array(
            array('label'=>'Dashboard','url'=>'/','class'=>'entypo-home'),
            array('label'=>'Manage Campaigns','url'=>'/campaigns','class'=>'')
            );
        return view('admin.campaigns.index')->with('campaigns',$campaigns)->with('breadcrumb',$breadcrumb);
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
