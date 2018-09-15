<?php
	
	$error="";
	$successMessage="";
	if($_POST){
		if($_POST["email"] == ""){
			$error="Enter your email address.<br>";
			
		}
		if($_POST["subject"] == ""){
			$error.="Enter the subject.<br>";
		}
		if($_POST["content"] == ""){
			$error.="Enter the content.<br>";
		}
		if($error != ""){
			$error ='<div class="alert alert-danger" role="alert">'.$error.'</div>';
			
		}else{
			$emailTo="me@myadmin.com";
			$subject=$_POST["subject"];
			$content=$_POST["content"];
			$headers="From:".$_POST["email"];
			if(mail($emailTo,$subject,$content,$headers)){
				$successMessage='<div class="alert alert-success" role="alert">Your response is successfully submitted</div>';
			
		}else{
				$error ='<div class="alert alert-danger" role="alert">Please try again later</div>';
		}
		}
	}


?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>php first project</title>
	<style>
	
	</style>
  </head>
  <body>
	<div class="container">
    <h1>WE love your feedbacks.</h1>
	<div id="mayday"><?php echo $error.$successMessage; ?></div>
	<form method="post">
  <div class="form-group">
    <label for="email">Email</label>
    <input name="email" type="email" class="form-control" id="email" placeholder="Enter your email address">
  </div>
	 <div class="form-group">
    <label for="subject">Subject</label>
    <input type="subject" class="form-control" name="subject" placeholder="Enter the subject">
  </div>

  <div class="form-group">
    <label for="content">What would you like to ask us</label>
    <textarea class="form-control" id="content" name="content" rows="3"></textarea>
   </div>
  <button  id="submit" type="submit" class="btn btn-primary">Submit</button>
</form>
	
	
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript">
	 $("form").submit(function(e){
	 
    
		
		var error="";
		if($("#email").val() == ""){
			error="Enter your email address"+"<br>";
		}
		if($("#subject").val() == ""){
			error= error+"Enter the subject"+"<br>";
		}
		if($("#content").val() == ""){
			error=error+"Enter the content"+"<br>";
		}
		
		if(error != ""){
			$("#mayday").html('<div class="alert alert-danger" role="alert">'
  +error+
'</div>');
			return false;
		}
		if(error == ""){
			
			$("#mayday").html('<div class="alert alert-success" role="alert"> Your form is successfully submitted</div>');
			 return true;
		}
		
		  });
		
	</script>
 </body>
</html>