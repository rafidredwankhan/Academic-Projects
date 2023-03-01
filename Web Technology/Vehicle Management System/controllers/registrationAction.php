<?php 
		$fname = "";
		$fnameErrMsg = "";
		$lname = "";
		$lnameErrMsg = "";
		$age = "";
		$ageErrMsg = "";
		$nid = "";
		$nidErrMsg = "";
		$dob = "";
		$dobErrMsg = "";
		//$passportpic = "";
		//$passportpicErrMsg = "";
		$fow = "";
		$fowErrMsg = "";
		$gender = "";
		$genderErrMsg = "";
		$email = "";
		$emailErrMsg = "";
		$mobileno = "";
		$mobilenoErrMsg = "";
		$address = "";
		$addressErrMsg = "";
		$username = "";
		$usernameErrMsg = "";
		$password = "";
		$passwordErrMsg = "";
		$isValid = false;
		
		



		if ($_SERVER['REQUEST_METHOD'] === "POST") {

			function test_input($data) {
				$data = htmlspecialchars($data);
				return $data;
			}

			$fname = test_input($_POST['fname']);
			$lname = test_input($_POST['lname']);
			$age = test_input($_POST['age']);
			$nid = test_input($_POST['nid']);
			$dob = test_input($_POST['dob']);
			//$passportpic = test_input($_POST['passportpic']);
			$fow = isset($_POST['fow']) ? test_input($_POST['fow']) : "";
			$gender = isset($_POST['gender']) ? test_input($_POST['gender']) : "";
			$email = test_input($_POST['email']);
			$mobileno = test_input($_POST['mobileno']);
			$address = test_input($_POST['address']);
			$country = isset($_POST['country']) ? test_input($_POST['country']) : "";
			$username = test_input($_POST['username']);
			$password = test_input($_POST['password']);
			


			$message = "";
			if (empty($fname)) {
				//$firstnameErrMsg = "First Name is Empty";
			}
			else {
				if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
				$firstnameErrMsg = "Only letters and spaces allowed.";
				}
			}

			$message = "";
			if (empty($lname)) {
				$lastnameErrMsg = "Last Name is Empty";
			}
			else {
				if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
				$lastnameErrMsg = "Only letters and spaces allowed.";
				}
			}
			

			$message = "";
			if (empty($age)) {
				$ageErrMsg = "Age is Empty";
			}
			

			$message = "";
			if (empty($nid)) {
				$nidErrMsg = "NID is Empty";
			}
			/*else {
				if (!preg_match("/^[a-zA-Z-' ]*$/",$nid)) {
				$nidErrMsg = "Only numbers allowed.";
				}
			}*/

			$message = "";
			if (empty($dob)) {
				$dobErrMsg = "Date of Birth is Empty";
			}
			else {
				if (!preg_match("/^[a-zA-Z-' ]*$/",$dob)) {
				$dobErrMsg = "Only letters and spaces allowed.";
				}
			}

			/*$message = "";
			if (empty($passportpic)) {
				$passportpicErrMsg = "Please upload a Passport-sized Picture";
			}*/

			$message = "";
			if (empty($fow)) {
				$fowErrMsg = "Field of Work is not selected";
			}

			$message = "";
			if (empty($gender)) {
				$genderErrMsg = "Gender not selected";
			}
			

			$message = "";
			if (empty($email)) {
				$emailErrMsg = "Email is Empty";
				/*$message .= "Email is Empty";
				$message .= "<br>";*/
			}
			else {
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$message .= "Please correct email.";
					$message .= "<br>";
				}
			}

			$message = "";
			if (empty($mobileno)) {
				$mobilenoErrMsg = "Mobileno is Empty";
				/*$message .= "Mobileno is Empty";
				$message .= "<br>";*/
			}

			$message = "";
			if (empty($address)) {
				$addressErrMsg = "Street/House/Road is Empty";
				/*$message .= "Street/House/Road is Empty";
				$message .= "<br>";*/
			}

			if (!isset($country) or empty($country)) {
				$message .= "Country not Seletect";
				$message .= "<br>";
			}

			$message = "";
			if (empty($username)) {
				$usernameErrMsg = "Username is Empty";
				/*$message .= "Mobileno is Empty";
				$message .= "<br>";*/
			}

			$message  = preg_match('@[0-9]@', $password);
            if ( !$message  || strlen($password) < 8) {
            $passwordErrMsg = 'Password should be at least 8 characters in length and should include at least one number!';
            } 
            else {
            $password = $_POST['password'];
            }

			
			if ($_SERVER['REQUEST_METHOD'] === "POST" and count($_REQUEST)>0) {
			if (empty($fname)||empty($lname)||empty($_POST['gender'])||empty($age)||empty($email)||empty($mobileno)||empty($address)||empty($_POST['fow'])||empty($nid)||empty($username)||strlen($password) < 8) {
				$isValid = false;
				echo "Registration Unsuccessful";
				header("Location: ../views/Registration.php");
			}
			else {
				$isValid = true;
				//echo "Registration Successful";
				header("Location: ../views/login.php");
			}
		 }
	}

	        if ($isValid) { 

            $handle = fopen("../Data/data.json", "a");
            $arr = array('fname' => $fname,'lname' => $lname,'gender' => $_POST['gender'],'age' => $age,'email' => $email,'nid' => $nid,'mobileno' => $mobileno,'address'=>$address,'fow'=>$_POST['fow'],'username'=>$username,'password'=>$password);
            $encode = json_encode($arr);

            $res = fwrite($handle, $encode . "\n");
        }
        else
        {
            $res=false;
        }
	        
	?>

		
	?>
	<?php
	include "../models/Connection.php";

    ?>