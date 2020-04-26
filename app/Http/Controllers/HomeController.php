<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Response;
use Redirect;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index()
    {
       	return view('admin-dashboard');  //crm index view
    }

    function state()
    {
	    $states=DB::table('state')->select('state_id','state')->get();
        return Response::json(array('status' => 'success', 'state' => $states ),200 );
    }

    function user()
    {
	    $states=DB::table('users')->select('user_id','user_name','user_mobile')->get();
        return Response::json(array('status' => 'success', 'user' => $states ),200 );
    }


    function btype()
    {
	    $states=DB::table('business_type')->select('business_type_id','type')->get();
        return Response::json(array('status' => 'success', 'btype' => $states ),200 );
    }


}
