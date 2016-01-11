<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campaign as Campaigns;
use App\GsmNumber as GsmNumber;
use App\User as Users;
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
					$data = array(
						'campaigns' => $campaigns,
						'breadcrumb' => $breadcrumb
					);
					return view('admin.campaigns.index', $data);
			
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
    public function add()
    {
        
		$breadcrumb = array(
            array('label'=>'Dashboard','url'=>'/','class'=>'entypo-home'),
            array('label'=>'Manage Campaigns','url'=>'/campaigns','class'=>''),
            array('label'=>'Add','url'=>'/campaigns/add','class'=>'')
        );
		if(Auth::user()->account_type =='admin'){
        	$users = Users::select()->where('account_type', 'client')->pluck('username','id')->toArray();
			$gsmNumber = GsmNumber::all()->pluck('gsm_number','gsm_number')->toArray();
			return view('admin.campaigns.add')->with('users',$users)->with('gsmNumber',$gsmNumber)->with('breadcrumb',$breadcrumb);
		
		}else{
			return view('errors.404')->with('breadcrumb',$breadcrumb);
		}
	}
	 /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $breadcrumb = array(
            array('label'=>'Dashboard','url'=>'/','class'=>'entypo-home'),
            array('label'=>'Manage Campaigns','url'=>'/campaigns','class'=>''),
            array('label'=>'Edit','url'=>'/campaigns/edit/'.$id,'class'=>'')
        );
			$users = Users::select()->where('account_type', 'client')->pluck('username','id')->toArray();
			$gsmNumber = GsmNumber::all()->pluck('gsm_number','gsm_number')->toArray();
        $campaigns = Campaigns::findOrFail($id);
		//print_r($campaigns);
        return view('admin.campaigns.edit')->with('users',$users)->with('gsmNumber',$gsmNumber)->with('campaign',$campaigns)->with('breadcrumb',$breadcrumb);
    }
	/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
	public function store(Request $request)
    {
        $this->validate($request, [
			'name' => 'required|max:255|min:3',
			'unbounce_id' => 'required|min:3|unique:campaigns',			
			'start_date' => 'required|date|date_format:Y-m-d',
			'end_date' => 'required|date|date_format:Y-m-d|after:start_date',
			'campaigns_login' => 'required|max:255|min:3|unique:campaigns',
			'campaigns_password' => 'required|min:6',
			'notify_email' => 'email|max:255',
			'noreply_email' => 'email|max:255',
			'notify_phone' => 'required|numeric|min:12',
        ]);
		
        $input = $request->all();
        Campaigns::create($input);
        return redirect('campaigns');
    }
	
	/**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'name' => 'required|max:255|min:3',
			'unbounce_id' => 'required|min:3|unique:campaigns,unbounce_id,'.$request->id,		
			'start_date' => 'required|date|date_format:Y-m-d 00:00:00',
			'end_date' => 'required|date|date_format:Y-m-d 00:00:00|after:start_date',
			'campaigns_login' => 'required|max:255|min:3|unique:campaigns,campaigns_login,'.$request->id,
			'campaigns_password' => 'required|min:6',
			'notify_email' => 'email|max:255',
			'noreply_email' => 'email|max:255',
			'notify_phone' => 'required|numeric|min:12',
        ]);		
		$campaign = Campaigns::findOrFail($id);
        $campaign->update($request->all());
        return redirect('campaigns');
    }
	/**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $campaigns = Campaigns::findOrFail($id);
        $campaigns->delete();
		//Session::flash('flash_message', 'Campaign successfully deleted!');
        return redirect('campaigns');
    }

}
