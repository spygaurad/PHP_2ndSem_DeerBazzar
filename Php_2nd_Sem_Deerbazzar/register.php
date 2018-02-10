
	<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    
    
    <link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="css/style.css">

<?php //for date select from calender ?>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  
  <script>
  $(document).ready(function() {
    $("#datepicker").datepicker({  maxDate: new Date() });
  });
  </script>

</head>
<body>
<div class="pen-title">
  <h1>Sign Up</h1>
</div>
<div class="rerun">
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Register</h1>
    <form action="verify.php" method="post">
      <div class="input-container">
        <input type="text" name="user" required="required" autofocus/>
        <label for="Username">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" name="pass" required="required"/>
        <label for="Password">Password</label>
        <div class="bar"></div>
      </div>
	  <div class="input-container">
        <input type="" name="DOB" id="datepicker" required="required"/>
        <label for="DOB">DOB</label>
        <div class="bar"></div>
      </div>
	  <div class="input-container">
        <input type="" name="email" id="email" required="required" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"/>
        <label for="email">Email Address</label>
        <div class="bar"></div>
      </div>
	   
     
	   <div class="input-container">
        <input type="phonenum" name="contact" id="Contact" pattern="^\d{4}\d{3}\d{3}$" required/>
        <label for="contact">Contact</label>
        <div class="bar"></div>
      </div>
	  	
	  <br>
	    <div class="button-container">
        <span><button type="submit" name="submit" >Create Account</button></span>
      </div>
      
    </form>
  </div>
  </div>
</div>
    
    
  </body>
</html>
