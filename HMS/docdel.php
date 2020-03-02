<?php
 $conn = new mysqli("localhost", "Deepak", "Deepak@123", "hms");
 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 }

else{
	$deleteid=$_GET['doctor_id'];
   $query=mysqli_query($conn,"delete from doctor where doctor_id='{$deleteid}'") or die(mysqli_error());
    
   header("location:deletedoc.php");
}
