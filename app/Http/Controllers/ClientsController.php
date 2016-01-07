<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as Users;
use App\Http\Requests;
use App\Http\Controllers\Controller;
///use App\Http\Controllers\Session;
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
 	/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
	{
    	$breadcrumb = array(
            array('label'=>'Dashboard','url'=>'/','class'=>'entypo-home'),
            array('label'=>'Manage Clients','url'=>'/clients','class'=>''),
            array('label'=>'Add','url'=>'/clients/add','class'=>'')
            );
    	return view('admin.clients.add')->with('breadcrumb',$breadcrumb);
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
            array('label'=>'Manage Clients','url'=>'/clients','class'=>''),
            array('label'=>'Edit','url'=>'/clients/edit/'.$id,'class'=>'')
        );
        $user = Users::findOrFail($id);
        return view('admin.clients.edit')->with('user',$user)->with('breadcrumb',$breadcrumb);
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
			'name' => 'required|max:255|min:3|unique:users',
			'username' => 'required|max:255|min:3|unique:users',
			'password' => 'required|min:6',
			'email' => 'required|email|max:255|unique:users',
			'company' => 'required|max:255|min:3',
			'phone_number' => 'required|numeric|min:12',
        ]);
        $input = $request->all();
        Users::create($input);
        return redirect('clients');
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
          	'name' => 'required|max:255|min:3|unique:users,name,'.$request->id,
			'username' => 'required|max:255|min:3|unique:users,username,'.$request->id,
			'password' => 'required|min:6',
			'email' => 'required|email|max:255|unique:users,email,'.$request->id,
			'company' => 'required|max:255|min:3',
			'phone_number' => 'required|numeric|min:12',
        ]);
		
		$user = Users::findOrFail($id);
        $user->update($request->all());
		
        return redirect('clients');
    }
	/**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Users::findOrFail($id);
        $user->delete();
		//Session::flash('flash_message', 'User successfully deleted!');
        return redirect('clients');
    }
	
}