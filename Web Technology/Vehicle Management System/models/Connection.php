<?php 
		
		$hostname = "localhost";
		$username = "root";
		$password = "";
		$dbname = "employees";

		$conn = mysqli_connect($hostname, $username, $password, $dbname);

		if(isset($_POST['submit'])){
	    if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['gender']) && !empty($_POST['age']) && !empty($_POST['dob']) && !empty($_POST['nid']) && !empty($_POST['fow']) && !empty($_POST['email']) && !empty($_POST['mobileno']) && !empty($_POST['address']) && !empty($_POST['country']) && !empty($_POST['username']) && !empty($_POST['password']) )
	{
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$gender = $_POST['gender'];
			$age = $_POST['age'];
			$dob = $_POST['dob'];
			$nid = $_POST['nid'];
			$fow = $_POST['fow'];
			$email = $_POST['email'];
			$mobileno = $_POST['mobileno'];
			$address = $_POST['address'];
			$country = $_POST['country'];
			$username = $_POST['username'];
			$password = $_POST['password'];


			$sql = "insert into employee_table (FirstName, LastName, Gender, Age, Date_of_Birth, NID, Field_of_Work, Email, MobileNo, Address, Country, Username, Password) 
			values('$fname','$lname','$gender','$age','$dob','$nid','$fow','$email','$mobileno','$address','$country','$username','$password')";
			mysqli_query($conn,$sql);
	}
	//else{echo "all fields required"};
	}	
		//return $conn;

	
?>

