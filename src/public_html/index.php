<?php
        include "includes/submit.inc.php";
    ?> 
<html>
	<head>
		<title>contact form</title>
	<!-- 	<link rel="stylesheet" href="main.css" type="text/css"> -->
	</head>
	<body>
		<div class="app">
				<h1 class="app-info">Contact Us</h1>
			<form class="form" action="<?=$_SERVER['PHP_SELF'];?>" method='post'>
		        <fieldset class="user_field">
					<div class="row _1" style="--index: 0">
						<div class="textfield">
							<input type="text" class="text-input" name="name" value="<?=$name ?>" autofocus>
							<span class="fieldinfo">Name</span>
						</div>
						<div class="textfield">
							<input type="text" class="text-input" name="email" value="<?=$email ?>">
							<span class="fieldinfo">Email</span>
						</div>
					</div>
				
					<div class="row _2" style="--index: 1">
				<div class="textfield">
					<input type="text" class="text-input" name="phone" value="<?=$phone ?>">
					<span class="fieldinfo">Phone</span>
				</div>
				<div class="textfield">
					<input type="text" class="text-input" name="city" value="<?=$city ?>">
					<span class="fieldinfo">City</span>
				</div>
			</div>
			<div class="row _3" style="--index: 2">
						<div class="textfield">
							<textarea class="text-input"  type="text" name="comment" value="<?=$comment ?>"></textarea>
						</div>
					</div>
      				<div class="error">
						   <?=$email_error?>
						
   					</div>
					<div class="row _4" style="--index: 3">
						<button class="submit btn" type="submit">Submit</button>
					</div>
					<div class="success">   <?=$success?></div>
				</fieldset>
			</form>
		</div>
	<!-- 	<script src="app.js"></script> -->
	  </body>
	  </html>







