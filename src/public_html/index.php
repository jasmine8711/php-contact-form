<?php
        include "includes/submit.inc.php";
    ?> 
<html>
	<head>
		<title>contact form</title>
	<link rel="stylesheet" href="style.css" type="text/css"> 
	</head>
	<body>
		<div class="app">
			<form class="form" action="<?=$_SERVER['PHP_SELF'];?>" method='post'>
					<h1 class="app-info">Contact Us</h1>
					<div class="user_field">
					<div class="row _1" style="--index: 0">
						<div class="textfield">
							<input type="text" class="text-input" name="name" value="<?=$name ?>" autofocus>
							<span class="fieldinfo">Name
						
							</span>
							<br>
							<span class="error">	
							<?=$name_error?>   
						    </span>
						</div>
						<div class="textfield">
							<input type="text" class="text-input" name="email" value="<?=$email ?>">
							<span class="fieldinfo">Email</span>
							<br>
							<span class="error">	
							<?=$email_error?>   
						    </span>
						</div>
					</div>
				
					<div class="row _2" style="--index: 1">
				<div class="textfield">
					<input type="text" class="text-input" name="phone" value="<?=$phone ?>">
					<span class="fieldinfo">Phone</span>
					<br>
							<span class="error">	
							<?=$phone_error?>   
						    </span>
				</div>
				<div class="textfield">
					<input type="text" class="text-input" name="city" value="<?=$city ?>">
					<span class="fieldinfo">City</span>
					<br>
					<span class="error">	
						<?=$city_error?>   
					</span>
				</div>
			</div>
			<div class="row _3" style="--index: 2">
						<div class="textfield">
							<textarea class="text-input"  type="text" name="comment" value="<?=$comment ?>"></textarea>
							
						</div>
						
							<span class="error">	
							<?=$comment_error?>   
						    </span>
					</div>
					<div class="row _4" style="--index: 3">
					<span class="success">
						<?=$success?>
					</span>
						<button class="submit btn" type="submit">Submit</button>
					</div>
				
				</div>
			</form>
		</div>
	<script src="app.js"></script>	
	  </body>
	  </html>







