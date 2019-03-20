<?php
$email = $_REQUEST["rec_email"];
$msg = $_REQUEST["msg"];
$name = $_REQUEST["name"];
if($email && $msg && $name){
    mail($email,"Your Mesage Received!",$msg)){
        echo true;
    }
}

$email_to_manager = 'farzadek@yahoo.ca';
$msg = $_REQUEST["msg"].' | '.$_REQUEST["name"];
if(mail($email_to_manager,"Mesage Received!",$msg)){
    echo true;
}

?>