<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Employee Registration</title>
	<script src="js/reg_validation.js"></script>
	<link rel="stylesheet" href="css/registration.css">
	<style>
		#filename {
			position: relative;
			top: 20px;
			left: 300px;
			font-weight: bolder;
		}
	</style>
</head>
      <?php
       //include "../views/header.php";
    ?>
<body>

<!DOCTYPE html>
<html> 
<center><h1 style="color:dodgerblue;"> Employee Registration Form </h1></center>
<body>	

	<form method="post" action="../controllers/registrationAction.php" novalidate onsubmit="return validate(this);">

	<div class="center">
	<fieldset>
	<legend><h2>General Information</h2></legend>
	 
		<label for="fname"> First Name </label>
		<input type ="text" name="fname" placeholder="First Name">

		<span id="fnameErrMsg"></span>

		<br><br>
		
		<label for="lname"> Last Name </label>
		<input type ="text" name="lname" placeholder="Last Name">

		<span id="lnameErrMsg"></span>

		<br><br>

		<label for="age"> Age </label>
		<input type ="number" name="age" placeholder="Age">

		<span id="ageErrMsg"></span>

		<br><br>

		<label for="nid"> NID </label>
		<input type ="text" name="nid" placeholder="NID">

		<span id="nidErrMsg"></span>

		<br><br>

		<label for="dob"> Date of Birth </label>
		<input type ="date" name="dob" >

		<span id="dobErrMsg"></span>

		<br><br>

		<label> Gender </label>

		<input type= "radio" name= "gender" value="male" id="male">
		<label for="male"> Male </label>

		<input type= "radio" name= "gender" value="female" id="female">
		<label for="female"> Female </label>

		<span id="genderErrMsg"></span>

		<br><br>
	</fieldset>
	<br><br>

	<fieldset>
		<legend><h2>Essentials</h2></legend>

		<label for="passportpic"> Passport-sized Picture </label>
		<form action="/action_page.php">
        <input type="file" id="myFile" name="filename">

        <!--<span><?php echo $passportpicErrMsg; ?></span> -->

		<br><br>

		<label for="fow"> Field of Work </label>
		<input type= "checkbox" name= "fow" value="Car mechanic" id="Car mechanic">
		<label for="Car mechanic"> Car Mechanic </label>

		<input type= "checkbox" name= "fow" value="Bike mechanic" id="Bike mechanic">
		<label for="Bike mechanic"> Bike Mechanic </label>

		<span id="fowErrMsg"></span>

		<br><br>

		</fieldset>
		<br><br>

		<fieldset>
			<legend><h2>Contact Info</h2></legend>

		<label for="email"> Email </label>
		<input type ="email" name="email" id= "email" placeholder="Email">

		<span id="emailErrMsg"></span>

        <br><br>
		
		<label for="mobileno"> Mobile No </label>
		<input type ="text" name="mobileno" id= "mobileno" placeholder="Mobile number">

		<span id="mobilenoErrMsg"></span>

		<br><br>
		</fieldset>
		<br><br>

		<fieldset>
			<legend><h2>Address</h2></legend>

		<label for="address"> Stree/House/Road </label>
		<input type ="text" name="address" id= "address" placeholder="Permanent Address">

		<span id="addressErrMsg"></span>

		<br><br>
		
		<label for="country"> Country </label>
		<select name="country" id= "country">
		<option value= "bd"> Bangladesh </option>
		<option value= "india"> India </option>
		<option value= "us"> United States of America </option>
		<br><br>
	</select>
	<br><br>
</fieldset>

<br><br>

<fieldset>
		<legend><h2>Sign-up</h2></legend>

		<label for="username"> Username </label>
		<input type ="text" name="username" id= "username" placeholder="Username">

		<span id="usernameErrMsg"></span>

		<br><br>

       <label for="password"> Password </label>
		<input type ="password" name="password" id= "password" placeholder="Password">

		<span id="passwordErrMsg"></span>

        <br><br>
    </fieldset>
</div>

	<input type= "submit" name="submit" value="Sign-up">

</form>
<br><br>

</body>
</html>
	</form>
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
