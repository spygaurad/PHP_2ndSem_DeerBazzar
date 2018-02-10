<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Password Change</title>
    
    
    <link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="css/style.css">
</head>

  <body>

	   
     <?php include 'datalogin.php';  

      //execute the SQL query and return records
	  $names=$_COOKIE['user'];
	  $pass=$_POST['pass'];
      $result = mysqli_query($connection,"UPDATE members SET Password='$pass' WHERE Username='$names' ");
	 
	 if ($result) {  
	  $message = 'Password Changed';
		
	echo "<script>var audio = new Audio('tudung.mp3');
			audio.play();</script>";
		
    echo "<SCRIPT type='text/javascript'> 
        alert('$message');
        window.location.replace('login_success.php');
    </SCRIPT>";
  
	  }else {
        die("Database query failed. " . mysqli_error($connection));
    }mysqli_close($connection);
      ?>	  
	  </body>
	  </html>
	  