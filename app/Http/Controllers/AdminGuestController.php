<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminGuestController extends Controller
{
    function index()
    {
       	return view('admin-guest-table'); 

    }

    function addget()
    {
        return view('admin-guest-add');
    }

    function addpost(Request $req)
    {
        dd($req);
        return view('admin-guest-add');
    }


    function editget() // for id 
    {
        return view('admin-guest-edit'); 
    }

    function editpost(Request $req) // updated fields
    {
        return view('admin-guest-edit'); 
    }


}
