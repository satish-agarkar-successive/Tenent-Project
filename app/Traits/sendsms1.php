<?php
namespace App\Traits;

/**
 * 
 */
trait SendSms
{
    public function SendSms($msg,$mobile){
        // dd($msg,$mobile);

        /*******SMS Send Coding*/
    //    $username = "Sosense";
    //    $password = "Sosense123@";
    //    $sid = "SOSENS";
    //    $message = urlencode($msg);
    //       $fl = "0";
    //       $type = "txt";

    //       $ch = curl_init("http://cloud.smsindiahub.in/vendorsms/pushsms.aspx?user=".$username."&password=".$password."&msisdn=".$mobile."&sid=".$sid."&msg=".$message."&fl=".$fl."");
    //       curl_setopt($ch, CURLOPT_HEADER, 0);
    //       curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    //       $output = curl_exec($ch);
    //       curl_close($ch);
$curl = curl_init();
$APIKEY='cjixzzbgs0002y9qu1696t8yu';
$phparray = array('8698257457');

$myJSON = json_encode($phparray);
$invoice =array("apikey"=>$APIKEY,"number"=>$myJSON,"message"=>"Test Message","senderId"=> "JORDAN");
$options = array(

    CURLOPT_URL => "https://smsapi.edumarcsms.com/api/v1/sendsms",
    
    CURLOPT_RETURNTRANSFER => true,
    
    CURLOPT_ENCODING => "",
    
    CURLOPT_MAXREDIRS => 10,
    
    CURLOPT_TIMEOUT => 30,
    
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    
    CURLOPT_CUSTOMREQUEST => "POST",
    
    CURLOPT_POSTFIELDS => http_build_query($invoice),
    
    CURLOPT_HTTPHEADER => array(["cache-control: no-cache","content-type: application/json"]),
    
);
curl_setopt_array($curl,array_merge($options));

$response = curl_exec($curl);

$err = curl_error($curl);

// curl_close($curl);

// curl_close($curl);

echo curl_errno($curl);
echo curl_error($curl);
curl_close($curl);

if ($err) {

echo "cURL Error #:" . $err;

} else {

echo $response;

}
    }
    
}