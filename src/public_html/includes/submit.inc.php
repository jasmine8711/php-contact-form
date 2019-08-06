<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
   // Load Composer's autoloader
   // require '../../vendor/autoload.php';
   require 'vendor/autoload.php';
 
    $email_error =$comment_error = $name_error= $phone_error=$city_error="";
    $name = $email = $comment =$phone=$city=$success="";
  

if($_SERVER["REQUEST_METHOD"]=="POST"){
 
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

    if(empty($_POST["phone"])){
        $phone_error = "Phone is required";
    } else {
        $phone = test_input($_POST["phone"]);
        if(!preg_match("/^[0-9]*$/",$phone)){
            $phone_error = "Invalid phone number";  
        }
    }
 
    if(empty($_POST["city"])){
        $city_error = "Please fill your city!";
    } else{
        $city = test_input($_POST["city"]);
        $city_error = "";

    }

    if(empty($_POST["comment"])){
        $comment_error = "please fill your message!";
    } else{
        $comment = test_input($_POST["comment"]);
        $comment_error ="";
    }

    if($name_error == ''and $email_error =='' and $phone_error == '' and $city_error == ''){
        $comment_body = '';
        unset($_POST['submit']);
        foreach($_POST as $key => $value){
            $comment_body .= "$key:$value\n";
        }
        
     

        
        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);
        
        try {
            //Server settings
           // $mail->SMTPDebug = 2;                                       // Enable verbose debug output
            $mail->isSMTP();                                            // Set mailer to use SMTP
            $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = $_ENV["MAIL_USERNAME"];                     // SMTP username
            $mail->Password   = $_ENV["MAIL_PASSWORD"];                               // SMTP password
            $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
            $mail->Port       = 587;                                    // TCP port to connect to
        
            $mail->setFrom($email
            , $name);  //发件人
            $mail->addAddress($_ENV["MAIL_USERNAME"], 'Mao');  // 收件人
            //$mail->addAddress('ellen@example.com');  // 可添加多个收件人
            $mail->addReplyTo($_ENV["MAIL_USERNAME"], 'info'); //回复的时候回复给哪个邮箱 建议和发件人一致
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body    = $comment_body;

        
            $mail->send();
            $success= 'Message send!';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

 
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$page = $_SERVER['PHP_SELF'];
$sec = "9";
header("Refresh: $sec; url=$page");