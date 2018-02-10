<?php
    $con=mysqli_connect("127.0.0.1", "root", "", "my_db");
    if (mysqli_connect_errno($con))
    {
        echo "MySql Error: " . mysqli_connect_error();
        }

    $query=mysqli_query($con,"SELECT * FROM employee WHERE username='$_POST[myusername]' && password='$_POST[mypassword]'");
    $count=mysqli_num_rows($query);
    $row=mysqli_fetch_array($query);

    if ($count==1)
    {
        session_start();
        $_SESSION['username'] = $_POST['myusername'];
        $_SESSION['password'] = $_POST['mypassword'];
        header("location: login_success.php");
        }
    else
    {
        echo "Invalid username or password";
        }   

    mysqli_close($con);
    ?>