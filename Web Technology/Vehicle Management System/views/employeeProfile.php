<?php
session_start();
include_once '../models/profile_connection.php';
?>

<!DOCTYPE html>
<head>
    
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Employee Profile</title>
   <link rel="stylesheet" href="css/home.css">
</head>
<body>

    <form method="POST">
    <center> <h1 style="color:cadetblue;"> Employee Profile Page  </h1> </center>
  <center><a href="home.php">Home</a> &nbsp &nbsp <a href="changePassword.php">Change Password</a>&nbsp &nbsp</a>&nbsp &nbsp<a href="../controllers/Logout.php">Logout</a></center>
    <br> 
    <h2> <?php echo $_SESSION['username']; ?>, Your Profile Infromation </h2>

    <h4>
    <?php
    
        if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
    }


    $sql = "SELECT * FROM employee_table WHERE Username = '$_SESSION[username]';";
    $result = mysqli_query($conn, $sql);
        
       
        if (mysqli_num_rows($result) > 0) {
  // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    echo "First name: " . $row["FirstName"]. "<br>".  "LastName: " . $row["LastName"]. "<br>". "Gender: " . $row["Gender"]. "<br>" . "Age: " . $row["Age"]. "<br>" . "Date of Birth: " . $row["Date_of_Birth"]. "<br>". "NID: " . $row["NID"]. "<br>". "Field of Work: " . $row["Field_of_Work"]. "<br>".  "Email: " . $row["Email"]. "<br>". "Mobile No.: " . $row["MobileNo"]. "<br>". "Address: " . $row["Address"]. "<br>". "Country: " . $row["Country"];
  }
} else {
  echo "0 results";
}



mysqli_close($conn);
?>
</h4>
 
   
</body>
<?php
       include "../views/footer.php";
    ?>
</html>