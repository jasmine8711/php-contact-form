<?php

$email_error =$comment_error = $name_error= "";
$name = $email = $comment ="";
if($_SERVER["REQUEST_METHOD"]=="post"){
    if(empty($_POST["name"])){
        $name_error ="Name is required!";
    }else{
        $name = test_input($_POST["name"]);
        if(!preg_match("/^[a-zA-Z ]*$/",$name)){
            $name_error="Only letters and white space allowed!";
        }
    }
    if(empty($_POST["email"])){
        $email_error = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $email_error="Invalid email format!";
        }
    }
    if(empty($_POST["comment"])){
        $comment_error = "please fill your message!";
    } else{
        $comment = test_input($_POST["comment"]);
    }

}


function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
die;


if (empty($_POST["name"])) {
  $sendMessage="please send us message!";

 } else {
    $emailcontent = test_input($_POST["email"]);
    // 检测邮箱是否合法
   valid_email($emailcontent);
 }
    $to = "jasmine8711@gmail.com";
    $subject ="message";
    $txt = test_input($comment);
    mail($to,$subject,$txt);
    $send;

 //header("Location:../index.php");

 function valid_email($str) {
    return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
    }
    
    if(!valid_email($email)){
    echo "Invalid email address.";
    }
    
 
