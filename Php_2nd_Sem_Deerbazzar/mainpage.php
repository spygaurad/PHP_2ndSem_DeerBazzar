
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>deer Bazar</title>
    
    
    <link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="css/style.css">
</head>

  <body>
<div class="pen-title">
  <h1><font color="red">deer</font></em> Bazar Login</h1>
</div>
<div class="rerun">
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>
    <form action="logincheck.php" action="user_data_verify.php"	method="post">
	
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
      <div class="button-container">
	  <span><button type="submit" name="submit" >SIGN IN</button></span>
      </div>
	  <br>
	    <div class="button-container">
        <button><span><a href ="register.php">Register</a></span></button>
      </div>
    
      
    </form>
  </div>

    
  </body>
</html>
