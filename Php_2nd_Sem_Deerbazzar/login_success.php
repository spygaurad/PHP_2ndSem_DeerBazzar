
<link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="css/style.css">
</head>   
    
  <body>
<div class="pen-title">
  <h1>Dashboard</h1>
</div>
<div class="rerun">
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Welcome
	<?php 
	$name=$_COOKIE["user"];
		$names=$name;
		if(strpos($name, " ") !== false)
		{
			$parts=explode(" ",$name);
		$lastname=array_pop($parts);
		$uname=implode(" ",$parts);
		$name=ucfirst($uname);
   
}
	echo "$name";?></h1>
    <form>
      
      
	  <br>
	    <div class="button-container">
        <button><span><a href="view.php">View Details</a></span></button>
      </div>
	  <br>
	   <div class="button-container">
        <button><span><a href="change_password.php">Change Password</a></span></button>
      </div>
	  <br>
	  <div class="button-container">
        <button><span><a href="logout.php">Logout</a></span></button>
      </div>
      
    </form>
  </div>

    
    
  </body>
</html>