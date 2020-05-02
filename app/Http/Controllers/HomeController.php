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

    // function all()
    // {
    //     $states=DB::table('state')->select('id','state')->get();
    //     $users=DB::table('users')->select('id','user_name','user_mobile')->get();
    //     $business_types=DB::table('business_type')->select('id','type')->get();
    //     return Response::json(array('status' =>'success','states'=>$states,'users'=>$users,'btypes'=>$business_types),200);
    // }

    // function state()
    // {
	   //  $states=DB::table('state')->select('id','state')->get();
    //     return Response::json(array('status' => 'success', 'state' => $states ),200 );
    // }

    // function user()
    // {
	   //  $users=DB::table('users')->select('id','user_name','user_mobile')->get();
    //     return Response::json(array('status' => 'success', 'user' => $users ),200 );
    // }


    // function btype()
    // {
	   //  $business_types=DB::table('business_type')->select('id','type')->get();
    //     return Response::json(array('status' => 'success', 'btype' => $business_types ),200 );
    // }


}
