
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Contact Us</h1>
<div class="error">

</div>
<form method="post" action="">
<?php include "includes/signup.inc.php"
?>

<h4>Fullname:</h4>
<input type="text" name="fullname" value="" >
<br>
<h4>*Email:</h4>
<input type="text" name="email" value="" placeholder ="Mail@gmail.com">
<br>
<h4>Your message:</h4>
<textarea name="comment" rows="5" cols="40"></textarea>
<br>
<br>
<div>
<?php
echo $emailErr;
?>
</div>
<button type="submit" name="Submit">SEND</button>

</form>

</body>
</html>

