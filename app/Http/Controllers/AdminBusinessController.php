<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Response;
use Storage;
use File;
use DateTime;
use DatePeriod;
use DateIntercal;
use Carbon\Carbon;


use App\Models\Business;


class AdminBusinessController extends Controller
{
    function index()
    {

// Sl. No
// Name of the Business
// Username
// User Mobile
// City
// Type of Business
// Number of Employees
// Year of Establishment
// GST Number


    	// for status toggle and delete
        if(   ( isset($_GET['action']) && isset($_GET['id']) ) || ( isset($_GET['value']) )    )
        { 
            
            $action = Strip_tags($_GET['action']) ;
            $id = Strip_tags($_GET['id']) ;
            $value = Strip_tags($_GET['value']) ;  // only set for toggle status

            if(  $action == "toggle" && $value != "" && $id!="" ) // $value != "" for toggle status
            {
                $business = Business::find($id);
                $business->business_status = $value;
                $business->save();
                return redirect('/adminbusiness');
            }

            if(  $action == "delete" && $id!="" ) // $value != "" for toggle status
            {
                $business = Business::destroy($id);
                return redirect('/adminbusiness');
            }

        }

        else
        {


//https://stackoverflow.com/questions/29165410/how-to-join-three-table-by-laravel-eloquent-model


// id
// business_name
// user_id
// state_id
// city
// business_pincode
// business_url
// business_type_id
// business_employee_count
// business_est_year
// business_gst
// business_pan
// business_fssai
// business_logo
// business_status
// user_id
// user_name
// user_mobile
// user_address
// user_email
// user_gender
// state_id
// user_city
// zip
// user_activation_date
// user_renewal_date
// user_deal_value
// user_status
// state_id
// state
// business_type_id
// type	

        	$business_list =DB::table('business')
                ->join('users','users.id', '=', 'business.user_id')
                ->join('state', 'state.id', '=', 'business.state_id')
                ->join('business_type', 'business_type.id', '=', 'business.business_type_id')
                ->select('business.id','business.business_name','business.user_id','user_name','user_mobile','business.state_id','state.state','user_city','business.business_type_id','business_type.type','business.business_employee_count','business.business_est_year','business.business_gst','business.business_pan','business.business_fssai','business.business_status','zip','business_url','business_logo')
                ->orderBy('id', 'desc')
                ->paginate(10)->ToArray();


                // dd($business_list);

             //dd($business_list['data'][0]->business_est_year);

            for($i=0;$i<count($business_list['data']);$i++)
            {
                $business_list['data'][$i]->business_est_year = Carbon::parse( $business_list['data'][$i]->business_est_year )->format('F j\\, Y');
            }


            $states=DB::table('state')->select('id','state')->get();
            $users=DB::table('users')->select('id','user_name','user_mobile')->get();
            $business_types=DB::table('business_type')->select('id','type')->get();



            $data = array('business' => $business_list['data'] , 'states' => $states , 'users' => $users, 'btypes' => $business_types);
            return view('admin-business-table',$data);

        }



    }

