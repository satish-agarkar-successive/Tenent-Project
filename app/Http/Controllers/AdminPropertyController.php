<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPropertyController extends Controller
{


    function index()
    {
       	return view('admin-properties-table'); 
    }


    function addpropertyget()
    {
        return view('admin-properties-add');
    }
    function addpropertypost(Request $req)
    {
        dd($req);
        return view('admin-properties-add');
    }
    function editpropertyget() // for id 
    {
        return view('admin-properties-edit'); 
    }
    function editpropertypost(Request $req) // updated fields
    {
        return view('admin-properties-edit');  
    }



    function propertydetailsget()
    {
        return view('admin-properties-details-add-edit');
    }
    function propertydetailspost(Request $req)
    {
        dd($req);
        return view('admin-properties-details-add-edit');
    }



}
