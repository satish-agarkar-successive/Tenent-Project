<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
    function testsmsget ()
    {
        // dd( $this->SEND_SMS('8698257457','Your One Time Password To Log Into GuestT : '.mt_rand(100000, 999999).' , Please Never Share This OPT') );

       	return view('api');  //crm index view
    }

    function sendsms (Request $req)
    {

        $number = strip_tags( $req['number'] );
    	$message = strip_tags( $req['message'] );

        dd( $this->SEND_SMS($number,'Your One Time Password To Log Into GuestT : '.mt_rand(100000, 999999).' , Please Never Share This OPT') );


    }


    public function SEND_SMS($number , $message)
    {
        $curl = curl_init();
        $phparray = array($number);
        $myJSON = json_encode($phparray);
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://smsapi.edumarcsms.com/api/v1/sendsms",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode(['apikey' => env('EDUMARC_SMS_API_KEY') , 'number' => $myJSON , 'message' => $message , 'senderId' => 'JORDAN' ]),
        CURLOPT_HTTPHEADER => array("cache-control: no-cache","content-type: application/json"),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) { return false; } 
        else {return true;}
    }



}