    function addbusinesspost(Request $req)
    {


    	// xampp/php ->search php.ini and open configuration file edit below fields and restart xampp
    	//upload_max_filesize = 2M -> 100M
    	//post_max_size = 8M -> 100M

    	$rules = [    


            'business_name' => ['required', 'regex:/^[a-zA-Z\s]*$/'],
            'user_id' => 'required',
            'state_id' => 'required',
            'city' => 'nullable|max:50',
            'business_pincode' => 'nullable|digits:6',
            'business_url' => 'nullable',            
            'business_type_id' => 'required',
            'business_employee_count'=> 'nullable|numeric|digits_between:4,4',
            'business_est_year'=> 'nullable|numeric|digits_between:4,4',
            'business_gst'=> 'nullable|numeric|digits_between:15,15',
            'business_pan'=> 'nullable|numeric|digits_between:10,10',
            'business_fssai'=> 'nullable|numeric|digits_between:14,14',
            'business_logo'=> 'nullable|max:10000',  // jpeg,bmp,png,gif,svg, pdf
            
            // 'business_logo'=> 'required|max:10000|mimes:jpg,jpeg,bmp,png,gif,svg',  // jpeg,bmp,png,gif,svg, pdf

	    ];
    
	    $customMessages = [

            'business_name.required' => 'Business Name Required And Should Not Contain Numeric Value.',
            'business_name.regex' => 'Business Name Should Not Contain Numeric Value.',

            'user_id.required' => 'User Required.',
            'state_id.required' => 'State Required.',

            'city.required' => 'City Required.',
            'city.max' => 'City Should Be Max 50 Characters.',

            'business_pincode.required' => 'Pincode Required.',
            'business_pincode.max' => 'Pincode Should Be Max 6 Characters.',
            
            'business_url.required' => 'Business Web Address Required.',
            

            'business_logo.required' => 'Business Logo Required.',
            'business_logo.max' => 'Business Logo Image Should Be Less Than 10 MB.',
            //'business_logo.mimes' => 'Business Logo Required And Should Be In Image [ jpg , jpeg , bmp , png , gif , svg ] Format.',
            
            'business_type_id.required' => 'Business Type Required.',

            'business_employee_count.required' => 'Number Of Employee Required And Should Be Numeric.',
            'business_employee_count.numeric' => 'Number Of Employee Should Be Numeric.',
            'business_employee_count.digits_between' => 'Number Of Employee  Should Be 4 Digits.',

            'business_est_year.required' => 'Year Of Establishment Required And Should Be Numeric.',
            'business_est_year.numeric' => 'Year Of Establishment Should Be Numeric.',
            'business_est_year.digits_between' => 'Year Of Establishment Should Be 4 Digits.',
			
			'business_gst.required' => 'GST Number Required And Should Be Numeric.',
            'business_gst.numeric' => 'GST Number Should Be Numeric.',
            'business_gst.digits_between' => 'GST Number Should Be 15 Digits.',

            'business_pan.required' => 'PAN Number Required And Should Be Numeric.',
            'business_pan.numeric' => 'PAN Number Should Be Numeric.',
            'business_pan.digits_between' => 'PAN Number Should Be 10 Digits.',

            'business_fssai.required' => 'FSSAI Number Required And Should Be Numeric.',
            'business_fssai.numeric' => 'FSSAI Number Should Be Numeric.',
            'business_fssai.digits_between' => 'FSSAI Number Should Be 14 Digits.',
	    
	    ];

	    if( $this->validate($req, $rules, $customMessages) )
	    {


	    	if($req['business_url']!="")
	    	{
	    		$url = strip_tags( $req['business_url'] ); 
				$curl = curl_init($url);
				curl_setopt($curl, CURLOPT_NOBODY, true);
				$result = curl_exec($curl); 
				  
				if ($result !== false) 
				{ 
					$statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);     
				    if($statusCode == 404) { return Response::json(array('status'=>'error', 'errors'=>['Entered Business Web Address Not Found.']),422); }  
				} else { return Response::json(array('status'=>'error', 'errors'=>['Business Web Address Is Incorrect.']),422); } 

	    	}
			
			// $logoname;

			if( is_uploaded_file( $_FILES['business_logo']['tmp_name'] ) )
      		{

      			$path = public_path('BusinessLogos');
			    if(!File::isDirectory($path)) {  File::makeDirectory($path, 0777, true, true);  }


				$file_fullname = $_FILES['business_logo']["name"];
				$file_fullname = explode('.', $file_fullname);
				$logoname = $file_fullname[0].'_'.date('YmdHis').'.'.$file_fullname[1];
				$move =  move_uploaded_file($_FILES['business_logo']['tmp_name'], public_path().'/BusinessLogos/'.$logoname);

			}else{ $logoname = null ; }


            $business_data = array
            (

			      'business_name' => strip_tags( $req['business_name'] ),
			      'user_id' => strip_tags( $req['user_id'] ),
			      'state_id' => strip_tags( $req['state_id'] ),
			      'city' => strip_tags( $req['city'] ),
			      'business_pincode' => strip_tags( $req['business_pincode'] ),
			      'business_url' => strip_tags( $req['business_url'] ),
			      'business_type_id'  => strip_tags( $req['business_type_id'] ),
			      'business_employee_count' => strip_tags( $req['business_employee_count'] ),
			      'business_est_year' => strip_tags( $req['business_est_year'] ),
			      'business_gst' => strip_tags( $req['business_gst'] ),
			      'business_pan' => strip_tags( $req['business_pan'] ),
			      'business_fssai' => strip_tags( $req['business_fssai'] ),
			      'business_logo' => $logoname,
			      'business_status' => 1,

            );
        
            $id =  DB::table('business')->insertgetID($business_data);
            return Response::json(array('status' => 'success' ),200 );
	   

	   }
	   

    }


    function editbusinessget(Request $req) // get
    {

        $id= strip_tags( $req['id'] );

        $business_list =DB::table('business')
                ->join('users','users.id', '=', 'business.user_id')
                ->join('state', 'state.id', '=', 'business.state_id')
                ->join('business_type', 'business_type.id', '=', 'business.business_type_id')
                ->select('business.id','business.business_name','business.user_id','user_name','user_mobile','business.state_id','state.state','user_city','business.business_type_id','business_type.type','business.business_employee_count','business.business_est_year','business.business_gst','business.business_pan','business.business_fssai','business.business_status','zip','business_url','business_logo')
                ->where('business.id',$id)->get();

           
        $data = array('business' => $business_list);
        return Response::json(array('status' => 'success', 'data' => $data['business'][0] ),200 );
    
    }


    function editbusinesspost(Request $req) //post
    {
		// xampp/php ->search php.ini and open configuration file edit below fields and restart xampp
    	//upload_max_filesize = 2M -> 100M
    	//post_max_size = 8M -> 100M

    	$rules = [    


            'business_name' => ['required', 'regex:/^[a-zA-Z\s]*$/'],
            'user_id' => 'required',
            'state_id' => 'required',
            'city' => 'nullable|max:50',
            'business_pincode' => 'nullable|digits:6',
            'business_url' => 'nullable',            
            'business_type_id' => 'required',
            'business_employee_count'=> 'nullable|numeric|digits_between:4,4',
            'business_est_year'=> 'nullable|numeric|digits_between:4,4',
            'business_gst'=> 'nullable|numeric|digits_between:15,15',
            'business_pan'=> 'nullable|numeric|digits_between:10,10',
            'business_fssai'=> 'nullable|numeric|digits_between:14,14',
            'business_logo'=> 'nullable|max:10000',  // jpeg,bmp,png,gif,svg, pdf
            
            // 'business_logo'=> 'required|max:10000|mimes:jpg,jpeg,bmp,png,gif,svg',  // jpeg,bmp,png,gif,svg, pdf

	    ];
    
	    $customMessages = [

            'business_name.required' => 'Business Name Required And Should Not Contain Numeric Value.',
            'business_name.regex' => 'Business Name Should Not Contain Numeric Value.',

            'user_id.required' => 'User Required.',
            'state_id.required' => 'State Required.',

            'city.required' => 'City Required.',
            'city.max' => 'City Should Be Max 50 Characters.',

            'business_pincode.required' => 'Pincode Required.',
            'business_pincode.max' => 'Pincode Should Be Max 6 Characters.',
            
            'business_url.required' => 'Business Web Address Required.',
            

            'business_logo.required' => 'Business Logo Required.',
            'business_logo.max' => 'Business Logo Image Should Be Less Than 10 MB.',
            //'business_logo.mimes' => 'Business Logo Required And Should Be In Image [ jpg , jpeg , bmp , png , gif , svg ] Format.',
            
            'business_type_id.required' => 'Business Type Required.',

            'business_employee_count.required' => 'Number Of Employee Required And Should Be Numeric.',
            'business_employee_count.numeric' => 'Number Of Employee Should Be Numeric.',
            'business_employee_count.digits_between' => 'Number Of Employee  Should Be 4 Digits.',

            'business_est_year.required' => 'Year Of Establishment Required And Should Be Numeric.',
            'business_est_year.numeric' => 'Year Of Establishment Should Be Numeric.',
            'business_est_year.digits_between' => 'Year Of Establishment Should Be 4 Digits.',
			
			'business_gst.required' => 'GST Number Required And Should Be Numeric.',
            'business_gst.numeric' => 'GST Number Should Be Numeric.',
            'business_gst.digits_between' => 'GST Number Should Be 15 Digits.',

            'business_pan.required' => 'PAN Number Required And Should Be Numeric.',
            'business_pan.numeric' => 'PAN Number Should Be Numeric.',
            'business_pan.digits_between' => 'PAN Number Should Be 10 Digits.',

            'business_fssai.required' => 'FSSAI Number Required And Should Be Numeric.',
            'business_fssai.numeric' => 'FSSAI Number Should Be Numeric.',
            'business_fssai.digits_between' => 'FSSAI Number Should Be 14 Digits.',
	    
	    ];

	    if( $this->validate($req, $rules, $customMessages) )
	    {


	    	if($req['business_url']!="")
	    	{
	    		$url = strip_tags( $req['business_url'] ); 
				$curl = curl_init($url);
				curl_setopt($curl, CURLOPT_NOBODY, true);
				$result = curl_exec($curl); 	  
				if ($result !== false) 
				{ 
					$statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);     
				    if($statusCode == 404) { return Response::json(array('status'=>'error', 'errors'=>['Entered Business Web Address Not Found.']),422); }  
				} else { return Response::json(array('status'=>'error', 'errors'=>['Business Web Address Is Incorrect.']),422); } 

	    	}
			
			if( is_uploaded_file( $_FILES['business_logo']['tmp_name'] ) )
      		{

      			$path = public_path('BusinessLogos');
			    if(!File::isDirectory($path)) {  File::makeDirectory($path, 0777, true, true);  }
				$file_fullname = $_FILES['business_logo']["name"];
				$file_fullname = explode('.', $file_fullname);
				$logoname = $file_fullname[0].'_'.date('YmdHis').'.'.$file_fullname[1];
				$move =  move_uploaded_file($_FILES['business_logo']['tmp_name'], public_path().'/BusinessLogos/'.$logoname);

			}
            else
            { 

                //if new file not uploaded then , old name will be updated
                $logoname = strip_tags( $req['old_logoname'] ) ; 
            }



            $business_data = array
            (

			      'business_name' => strip_tags( $req['business_name'] ),
			      'user_id' => strip_tags( $req['user_id'] ),
			      'state_id' => strip_tags( $req['state_id'] ),
			      'city' => strip_tags( $req['city'] ),
			      'business_pincode' => strip_tags( $req['business_pincode'] ),
			      'business_url' => strip_tags( $req['business_url'] ),
			      'business_type_id'  => strip_tags( $req['business_type_id'] ),
			      'business_employee_count' => strip_tags( $req['business_employee_count'] ),
			      'business_est_year' => strip_tags( $req['business_est_year'] ),
			      'business_gst' => strip_tags( $req['business_gst'] ),
			      'business_pan' => strip_tags( $req['business_pan'] ),
			      'business_fssai' => strip_tags( $req['business_fssai'] ),
			      'business_logo' => $logoname,
			      //'business_status' => 1,

            );
        
            // $id =  DB::table('business')->insertgetID($business_data);
            // return Response::json(array('status' => 'success' ),200 );


            $id= strip_tags( $req['id'] );
            $update = Business::find($id)->update($business_data);
            return Response::json(array('status' => 'success' ),200 );
	   

	    }
	   

    }


}
