<?php
       //include "header.php";
    ?>
<?php
  session_start();
   if (count($_SESSION)===0)
   {
     header("../controllers/Logout.php");
   }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home page</title>
    <link rel="stylesheet" href="css/home.css">

</head>
<body>

	<center><h1>Vehicle Service Center Management System</h1></center>
 <center><a href="../views/home.php">Home</a> &nbsp &nbsp <a href="../views/employeeProfile.php"> Show Employee Profile</a> &nbsp &nbsp <a href="../views/changePassword.php">Change Password</a>&nbsp &nbsp</a>&nbsp &nbsp<a href="../controllers/Logout.php">Logout</a></center>
  
    
    <div class="a">
    <center><h2>Hello, <?php echo $_SESSION['username']; ?>, </h2></center> </div>
    <?php
    echo "<center>";
    echo "<p>";
    echo "<h3>";
    //echo $_SESSION['username'] ;
    //echo "</h3>";
    //echo"</p>";
    //echo "</center>";
    //echo "Employee";
    echo "</h3>";
    echo"</p>";
   ?>
   <br>
   <h2><center>What are you <br> up to! </center></h2>



</body>
<?php
       include "../views/footer.php";
    ?>

</html>