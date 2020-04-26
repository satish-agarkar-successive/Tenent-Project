<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Response;
use Redirect;

use App;


class RegisterController extends Controller
{
	
	function index()
    {
    	if( Auth::check() ) {  return Redirect("/home"); }
    	else{ return view('user-register'); }
    }

    function register(Request $request)
    {

	    $rules = [
            'name' => ['required', 'regex:/^[a-zA-Z\s]*$/', 'max:100'],
            'phone' => ['required','numeric','digits:10','unique:adminlogin'],
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|string|min:8',
            'term'=> 'required',
	    ];

	    $customMessages = [

            'name.required' => 'User Name Required',
            'name.regex' => 'User Name Should Not Contain Numeric Value',
            'name.max' => 'User Name Should Contain Max 100 Characters only.',
            
            'phone.required' => 'Phone Number Required And Should Be Numeric.',
            'phone.numeric' => 'Phone Number Should Be Numeric.',
            'phone.digits' => 'Phone Number Should Be Numeric And 10 Digits Long.',
            'phone.unique' => 'Choose Different Phone Number , It Is Already Been Registered.',
            
            'password.required' => 'Password Required.',
            'password.min' => 'Password Should Have Minimum 8 Characters.',
            
            'password_confirmation.required' => 'Repeat Password Required.',
            'password_confirmation.min' => 'Repeat Password Should Have Minimum 8 Characters.',
            
            'term.required' => 'Please Confirm Terms And Conditions.',

	    ];

	    if( $this->validate($request, $rules, $customMessages) )
	    {
	    	$user = new App\User;
			$user->name = $request['name'];
			$user->phone = $request['phone'];
			$user->password = bcrypt( $request['password'] );
			$user->save();
            return Response::json(array('status' => 'success' ),200 );
	    	//return redirect("/home"); // it will directly open login page since auth is not created

	    }

    }//end of function register(Request $request)


} //end of class RegisterController extends Controller
