<?php 

	session_start();
	session_unset();
	session_destroy();

	header("../views/login.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Logout</title>
	<link rel="stylesheet" href="../views/css/logout.css">
</head>
<body>

	<center><h2><a href="../views/login.php">Back to Login again?</a></h2></center>


</body>
<?php
       include "../views/footer.php";
    ?>
</html>