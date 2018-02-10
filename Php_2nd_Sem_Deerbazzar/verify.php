<link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="css/style.css">
</head>  


<?php include 'datalogin.php';  ?>
<?php

if(isset($_POST['submit'])){
	
    $Username = $_POST['user'];
    $password = $_POST['pass'];
	$Date = $_POST['DOB'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	
	$sql = "SELECT * FROM members WHERE Username = '$Username'";
        $result = mysqli_query($connection,$sql);
        if(mysqli_num_rows($result)>=1)
            {
				echo "<script>var audio = new Audio('tudung.mp3');
			audio.play();</script>";
                echo "<SCRIPT type='text/javascript'> 
					alert('User Already Exists');
					window.location.replace('register.php');
					</SCRIPT>";
            }
			else
			{
				 // 2. Perform database query
    $query  = "INSERT INTO members (";
    $query .= "  Username, Password, DOB , Email, Contact";
    $query .= ") VALUES (";
    $query .= "  '{$Username}', '{$password}', '{$Date}', '{$email}', '{$contact}'";
    $query .= ")";	
			}
    $result = mysqli_query($connection, $query);

    if ($result) {
        $message = 'Succesfully Registered!!';
		
	echo "<script>var audio = new Audio('tudung.mp3');
			audio.play();</script>";
		
    echo "<SCRIPT type='text/javascript'> 
        alert('$message');
        window.location.replace('mainpage.php');
    </SCRIPT>";
    } else {
        // Failure
        // $message = "Subject creation failed";
        die("Database query failed. " . mysqli_error($connection));
    }
			
   
   }
?>