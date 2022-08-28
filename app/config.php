<?php

$con = new mysqli($host="localhost", $username="root", $passwd="", $dbname="sms");

if($con->connect_error) {
    die($con->connect_error);
} 
// else {
//     echo "connected";
// }

// twilio test credentials
return $config = [

    'account_sid'=>'',
    'auth_token'=> '',
    'twilio_number'=>''

];



?>