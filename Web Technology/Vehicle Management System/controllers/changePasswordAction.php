<?php

		/*$handle = fopen("../Data/data.json", "r");
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


  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST"and count($_REQUEST)>0) {


			$index="";
			for($k = 0;$k< count($arr); $k++)
			{
				
				if(($_SESSION['username'] === $arr[$k]-> username))
				{
					$index=$k;
					
				}

             
			}

  
      if (empty($_POST['previousPassword'])||empty($_POST['newPassword'])) 
      {
        $isValid = false;
        echo "<br>";
        echo "<br>";
        echo"<center>";
        echo"<h2>";
        echo "Please fill up the form properly";
        echo"</center>";
        echo"</h2>";
        echo"<br><br>";
        
      }
      else {
        $isValid = true;
        echo "<br>";
        echo "<br>";
        echo"<center>";
        echo"<h2>";
        echo "Submitted Successfully";
        echo"</center>";
        echo"</h2>";
        echo"<br><br>";
        
      }

      if($isValid){

          if(($_POST['previousPassword'])===($arr[$index]-> password)){

          	$arr[$index]-> password=$_POST['newPassword'];


        	$handle= fopen("../Data/data.json", "w");



            for ($i=0; $i<count($explode)-1;$i++)
           {
              $encode = json_encode($arr[$i]);
              $res = fwrite($handle, $encode . "\n");
           }
           
        }
    
    }  

  }*/

  ?>

<?php
include ("../models/changepass_connection.php");

if (isset($_POST["oldpass"])){

  $username = $_POST ['username'];
  $oldpass = $_POST['oldpass'];
  $newPassword = $_POST ['newPassword'];
  /*if ($newPassword == $oldpass){
    echo "Password Matched!!";
  }*/

  
  //else{
    $sql = "SELECT * FROM employee_table WHERE Username = '$username' AND Password = '$oldpass'";
    $result=$conn -> query($sql);
    if (mysqli_num_rows($result)>0)
    {
      $sql="UPDATE employee_table SET Password= '$newPassword' WHERE Username = '$username'";
        if($conn -> query($sql)){echo "password changed";}
        else{echo "invalid";}
    }
    else{echo "invalid";}
  //}
}

?>
