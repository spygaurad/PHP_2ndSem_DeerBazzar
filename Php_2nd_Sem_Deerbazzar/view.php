<!doctype html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>deer Share Data</title>
	   <link rel="stylesheet" href="tcss/normalize.css">    
        <link rel="stylesheet" href="tcss/style.css">
		
<style>
input {
    border: 5px  white; 
    
    padding-right: 15px;
	padding-top:5px;
	padding-left:10px;
	padding-bottom:15px;
    
    margin: 0 0 10px 0;
	width: 200px;
	height: 15px;	
	font-size: 17px;
    line-height: 2;
	color:#167F92;
	
}
input:hover{
	border: 3px solid #167F92;
}
::-webkit-input-placeholder { 
	color: #167F92;
    font-size: 17px;
    line-height: 1;
}
</style>
    </head>
    <body>
      <?php include 'datalogin.php';      
	  
		$name=$_COOKIE["user"];
		$names=$name;
		$fname=ucfirst($name);
		if(strpos($name, " ") !== false)
		{
			$parts=explode(" ",$name);
		$lastname=array_pop($parts);
		$uname=implode(" ",$parts);
		$fname=ucfirst($uname);
   
		}
			  
		$result = mysqli_query($connection,"SELECT * FROM user_details WHERE username='$names' ORDER BY total_price DESC");
		
      ?>
	  
	   <b><h1><b style="padding-left:20%;">Stock <span>Details</span></b><span style="float:right; padding-right:20%"><?php echo "Hello $fname!!"; ?></span></h1></b>:
	    <b><h1><b style="padding-left:20%;"> <span></span></b><span style="float:right; padding-right:20%;">
		
		<form action="search.php" method="POST">
		<input class="submit_on_enter"  name="search" type="text" placeholder="Search Company"></input>
		<a href="logout.php" class="myButton">Logout</a></span></h1></b>
		</form>
		
		
		
     <center><table class="responstable" style="width:60%" >
      <thead>
        <tr>
          <th>S.N</th>
          <th>Company Name</th>
          <th>Number of Shares</th>
          <th>Rate</th>
          <th>Total Price</th>
		  <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $i=0;
		
          while( $row = mysqli_fetch_assoc( $result ) ){
            $i++;
			
			$id = "{$row['id']}";
			echo	
            "<tr>
              <td style='width:1%'>$i</td>
              <td style='width:11%'>{$row['Company']}</td>
              <td style='width:13%'>{$row['shares']}</td>
              <td style='width:11%'>{$row['Rate']}</td>
              <td style='width:11%'>{$row['total_price']}</td>			  
              <td style='width:13%'>";echo"<b style='float:right; padding-right:20%;'>
			  
				<a href='edit.php?id=" . $id . "'><button type='button' class='btn btn-primary'>EDIT</button></a>
				<a href='delete_success.php?id=" . $id . "' ><button type='button' class='btn btn-primary'>DELETE</button></a></b>
						  
			  </td>			  
            </tr>\n";
          }
        ?>
      </tbody>
    </table></center>
	<b style="float:right; padding-right:20%;"><a href="login_success.php" class="myButton">Dashboard</a> &nbsp <a href="user_details.php" class="myButton">Add</a></b>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js'></script>
	<script type="text/javascript">
// Using jQuery.

$(document).ready(function() {

  $('.submit_on_enter').keydown(function(event) {
    // enter has keyCode = 13, change it if you want to use another button
    if (event.keyCode == 13) {
      this.form.submit();
      return false;
    }
  });

});
</script>
     <?php mysqli_close($connection); ?>
    </body>
    </html>