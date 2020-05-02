<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Response;

use App\Models\Lead;

class AdminLeadController extends Controller
{
    function index()
    {
            $lead = Lead::paginate(10);
            $data = array('lead' => $lead);
            return response()->json($data);

            return view('admin-lead-table',$data);

    }
    function viewleadget(Request $req) // get
    {
        $Leads = Lead::find( strip_tags($req['id']) );
        return Response::json(array('status' => 'success', 'data' => $Leads ), 200 );
    }
}
