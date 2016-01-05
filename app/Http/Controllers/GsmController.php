<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\GsmNumber;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
///use App\Http\Controllers\Auth\AuthController as Auth;
class GsmController extends Controller
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
        $phones = GsmNumber::all();
        $breadcrumb = array(
            array('label'=>'Dashboard','url'=>'/','class'=>'entypo-home'),
            array('label'=>'Manage GSM Numbers','url'=>'/gsm','class'=>'')
            );
        return view('admin.gsm.index')->with('phones',$phones)->with('breadcrumb',$breadcrumb);
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
            array('label'=>'Manage GSM Numbers','url'=>'/gsm','class'=>''),
            array('label'=>'Add','url'=>'/gsm/add','class'=>'')
        );
        return view('admin.gsm.add')->with('breadcrumb',$breadcrumb);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
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
            'gsm_number' => 'required'
        ]);
        $input = $request->all();
        GsmNumber::create($input);
        return redirect('gsm');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
            array('label'=>'Manage GSM Numbers','url'=>'/gsm','class'=>''),
            array('label'=>'Edit','url'=>'/gsm/edit/'.$id,'class'=>'')
        );
        $gsm = GsmNumber::findOrFail($id);
        return view('admin.gsm.edit')->with('gsm_number',$gsm)->with('breadcrumb',$breadcrumb);
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
        $gsm = GsmNumber::findOrFail($id);
        $gsm->update($request->all());
        $gsm->save();
        return redirect('gsm');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gsm = GsmNumber::findOrFail($id);
        $gsm->delete();
        return redirect('gsm');
    }
}
