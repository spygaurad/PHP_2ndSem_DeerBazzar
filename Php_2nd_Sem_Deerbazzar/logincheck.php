<html>


<?php


// 1. Create a database connection
include 'datalogin.php';

    $query=mysqli_query($connection,"SELECT * FROM members WHERE username='$_POST[user]' && password='$_POST[pass]'");
    $count=mysqli_num_rows($query);
    $row=mysqli_fetch_array($query);

    if ($count==1)
    {
       $seconds = 5 + time();
		setcookie(loggedin, date("F jS - g:i a"), $seconds);		
		$cookie_name = "user";
		$cookie_value = $_POST["user"];
		setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day


		header("location: login_success.php");   
	
        }
    else
    {	 	 
	
    $message = 'Incorrect Username or Password.Please try again!!';
		
	echo "<script>var audio = new Audio('tudung.mp3');
			audio.play();</script>";
		
    echo "<SCRIPT type='text/javascript'> 
        alert('$message');
        window.location.replace('mainpage.php');
    </SCRIPT>";
	
   }
	   

    mysqli_close($connection);
    ?></html>