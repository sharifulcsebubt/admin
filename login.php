<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smarthc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


if(isset($_REQUEST["submit"]))
{
	  $user=$_REQUEST["user"];
	  $pass=$_REQUEST["pass"];
	  $sql = ("SELECT * FROM user WHERE user='$user' && pass='$pass'");
	  $result = $conn->query($sql);

	  if($result->num_rows > 0)
	  {
	  		while($row = $result->fetch_assoc())
		    $_SESSION["user"]=$user;
		   header('location:welcome.php');
	  }
	  else
	  {
		  
          echo '<font color="red"><p align="center">YOUR USER & PASSWORD IS INVALID!</p></font>';
	  }
}

?>



</table>
</form>

<!DOCTYPE html>
<html>
<head>
	<meta charset=" ">
	<title>login Page</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
  <div class="box">
		<h2>LOGIN</h2>
  <form action="login.php" method="post" enctype="multipart/form-data">
  	<div class="inputbox">
    	<input type="text" name="user" required="" placeholder="username">

      
    </div>
    <div class="inputbox">
    	<input type="password" name="pass" required="" placeholder="password">
        
    </div>
    <input type="submit" name="submit" value="Login" placeholder="" url: >
      <a href="index.html">BACK HOME</a>
  </form>
    
  </div>
</body>
</html>