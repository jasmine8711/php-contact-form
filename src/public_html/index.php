<?php
      include "includes/signup.inc.php"
      ?> 
  <head><title>Contact Form</title></head>
  <link rel="stylesheet" href="styles.css">


<div class="app">
<form ng-submit='addMessage' class="form" action="<?=$_SERVER['PHP_SELF'];?>" method='post'>>
		<h1 class="app-info">Contact Us</h1>
		<div class="user_field">
			<div class="row _1" style="--index: 0">
				<div class="textfield">
					<input type="text" class="text-input" name="name">
					<span class="fieldinfo">Name</span>
				</div>
				<div class="textfield">
					<input type="email" class="text-input" name="email">
					<span class="fieldinfo">Email</span>
				</div>
			</div>
			<div class="row _3" style="--index: 2">
				<div class="textfield">
					<textarea class="text-input" placeholder="Type your message here."></textarea>
				</div>
			</div>
      <div class="error">
   <?=$email_error?>
   <?=$comment_error?> 
   </div>
			<div class="row _4" style="--index: 3">
				<button class="submit btn" type="submit">Submit</button>
			</div>
		</div>
	</form>
</div>



