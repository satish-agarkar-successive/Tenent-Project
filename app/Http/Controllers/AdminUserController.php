<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Response;
use DateTime;
use DatePeriod;
use DateIntercal;
use Carbon\Carbon;

use App\Models\Users;

class AdminUserController extends Controller
{



    function index()
    {

        // for status toggle and delete
        if(   ( isset($_GET['action']) && isset($_GET['id']) ) || ( isset($_GET['value']) )    )
        { 
            
            $action = Strip_tags($_GET['action']) ;
            $id = Strip_tags($_GET['id']) ;
            $value = Strip_tags($_GET['value']) ;  // only set for toggle status

            if(  $action == "toggle" && $value != "" && $id!="" ) // $value != "" for toggle status
            {
                $Users = Users::find($id);
                $Users->user_status = $value;
                $Users->save();
                return redirect('/adminuser');
            }

            if(  $action == "delete" && $id!="" ) // $value != "" for toggle status
            {
                $Users = Users::destroy($id);
                return redirect('/adminuser');
            }

        }

        else
        {

            $users = Users::orderBy('id', 'desc')->paginate(10);
            for($i=0;$i<count($users);$i++)
            {
                $users[$i]['user_activation_date'] = Carbon::parse( $users[$i]['user_activation_date'] )->format('F j\\, Y');
                $users[$i]['user_renewal_date'] = Carbon::parse( $users[$i]['user_renewal_date'] )->format('F j\\, Y');
                $users[$i]['user_deal_value'] = preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,",$users[$i]['user_deal_value']);
            }


            $states=DB::table('state')->select('id','state')->get();

            $data = array('user' => $users ,'states' => $states);
            return view('admin-user-table',$data);

        }


        

    }


	function adduserpost(Request $req) // updated fields
    {
      
        $rules = [    
            'username' => ['required', 'regex:/^[a-zA-Z\s]*$/'],
            'user_mobile' => 'required|numeric|digits:10|unique:users',
            'email' => 'nullable|email',
            'user_gender' => 'required',
            'address' => 'nullable',
            'state_id' => 'required',
            'city' => 'required|max:50',
            'zip' => 'required|digits:6',
            'renewal_date' => 'required',
            'dealvalue'=> 'nullable|numeric|digits_between:1,8',
	    ];

	    $customMessages = [

            'username.required' => 'Name Required',
            'username.regex' => 'Name Should Not Contain Numeric Value',
            'username.max' => 'Name Should Contain Max 100 Characters only.',
            
            'user_mobile.required' => 'Phone Number Required And Should Be Numeric.',
            'user_mobile.numeric' => 'Phone Number Should Be Numeric.',
            'user_mobile.digits' => 'Phone Number Should Be Numeric And 10 Digits Long.',
            'user_mobile.unique' => 'Choose Different Phone Number , It Is Already Been Registered.',
            
            'email.email' => 'Email Address Is Not Valid',            
            'user_gender.required' => 'Gender Required',
            'address.max' => 'Address Should Have Max 300 Characters.',
            'state_id.required' => 'State Required',
            
            'city.required' => 'State Required',
            'city.max' => 'State Should Be Max 50 Characters',

            'zip.required' => 'Pincode Required',
            'zip.max' => 'Pincode Should Be Max 6 Characters',
            
            'renewal_date.required' => 'Renewal Date Required',

            'dealvalue.numeric' => 'Deal Value Required',
            'dealvalue.digits_between' => 'Deal Value Should Be Between 1-8 Digits',

	    ];

	    if( $this->validate($req, $rules, $customMessages) )
	    {
            // $r = explode( "-" , strip_tags( $req['renewal_date'] )  );
            // $renewal_date = $r[2].'-'.$r[1].'-'.$r[0];

            // $date = new DateTime();
            // $activation_date = $date->format('d-m-Y');


            $date = new DateTime();
            $activation_date = $date->format('Y-m-d');

            $user_data = array
            (
                'user_name' => strip_tags( $req['username'] ) ,
                'user_mobile' => strip_tags( $req['user_mobile'] ) ,
                'user_email' => strip_tags( $req['email'] ) ,
                'user_gender' => strip_tags( $req['user_gender'] ) ,
                'user_address' => strip_tags( $req['address'] ) ,
                'state_id' => strip_tags( $req['state_id'] ),
                'user_city' => strip_tags( $req['city'] ) ,
                'zip' => strip_tags( $req['zip'] ) ,
                'user_activation_date' => $activation_date ,
                'user_renewal_date' => strip_tags( $req['renewal_date'] ) ,
                'user_deal_value' => strip_tags( $req['dealvalue'] ) ,
                'user_status' => 1 ,
            );
        
            $id =  DB::table('users')->insertgetID($user_data);

            //not working
            //$id = Users::create($user_data)->id;

            //dd("assac");

            return Response::json(array('status' => 'success' ),200 );
	    	
	    }




    }

