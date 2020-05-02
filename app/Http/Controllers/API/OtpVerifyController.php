<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\OTP;
use App\Events\Registered;
use App\Traits\SendSms;
use DB;

class OtpVerifyController extends Controller
{
    use SendSms;
    public $successStatus = 200;
    public function resendOtp(Request $request)
    {

        $id = $request->id;
        $user = Users::where("user_id", $id)->first();
        $mobile = $user->user_mobiled;

        $otp = mt_rand(1000, 9999);
        $otp_exist = DB::table('otp')->where('user_id', $id)->first();
        $success['token'] =  $user->createToken('MyApp')->accessToken;

        if ($otp_exist != null) {

            $otp_exist = DB::table('otp')->where('user_id', $id)->update(['otp' => $otp]);

            $msg = "Your mobile verification code is $otp for login on tenant App";

            $this->SendSms($msg, $mobile);

            // event(new Registered($user,$otp));
        }
        return response()->json(['success' => $success, 'message' => "OTP send on your registerer mobile number"], $this->successStatus);
    }

    public function verifyOtp(Request $request)
    {
        // dd($request->all());
        $this->validate(
            $request,
            [
                'otp.*' => 'required',
            ],
            [
                'otp.*' => 'Please Enter OTP.'
            ]
        );
        // dd(implode('', $request->otp));
        $id = $request->id;
        // return $id;
        // $id =  $request->get('id');
        $otp = $request->otp;
        // return $id;
        $user_otp = DB::table('otp')->where('user_id',$id)->first();

        // $otp_exist = DB::table('otp')->first();
        // return $otp_exist->otp;

        if ($user_otp->otp == $otp) {
            
            $user = Users::where('user_id', $request->get('id'))
                         ->update(['is_mobile_verified' => 1]);

            return response()->json(['message' => "Mobile verification successfully done."], $this->successStatus);

        } else {
            return response()->json(['message' => "Please check otp you have entered"], 401);
        }
        // $user = User::findOrFail($id);

    }
}
