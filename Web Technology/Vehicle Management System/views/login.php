<?php 
	//session_start();

	if (isset($_SESSION['username'])) {
		header("Location:../views/home.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" href="css/home.css">
	<script src="js/login_validation.js"></script>
	<link rel="stylesheet" href="css/login.css">
</head>
    <?php
       //include "../views/header.php";
    ?>
<body>

	<center><h1 style="color:orangered;"> Vehicle Service Center Management System </h1></center>

	<div class="center">
	<fieldset>
		<legend><h2>Login</h2></legend>

	<?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php }
         ?>
	<?php

		$handle = fopen("../Data/data.json", "r");
		$data = fread($handle, filesize("../Data/data.json"));
	?>


	<?php
        
		$explode = explode("\n", $data);


	
	?>

	<?php

		$arr= array();
		for ($i = 0; $i < count($explode)-1; $i++)
		{
			$json=json_decode(($explode[$i]));
			array_push($arr, $json);
		}
	?>

	<form action="" method="post" novalidate onsubmit="return validate(this);">

		<center><label id="username">Username:</label>
		<input type="text" name="username" id="username"></center>
		<span id="usernameErrMsg"></span>
		<br><br>

		<center><label id="password">Password:</label>
		<input type="password" name="password" id="password"></center>
		<span id="passwordErrMsg"></span>
		<br><br>

		<center><input type="submit" name="submit" value="Login"></center>
		
		<p class="p1">
		<h3>Forgotten password? <a href="../views/forgotPassword.php"> Click here </a> To create new password!!</h3>

		<h3>Want to register and create an account? <a href="../views/registration.php"> Click here </a> To create new account!!</h3>
	</p>
		
		
	</form>
	<?php
       include "../controllers/LoginAction.php";
    ?>

	
    </fieldset>
</div>


	
	<?php 

		if (isset($_SESSION['msg']) and !empty($_SESSION['msg'])) {
			echo $_SESSION['msg'];
		}

	?>


</body>
<?php
       include "../views/footer.php";
    ?>
</html>