    function edituserget(Request $req) // get
    {
        $Users = Users::find($req['id']);
        return Response::json(array('status' => 'success', 'data' => $Users ),200 );
    }


    function edituserpost(Request $req) //post
    {

              $rules = [    
                    'username' => ['required', 'regex:/^[a-zA-Z\s]*$/'],
                    'user_mobile' => 'required|numeric|digits:10',
                    'email' => 'nullable|email',
                    'user_gender' => 'required',
                    'address' => 'nullable',
                    'state_id' => 'required',
                    'city' => 'required|max:50',
                    'zip' => 'required|digits:6',
                    'renewal_date' => 'required',
                    'dealvalue'=> 'nullable|numeric|digits_between:1,8',
                ];

                $customMessages = [

                    'username.required' => 'Name Required',
                    'username.regex' => 'Name Should Not Contain Numeric Value',
                    'username.max' => 'Name Should Contain Max 100 Characters only.',
                    
                    'user_mobile.required' => 'Phone Number Required And Should Be Numeric.',
                    'user_mobile.numeric' => 'Phone Number Should Be Numeric.',
                    'user_mobile.digits' => 'Phone Number Should Be Numeric And 10 Digits Long.',
                    'user_mobile.unique' => 'Choose Different Phone Number , It Is Already Been Registered.',
                    
                    'email.email' => 'Email Address Is Not Valid',            
                    'user_gender.required' => 'Gender Required',
                    'address.max' => 'Address Should Have Max 300 Characters.',
                    'state_id.required' => 'State Required',
                    
                    'city.required' => 'State Required',
                    'city.max' => 'State Should Be Max 50 Characters',

                    'zip.required' => 'Pincode Required',
                    'zip.max' => 'Pincode Should Be Max 6 Characters',
                    
                    'renewal_date.required' => 'Renewal Date Required',

                    'dealvalue.numeric' => 'Deal Value Required',
                    'dealvalue.digits_between' => 'Deal Value Should Be Between 1-8 Digits',

                ];

                if( $this->validate($req, $rules, $customMessages) )
                {

                    $date = new DateTime();
                    $activation_date = $date->format('Y-m-d');

                    $user_data = array
                    (

                        'user_name' => strip_tags( $req['username'] ) ,
                        'user_mobile' => strip_tags( $req['user_mobile'] ) ,
                        'user_email' => strip_tags( $req['email'] ) ,
                        'user_gender' => strip_tags( $req['user_gender'] ) ,
                        'user_address' => strip_tags( $req['address'] ) ,
                        'state_id' => strip_tags( $req['state_id'] ) ,
                        'user_city' => strip_tags( $req['city'] ) ,
                        'zip' => strip_tags( $req['zip'] ) ,
                        'user_renewal_date' => strip_tags( $req['renewal_date'] ) ,
                        'user_deal_value' => strip_tags( $req['dealvalue'] ) ,
                        //'user_status' => 1 ,
                    );


                    $id= strip_tags( $req['id'] );
                    $update = Users::find($id)->update($user_data);
                    return Response::json(array('status' => 'success' ),200 );
                    
                }




    }


}
