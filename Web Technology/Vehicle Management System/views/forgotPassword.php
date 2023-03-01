<!DOCTYPE html>
<html>
<head>
    
    <title>Forget Password </title>
    <script src="js/forpass_validation.js"></script>
    <link rel="stylesheet" href="css/forgot.css">

</head>
<?php
    //include "../views/header.php";
?>
<body>

  <!--<center><a href="../views/login.php">Back to Log-in page</a></center>-->
    <form action="" method="post" novalidate onsubmit="return validate(this);">

    <center><h1 style="color:orangered;"> Forgot Your Password? </h1></center>

  	<div class="center">
    <fieldset>
  		<legend><h2>Change Password</h2></legend>
  <center><p style="color:red;">Previous Email:<input type="text"name="email"Placeholder="Email"></center>
    <center><span id="emailErrMsg"></span></center>
  <br>
  <br>

  <center><p style="color:red;"> New Password: <input type="text"name="newPassword"Placeholder="New Password"></p><br>
    <span id="newpassErrMsg"></span>
  <br>
  <br>
  <center><input type="submit"value="Done"></center>
</fieldset>
</div>
   <center><h3><a href="../views/login.php">Back to Log-in page</a></h3></center>
  </form>

  <?php
  include "../controllers/forgotPasswordAction.php";
  ?>
    
<br><br>
	
  
</body>
<?php
       include "../views/footer.php";
    ?>
</html>