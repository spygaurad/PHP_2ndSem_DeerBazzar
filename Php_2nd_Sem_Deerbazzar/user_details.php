<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Share Details</title>
    
    
    <link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="css/style.css">
</head>



  <body>
<div class="pen-title">
  <h1>User Credentials</h1>
</div>
<div class="rerun">
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title"></h1>
    <form action="user_data_verify.php" method="post">
      <div class="input-container">
        <input type="text" name="cname" required="required" autofocus/>
        <label for="Cname">Company Name</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="number" name="nos" required="required" min="1"/>
        <label for="nos">Number of Shares</label>
        <div class="bar"></div>
      </div>
	  <div class="input-container">
        <input type="number" name="rate" required="required" min="1"/>
        <label for="rate">Rate</label>
        <div class="bar"></div>
      </div>
	        
	  <br>
	    <div class="button-container">
        <span><button type="submit" name="submit" >Enter</button></span>
      </div>
      
    </form>
  </div>

    
    
  </body>
</html>
