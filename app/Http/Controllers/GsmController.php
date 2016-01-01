<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
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

        $phones = array(
                array('gsm_number'=>'11223344','assigned'=>'0','is_test'=>'0'),
                array('gsm_number'=>'11223355','assigned'=>'1','is_test'=>'0'),
                array('gsm_number'=>'11223366','assigned'=>'0','is_test'=>'0'),
                array('gsm_number'=>'11223377','assigned'=>'1','is_test'=>'0'),
                array('gsm_number'=>'11223388','assigned'=>'0','is_test'=>'0'),
                array('gsm_number'=>'11223399','assigned'=>'1','is_test'=>'0'),
                array('gsm_number'=>'11223300','assigned'=>'0','is_test'=>'0'),
            );
        $breadcrumb = array(
            array('label'=>'Dashboard','url'=>'/','class'=>'entypo-home'),
            array('label'=>'Manage GSM Numbers','url'=>'/gsm','class'=>'')
            );
        return view('gsm.index')->with('phones',$phones)->with('breadcrumb',$breadcrumb);
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
            array('label'=>'Manage GSM Numbers','url'=>'/gsm','class'=>''),
            array('label'=>'Add','url'=>'/gsm/add','class'=>'')
        );
        return view('gsm.add')->with('breadcrumb',$breadcrumb);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
