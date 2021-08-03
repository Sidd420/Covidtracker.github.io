<?php
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $symp=$_POST['coronasym'];
    $msg=$_POST['msg'];
    

    $to='palsiddhanta01@gmail.com';
    $subject='Form Submisson Successfully';
    $messege="Name: ".$username."\n"."phone: ".$mobile."\n". "Wrote the following: "."\n\n".$msg;
    $headers="From: ".$email;
    if(mail($to,$subject,$messege,$headers)){
        echo "Email successfull sent";
    }else{
        echo "Email Sending failed";
    }
}
?>
