<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Edit</title>
  <?php include 'datalogin.php';  ?>
    
    <link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="css/style.css">
</head>
<?php
 //execute the SQL query and return records
	  $names=$_COOKIE['user'];
	  	  
	  $id = $_GET['id'];
	  
	  $result = mysqli_query($connection,"SELECT * FROM user_details WHERE id = $id ");
	  $name=ucfirst($names);
	  $row = mysqli_fetch_assoc( $result )
      ?>
  <body>
<div class="pen-title">
  <h1>Update Stock</h1>
</div>
<div class="rerun">
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Enter Details</h1>
  <form action="edit_success.php?id=<?php echo $id;?>" method="post">
  <div class="input-container">
              <div class="input-container">
        <input type="text" name="cname" required="required" value="<?php  echo $row['Company']; ?>"/>
        <label></label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="text" name="nos" required="required"/ value="<?php echo $row['shares']; ?>">
        <label for="No of Shares"></label>
        <div class="bar"></div>
      </div>
	  <div class="input-container">
        <input type="text" name="nor" required="required" value="<?php echo $row['Rate']; ?>"/>
        <label for="Rate"></label>
        <div class="bar"></div>
      </div>
      
	  <br>
	    <div class="button-container">
        <span><button type="submit" name="submit" >Update Stock</button></span>
      </div>      
    </form>
  </div>
  </body>
</html>