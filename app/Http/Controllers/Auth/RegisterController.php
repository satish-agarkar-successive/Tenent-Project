<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make
        (
            $data, 
            [
                'name' => ['required', 'regex:/^[a-zA-Z]+$/u', 'max:200'],
                'phone' => ['required','numeric','digits:10'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'term'=>['required'],
            ],
            [
                'name.regex' => 'User Name Should Not Contain Numeric Value.',
                'name.max' => 'User Name Should Contain Max 200 Characters only.',
                'phone.numeric' => 'Phone Number Should Be Numeric.',
                'phone.digits' => 'Phone Number Should Be 10 Digit Long.',
                'password.min' => 'Password Should Have Minimum 8 Characters.',
                'term.required' => 'Please Confirm Terms And Conditions.',
            ]


        );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'password' => bcrypt($data['password']),
        ]);

    }
}
