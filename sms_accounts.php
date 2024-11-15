<?php 

$massage="";

    //sms
 function sms($dest_addr,$sms_text){

          

       

$url = "https://api.mobireach.com.bd/SendTextMessage?Username=aksid&Password=Akhr@2019&From=AKSID_FIN";



$fields = array(

    'Username'      => "aksid",

    'Password'      => "Akhrd@2023",

    'From'          => "AKSID FIN",

    'To'            => $dest_addr,

    'Message'       => $sms_text

);



//open connection

$ch = curl_init();



//set the url, number of POST vars, POST data

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_POST, count($fields));

curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($fields));



//execute post

$result = curl_exec($ch);



//close connection

curl_close($ch);





}

//$str .= "Dear sir \r\n";
//$str .= "Dear kawsar \r\n";



$recipients=8801783504771;

$massage="Dear kawsar,\r\n";

$massage  = "Dear Sir,\r\nPlease Approve Pending Sales Order.\r\n";
$massage.=  "Do No : 505\r\n";


$sms_result=sms($recipients,$massage);

?>