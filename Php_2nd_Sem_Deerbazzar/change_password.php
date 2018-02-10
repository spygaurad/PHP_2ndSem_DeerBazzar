<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Change Password</title>
    
    
    <link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="css/style.css">

<?php //for date select from calender ?>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  
  
</head>
<body>
<div class="pen-title">
  
</div>
<div class="rerun">
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Enter New Pasword</h1>
    <form action="change_password_success.php" method="post">
      <div class="input-container">
        
      <div class="input-container">
        <input type="password" name="pass" required="required" autofocus/>
        <label for="Password">Password</label>
        <div class="bar"></div>
      </div>
	 
	  	
	  <br>
	    <div class="button-container">
        <span><button type="submit" name="submit" >Enter</button></span>
      </div>
      
    </form>
  </div>
  </div>
</div>
    
    
  </body>
</html>
