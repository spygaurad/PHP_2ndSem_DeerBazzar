<link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="css/style.css">
</head>   
    
<?php include 'datalogin.php';  ?>
<?php
// Often these are form values in $_POST

if(isset($_POST['submit'])){

//    
	$uname=$_COOKIE["user"];
    $cname = $_POST['cname'];
    $nos = $_POST['nos'];
	$rate = $_POST['rate'];
	$total =$nos*$rate;
	
	$sql = "SELECT * FROM user_details WHERE Company = '$cname'&& shares  = '$nos' && Rate='$rate' && username='$uname'";
    $result = mysqli_query($connection,$sql);
	
	if(mysqli_num_rows($result)>=1)
            {
				echo "<script>var audio = new Audio('tudung.mp3');
			audio.play();
			</script>";
			echo"
			<script>
			alert('Stock already exists!!');
			 window.location.replace('user_details.php');
			 </script>
			
			";
    
  
			}  
			else
			{

   
   jump:
    // 2. Perform database query
    $query  = "INSERT INTO user_details (";
    $query .= " username, Company, shares, Rate, total_price";
    $query .= ") VALUES (";
    $query .= " '{$uname}', '{$cname}', {$nos},{$rate},{$total} ";
    $query .= ")";
	
    $result = mysqli_query($connection, $query);

    if ($result) {
               	
    $message = 'Data Successfully Added !!';
		
	echo "<script>var audio = new Audio('tudung.mp3');
			audio.play();</script>";
		
    echo "<SCRIPT type='text/javascript'> 
        alert('$message');
        window.location.replace('view.php');
    </SCRIPT>";
	
   } else {
        // Failure
        // $message = "Subject creation failed";
        die("Database query failed. " . mysqli_error($connection));
    }
}
}

?>