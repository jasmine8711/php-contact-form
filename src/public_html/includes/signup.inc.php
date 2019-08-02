<?php

$fullname = $_POST["fullname"];
$email =$_POST["email"];
$emailErr;
$comment =$_POST["comment"];

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (empty($_POST["email"])) {
    $emailErr = "Email is required";

 } else {
    $emailcontent = test_input($_POST["email"]);
    // 检测邮箱是否合法
   valid_email($emailcontent);
 }
    $to = "jasmine8711@gmail.com";
    $subject ="message";
    $txt = test_input($comment);
    mail($to,$subject,$txt);
   // echo "send";

 //header("Location:../index.php");

 function valid_email($str) {
    return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
    }
    
    if(!valid_email($email)){
    echo "Invalid email address.";
    }else{
    echo "Valid email address.";
    }
    
 
