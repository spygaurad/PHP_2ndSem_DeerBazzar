<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    
    
    <link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="css/style.css">
</head>

  <body>

	  
      <?php include 'datalogin.php';  

      //execute the SQL query and return records
	  $id=$_GET['id'];
	  $names=$_COOKIE['user'];
	  $result = mysqli_query($connection,"DELETE FROM user_details WHERE id = $id");
	  if ($result) {  
	  header('Location: view.php');
	  }else {
        die("Database query failed. " . mysqli_error($connection));
    }mysqli_close($connection);
      ?>	  
	  </body>
	  </html>
	  