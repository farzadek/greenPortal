<?php
$msg = $_GET["msg"];
$email_to_manager = 'farzadek@gmail.com';
if(mail($email_to_manager,"Mesage Received!",$msg)){
    echo true;
}

?>