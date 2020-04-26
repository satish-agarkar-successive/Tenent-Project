<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Response;

use App\Lead;

class AdminLeadController extends Controller
{
    function index()
    {
            $lead = Lead::paginate(10);
            $data = array('user' => $lead);
            return view('lead.admin-lead-table',$data);

    }
    function viewuserget(Request $req) // get
    {
        $Users = Lead::find($req['id']);
        return Response::json(array('status' => 'success', 'data' => $Users ),200 );
    }
}
